<?php

namespace App\Entities\Blog;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Article extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
		'',
	];

    /**
     *  一对多
     */
    public function types()
    {
        return $this->hasMany('App\Models\Type');
    }

    /**
     *多对多
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

}
