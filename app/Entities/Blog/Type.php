<?php

namespace App\Entities\Blog;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Type extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

    public function articles()
    {
        return $this->hasMany('App\Entities\Blog\Article');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function comments()
    {
        return $this->hasManyThrough('App\Entities\Blog\Comment', 'App\Entities\Blog\Article');
    }

}
