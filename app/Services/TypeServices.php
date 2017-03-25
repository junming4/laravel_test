<?php
/**
 * @User:   Little (2284876299.com)
 * @Date:   2017/3/25
 * @Time:   21:40
 * @Version: 1.0
 * Desc:
 */

namespace App\Services;


use App\Repositories\Blog\TypeRepository;

/**
 * Class TypeServices
 * @package App\Services
 */
class TypeServices
{
    /**
     * @var TypeRepository
     */
    protected $typeRepository;

    /**
     * TypeServices constructor.
     * @param TypeRepository $typeRepository
     */
    public function __construct(TypeRepository $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    /**
     *  列表数据
     */
    public function lists()
    {
        return $this->typeRepository->scopeQuery(function ($query){
            return $query->where('is_show',1);
        })->paginate(config('common.blog.typeShowNum'), ['id', 'type_name']);
    }

}