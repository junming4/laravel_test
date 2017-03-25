@inject('recommends', 'App\Services\RecommendServices')
<div class="mgb30">
    <h3>推荐文章</h3>
    <div class="row">
        <div class="col-sm-12">
            <ul class="categories">

                @forelse($recommends->article() as $item)
                <li class="flecha"><a href="{{ route('blog.show',['id'=>$item->id]) }}" class="icon-tags">{{ $item->title }}</a></li>
                @empty
                @endforelse
            </ul>
        </div>
    </div>
</div>