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

                @forelse($lists as $item)
                    <div class="blog">
                        <div>
                            @if($item->img_url)
                                <a class="blogblue" href="{{ route('blog.show',['id'=>$item->id]) }}">
                                    <img class="img-responsive fbimg" src="{{ $item->img_url }}">
                                </a>
                            @endif
                            <div class="pdt10 ">
                                <a class="blogblue" href="{{ route('blog.show',['id'=>$item->id]) }}">
                                    <h3>{{ $item->title }}</h3></a>
                                <div class=" mbg30 smallicon">
                                    <span>
                                        <i class="icon-user"></i>
                                        <a href="javascript:void(0);">{{ config('common.blog.authName') }}</a>
                                    </span>
                                    <span>
                                        <i class="icon-folder-close"></i>
                                        <a href="{{ route('blog.index',['type_id'=>$item->type_id]) }}">{{$item->types->pluck('type_name')->last()}}</a>
                                    </span>
                                    <span>
                                        <i class="icon-calendar"></i>
                                        <a href="javascript:void(0);">{{ $item->created_at }} </a>
                                    </span>
                                    <span>
                                        <i class="icon-eye-open"></i>
                                        <a href="{{ route('blog.show',['id'=>$item->id]) }}">{{ $item->views }}浏览</a>
                                    </span>
                                </div>
                                <p>{{ $item->description }}</p>
                                <ul class="cloud">
                                    <li>
                                        <a class="btn btn-xs btn-primary pdt10"
                                           href="{{ route('blog.show',['id'=>$item->id]) }}">
                                            Read More<span class="flecha"></span>>
                                        </a>
                                    </li>
                                </ul>
                            </div>


                            <div class="tags">
                                <i class="icon-tags"></i>标签
                                @forelse($item->tags as $tag)
                                    <a class="btn btn-xs btn-primary"
                                       href="{{ route('blog.index',['tag_id'=>$tag->id]) }}">{{ $tag->name }}</a>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                @empty
                    暂无数据
                @endforelse

                @if(!empty($lists))
                    {!! $lists->appends(Request::all())->links() !!}
                @endif
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
@endsection