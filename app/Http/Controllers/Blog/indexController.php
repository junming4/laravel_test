<?php

namespace App\Http\Controllers\Blog;

use App\Repositories\Blog\ArticleRepository;
use App\Repositories\Blog\TagRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class indexController
 * @package App\Http\Controllers\Blog
 */
class indexController extends Controller
{
    /**
     * @var ArticleRepository
     */
    protected $articleRepository;

    /**
     * @var TagRepository
     */
    protected $tagRepository;

    /**
     * indexController constructor.
     * @param ArticleRepository $articleRepository
     * @param TagRepository $tagRepository
     */
    public function __construct(ArticleRepository $articleRepository, TagRepository $tagRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->tagRepository = $tagRepository;
    }

    //
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $tag_id = (int)$request->get('tag_id', 0);
        $type_id = (int)$request->get('type_id', 0);
        $keywords = strip_tags($request->get('keywords',''));

        //todo 需要优化
        if ($tag_id > 0) { //大于0 时
            $tags = $this->tagRepository->find($tag_id);
            $lists = $tags->articles()->ofTypeId($type_id)->ofKeywords($keywords)->paginate(config('common.blog.pages'));
        } else {
            $lists = $this->articleRepository->scopeQuery(function ($query) use ($type_id, $keywords) {
                $type_id = (int)$type_id;
                $keywords = trim($keywords);
                if ($type_id > 0) $query = $query->where('type_id', $type_id);
                if (strlen($keywords) > 0) {
                    $query = $query->orWhere('title', 'like', '%' . $keywords . '%')
                        ->orWhere('description', 'like', '%' . $keywords . '%');
                }
                return $query;
            })->paginate(config('common.blog.pages'));
        }
        return view('blog.index', compact('lists'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function show($id)
    {
        $id = (int)$id;
        if ($id < 1) return redirect(route('blog.index'))->withErrors('非法操作');

        $article = $this->articleRepository->find($id);
        if (empty($article)) return redirect(route('blog.index'))->withErrors('数据不存在');

        $article->increment('views');

        return view('blog.show', [
            'article' => $article,
            'tags' => $article->tags
        ]);
    }

}
