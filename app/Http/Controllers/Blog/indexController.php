<?php

namespace App\Http\Controllers\Blog;

use App\Repositories\Blog\ArticleRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    protected $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    //
    public function index()
    {
        $lists = $this->articleRepository->paginate(config('common.blog.pages'));
        return view('blog.index', compact('lists'));
    }

    public function show($id)
    {
        $id = (int)$id;
        if ($id < 1) return redirect(url('/'))->withErrors('非法操作');

        $article = $this->articleRepository->find($id);
        if (empty($article)) return redirect(url('/'))->withErrors('数据不存在');

        $article->increment('views');

        return view('blog.show', [
            'article' => $article,
            'tags' => $article->tags
        ]);
    }

}