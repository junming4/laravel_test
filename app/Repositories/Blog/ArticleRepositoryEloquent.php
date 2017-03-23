<?php

namespace App\Repositories\Blog;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Blog\ArticleRepository;
use App\Entities\Blog\Article;
use App\Validators\Blog\ArticleValidator;

/**
 * Class ArticleRepositoryEloquent
 * @package namespace App\Repositories\Blog;
 */
class ArticleRepositoryEloquent extends BaseRepository implements ArticleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Article::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
