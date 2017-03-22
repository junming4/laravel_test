@extends('blog.layouts.master')
@section('title','Laravel Jun')

@section('styles')
@endsection

@section('contents')
    <div class="row">
        <aside class="col-sm-4 col-sm-push-8">

            {{--搜索框显示--}}
            @include('blog.partials._search')


            {{--img 图--}}


            {{--推荐文章--}}
            @include('blog.partials._recommend')

            {{--标签部分--}}
            @include('blog.partials._tags')


        </aside>

        <section>
            <div class="col-sm-8 col-sm-pull-4">
                <div class="blog">
                    <div>
                        <img class="img-responsive fbimg" src="images/blog/blog1.jpg">
                        <div class="pdt10 ">
                            <a class="blogblue" href="blog-item.html"><h3>Duis sed odio sit amet nibh vulputate cursus</h3></a>
                            <div class=" mbg30 smallicon">
                                <span><i class="icon-user"></i> <a href="#">John</a></span>
                                <span><i class="icon-folder-close"></i> <a href="#">Bootstrap</a></span>
                                <span><i class="icon-calendar"></i> <a href="#"> Sept 16th, 2012 </a></span>
                                <span><i class="icon-comment"></i> <a href="blog-item.html#comments">3 Comments</a></span>
                            </div>
                            <p> Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <ul class="cloud">
                                <li><a class="btn btn-xs btn-primary pdt10" href="blog-item.html">Read More <span class="flecha"></span> > </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="blog">
                    <div>
                        <img class="img-responsive fbimg" src="images/blog/blog2.jpg">
                        <div class="pdt10 ">
                            <a class="blogblue" href="blog-item.html"><h3>Conubia nostra per inceptos himenaeos</h3></a>
                            <div class=" mbg30 smallicon">
                                <span><i class="icon-user"></i> <a href="#">John</a></span>
                                <span><i class="icon-folder-close"></i> <a href="#">Bootstrap</a></span>
                                <span><i class="icon-calendar"></i> <a href="#"> Sept 16th, 2012 </a></span>
                                <span><i class="icon-comment"></i> <a href="blog-item.html#comments">0 Comments</a></span>
                            </div>
                            <p> Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <ul class="cloud">
                                <li><a class="btn btn-xs btn-primary pdt10" href="blog-item.html">Read More <span class="flecha"></span> > </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <ul class="pagination pagination-lg">
                    <li class="previous disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1 <span class="sr-only"></span> </a></li>
                    <li><a href="blog-item.html">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
@endsection