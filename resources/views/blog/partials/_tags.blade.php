@inject('recommendTag', 'App\Services\RecommendServices')
<div class="mgb30">
    <h3>标签部分</h3>
    <ul class="cloud">
        @forelse($recommendTag->tag() as $item)
            <li><a class="btn btn-xs btn-primary" href="{{ route('blog.index',['tag_id'=>$item->id]) }}">{{ $item->name }}</a></li>
        @empty
        @endforelse
    </ul>
</div>