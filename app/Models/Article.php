<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App\Models
 */
class Article extends Model
{
    //
    /**
     * @var string
     */
    protected $table = 'articles';

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
