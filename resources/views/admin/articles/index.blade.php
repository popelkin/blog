@extends('admin.layouts.app_admin')
@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Список новостей @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
    @endcomponent
    <hr />
    <a href="{{ route('admin.article.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать новость</a><br />
    <br />
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Наименование</th>
                <th>Опубликована</th>
                <th class="text-right">Наименование</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>
                        @if ($article->published)
                            Да
                        @else
                            Нет
                        @endif
                    </td>
                    <td class="text-right">
                        <form method="post" onsubmit="return confirm('Вы уверены?');" action="{{ route('admin.article.destroy', $article) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete" />
                            <a class="btn" href="{{ route('admin.article.edit', $article) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">
                        <h2>Список пуст.</h2>
                    </td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{ $articles->links() }}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
@endsection