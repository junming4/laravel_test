@extends('blog.layouts.master')
@section('title',$article->title)

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
                            <a class="blogblue" href="{{ route('blog.show',['id'=>$article->id]) }}">
                                <h3>{{ $article->title }}</h3></a>
                            <div class=" mbg30 smallicon">
                                <span>
                                    <i class="icon-user"></i>
                                    <a href="javascript:void(0);">{{ config('common.blog.authName') }}</a>
                                </span>
                                <span>
                                    <i class="icon-folder-close"></i>
                                    <a href="{{ route('blog.index',['type_id'=>$article->type_id]) }}">{{ $article->type->type_name }}</a>
                                </span>
                                <span>
                                    <i class="icon-calendar"></i>
                                    <a href="javascript:void(0);">{{ $article->created_at }}</a>
                                </span>
                                <span>
                                    <i class="icon-eye-open"></i>
                                    <a href="{{ route('blog.show',['id'=>$article->id]) }}">{{ $article->views }}</a>
                                </span>
                            </div>
                            <br>

                            {{ $article->content }}

                            <hr>

                            <div class="tags">
                                <i class="icon-tags"></i> 标签
                                @forelse($tags as $tag)
                                    <a class="btn btn-xs btn-primary" href="{{ route('blog.index',['tag_id'=>$tag->id]) }}">{{ $tag->name }}</a>
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