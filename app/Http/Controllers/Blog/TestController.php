<?php

namespace App\Http\Controllers\Blog;

use App\Repositories\Blog\TypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //
    protected $typeRepository;
    public function __construct(TypeRepository $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    public function index()
    {
        $type = $this->typeRepository->find(1);
        dd($type->comments);
    }
}
