<?php

namespace App\Models;

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
     *  一对多,相对关联，由于是单数所以不需要types()
     */
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    /**
     *多对多
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    /**
     * @param $query
     * @param $type_id
     * @return mixed
     */
    public function scopeOfTypeId($query, $type_id)
    {
        $type_id = (int)$type_id;
        if ($type_id <1) {
            return $query;
        }
        return $query->where('type_id', $type_id);
    }

    /**
     * @param $query
     * @param $keywords
     * @return mixed
     */
    public function scopeOfKeywords($query, $keywords)
    {
        $keywords = trim($keywords);
        if (strlen($keywords) <1) {
            return $query;
        }
        return $query->orWhere('title', 'like', '%' . $keywords . '%')
            ->orWhere('description', 'like', '%' . $keywords . '%');
    }
}
