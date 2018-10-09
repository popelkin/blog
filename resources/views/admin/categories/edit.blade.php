@extends('admin.layouts.app_admin')
@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Редактирование категории @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent
    <hr />
    <form class="form-horizontal" method="post" action="{{ route('admin.category.update', $category) }}">
        {{csrf_field()}}
        <input type="hidden" value="put" name="_method" />
        @include('admin.categories.partials.form')
    </form>
@endsection