<?php

namespace App\Services;

use App\Repositories\ArticleRepository;
use App\Repositories\TagRepository;

/**
 * 推荐服务
 * Class RecommendServices
 * @package App\Services
 */
class RecommendServices
{
    /**
     * @var ArticleRepository
     */
    protected $articleRepository;

    protected $tagRepository;
    //
    /**
     * RecommendController constructor.
     * @param ArticleRepository $articleRepository
     */
    public function __construct(ArticleRepository $articleRepository, TagRepository $tagRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->tagRepository = $tagRepository;
    }

    /**
     * 推荐的文章
     * @return mixed
     */
    public function article()
    {
        return $this->articleRepository->orderBy('views', 'DESC')->paginate(config('common.blog.recommendArticlePages'), ['id', 'title']);
    }

    /**
     * 推荐标签列表
     * @return mixed
     */
    public function tag()
    {
        return $this->tagRepository->orderBy('article_num', 'DESC')->paginate(config('common.blog.recommendTagPages'), ['id', 'name']);
    }
}
