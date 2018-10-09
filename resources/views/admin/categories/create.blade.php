@extends('admin.layouts.app_admin')
@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Создание категории @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent
    <hr />
    <form class="form-horizontal" method="post" action="{{ route('admin.category.store') }}">
        {{csrf_field()}}
        @include('admin.categories.partials.form')
    </form>
@endsection