@extends('admin.layouts.app_admin')
@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Список категорий @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent
    <hr />
    <a href="{{ route('admin.category.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать категорию</a><br />
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
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->title }}</td>
                    <td>
                        @if ($category->published)
                            Да
                        @else
                            Нет
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.category.edit', $category) }}"><i class="fa fa-edit"></i></a>
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
                        {{ $categories->links() }}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>
@endsection