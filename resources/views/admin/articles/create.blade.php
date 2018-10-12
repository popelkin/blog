@extends('admin.layouts.app_admin')
@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Создание новости @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
    @endcomponent
    <hr />
    <form class="form-horizontal" method="post" action="{{ route('admin.article.store') }}">
        {{csrf_field()}}
        @include('admin.articles.partials.form')
        <input type="hidden" name="created_by" value="{{ Auth::id() }}" />
    </form>
@endsection