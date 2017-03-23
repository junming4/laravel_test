@extends('blog.layouts.master')
@section('title','item')

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
                        @if($img_url)
                        <img class="img-responsive fbimg" src="{{ $img_url }}">
                        @endif
                        <div class="pdt10 ">
                            <a class="blogblue" href="blog-item.html"><h3>{{ $title }}</h3></a>
                            <div class=" mbg30 smallicon">
                                <span><i class="icon-user"></i> <a href="#">John</a></span>
                                <span><i class="icon-folder-close"></i> <a href="#">Bootstrap</a></span>
                                <span><i class="icon-calendar"></i> <a href="#"> Sept 16th, 2012 </a></span>
                                <span><i class="icon-comment"></i> <a href="blog-item.html#comments">3 Comments</a></span>
                            </div>
                            <br>

                            {{ $content }}

                            <hr>

                            <div class="tags">
                                <i class="icon-tags"></i> Tags
                                <a class="btn btn-xs btn-primary" href="#">CSS3</a>
                                <a class="btn btn-xs btn-primary" href="#">HTML5</a>
                                <a class="btn btn-xs btn-primary" href="#">WordPress</a>
                                <a class="btn btn-xs btn-primary" href="#">Joomla</a>
                            </div>

                            <br>
                            <br>

                            <div class="well ">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-responsive br0" src="images/blog/avatar.jpg">
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <h3> John Doe </h3>
                                        </div>
                                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="comentarios">
                                <div>
                                    <div>
                                        <h3> 3 Comments </h3>
                                    </div>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="img-responsive img-circle" src="images/blog/avatar1.png">
                                        </div>
                                        <div class="media-body">
                                            <div class="well">
                                                <strong> John Doe </strong>
                                                <small>27 Aug 2013 </small>
                                                <a href="#" class="pull-right"> <i class="icon-repeat"></i> Reply </a>

                                                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="pull-left">
                                        <img class="img-responsive img-circle" src="images/blog/avatar3.png">
                                    </div>
                                    <div class="media-body">
                                        <div class="well">
                                            <strong> John Doe </strong>
                                            <small>27 Aug 2013 </small>
                                            <a href="#" class="pull-right"> <i class="icon-repeat"></i> Reply </a>

                                            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="pull-left">
                                    <img class="img-responsive img-circle" src="images/blog/avatar2.png">
                                </div>
                                <div class="media-body">
                                    <div class="well">
                                        <strong> John Doe </strong>
                                        <small>27 Aug 2013 </small>
                                        <a href="#" class="pull-right"> <i class="icon-repeat"></i> Reply </a>

                                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="comment-form">
                            <h3>Leave a comment</h3>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <textarea rows="8" class="textarea form-control" placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger btn-lg">Submit Comment</button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection