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
        return $this->hasMany('App\Entities\Blog\Type','id','type_id');
    }

    /**
     *多对多
     */
    public function tags()
    {
        return $this->belongsToMany('App\Entities\Blog\Tag');
    }

    /**
     * @param $query
     * @param $type_id
     * @return mixed
     */
    public function scopeOfTypeId($query, $type_id)
    {
        $type_id = (int)$type_id;
        if($type_id <1) return $query;
        return $query->where('type_id', $type_id);
    }

    public function scopeOfKeywords($query, $keywords)
    {
        $keywords = trim($keywords);
        if(strlen($keywords) <1) return $query;
        return $query->orWhere('title', 'like', '%' . $keywords . '%')
            ->orWhere('description', 'like', '%' . $keywords . '%');
    }

}
