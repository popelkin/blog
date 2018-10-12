@extends('admin.layouts.app_admin')
@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Редактирование новости @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
    @endcomponent
    <hr />
    <form class="form-horizontal" method="post" action="{{ route('admin.article.update', $article) }}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put" />
        @include('admin.articles.partials.form')
        <input type="hidden" name="modified_by" value="{{ Auth::id() }}" />
    </form>
@endsection