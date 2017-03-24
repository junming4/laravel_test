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
                        @if($article->img_url)
                        <img class="img-responsive fbimg" src="{{ $article->img_url }}">
                        @endif
                        <div class="pdt10 ">
                            <a class="blogblue" href="{{ route('blog.show',['id'=>$article->id]) }}"><h3>{{ $article->title }}</h3></a>
                            <div class=" mbg30 smallicon">
                                <span><i class="icon-user"></i> <a href="#">John</a></span>
                                <span><i class="icon-folder-close"></i> <a href="#">Bootstrap</a></span>
                                <span><i class="icon-calendar"></i> <a href="#"> Sept 16th, 2012 </a></span>
                                <span><i class="icon-comment"></i> <a href="blog-item.html#comments">3 Comments</a></span>
                            </div>
                            <br>

                            {{ $article->content }}

                            <hr>

                            <div class="tags">
                                <i class="icon-tags"></i> Tags
                                @forelse($tags as $tag)
                                    <a class="btn btn-xs btn-primary" href="#">{{ $tag->name }}</a>
                                @empty
                                @endforelse
                            </div>

                            <br>
                            <br>

                            {{--评论内容--}}
                           {{-- @include('blog.partials._comment_content')--}}

                        </div>

                        {{--评论提交--}}
                        {{--@include('blog.partials._comment_form')--}}

                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection