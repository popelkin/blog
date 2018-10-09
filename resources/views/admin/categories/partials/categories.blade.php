@foreach ($categories as $c)
    <option value="{{ $c->id }}"
        @isset ($category->id)
            @if ($category->id == $c->id)
                hidden
            @endif
            @if ($category->parent_id == $c->id)
                selected
            @endif
        @endisset
    >
        {!! $delimiter !!}{{ $c->title }}
    </option>
    @if (count($children = $c->children) > 0)
        @include('admin.categories.partials.categories', [
            'categories' => $children,
            'delimiter'  => ' - ' . $delimiter
        ])
    @endif
@endforeach