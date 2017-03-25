<header class="navbar navbar-inverse navbar-fixed-top white" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li @if(Request::is('/') && Request::get('type_id',0) == 0) class="active" @endif >
                    <a href="{{ url('/') }}">Blog</a>
                </li>
                @inject('typeObj','App\Services\TypeServices')
                @forelse($typeObj->lists() as $item)
                    <li @if(Request::get('type_id',0) == $item->id) class="active" @endif><a href="{{ route('blog.index',['type_id'=>$item->id]) }}">{{ $item->type_name }}</a></li>
                @empty
                @endforelse

                <li><a href="about-us.html">About Us</a></li>
                <li><a href="blog-item.html">Bolg-item</a></li>
                <li><a href="contact-us.html">Contact</a></li>
            </ul>
        </div>
    </div>
</header>