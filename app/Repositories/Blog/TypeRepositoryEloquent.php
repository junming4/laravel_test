<?php

namespace App\Repositories\Blog;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Blog\TypeRepository;
use App\Entities\Blog\Type;
use App\Validators\Blog\TypeValidator;

/**
 * Class TypeRepositoryEloquent
 * @package namespace App\Repositories\Blog;
 */
class TypeRepositoryEloquent extends BaseRepository implements TypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Type::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
