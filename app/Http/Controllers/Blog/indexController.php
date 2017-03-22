<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function __construct()
    {

    }

    //
    public function index(){
        return view('blog.index');
    }
}
