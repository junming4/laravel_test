<?php

namespace App\Repositories\Blog;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Blog\CommentRepository;
use App\Entities\Blog\Comment;
use App\Validators\Blog\CommentValidator;

/**
 * Class CommentRepositoryEloquent
 * @package namespace App\Repositories\Blog;
 */
class CommentRepositoryEloquent extends BaseRepository implements CommentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Comment::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
