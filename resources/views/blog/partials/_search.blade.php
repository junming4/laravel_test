<div class="mgb30 search">
    <form role="form" action="{{ route('blog.index') }}">
        <div class="input-group">
            {!! Form::text('keywords',Request::get('keywords',''),['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Search']) !!}
            <span class="input-group-btn">
                                <button class="btn btn-danger" type="submit"><i class="icon-search"></i></button>
                            </span>
        </div>
    </form>
</div>