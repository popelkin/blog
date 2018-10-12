@foreach ($categories as $c)
    <option value="{{$c->id ?? ''}}"
        @isset ($article->id)
            @foreach ($article->categories as $e)
                @if ($c->id == $e->id)
                    selected
                @endif
            @endforeach
        @endisset
    >
        {!! $delimiter !!}{{ $c->title }}
    </option>
    @if (count($children = $c->children) > 0)
        @include('admin.articles.partials.categories', [
            'categories' => $children,
            'delimiter'  => ' - ' . $delimiter
        ])
    @endif
@endforeach