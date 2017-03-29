<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Type
 * @package App\Models
 */
class Type extends Model
{
    //
    /**
     * @var string
     */
    protected $table = 'types';

    /**
     *   多找回1的数据
     */
    public function articles()
    {
        return $this->hasMany('App\Entities\Blog\Article');
    }
}
