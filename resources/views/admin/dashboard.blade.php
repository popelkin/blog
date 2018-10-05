@extends('admin.layouts.app_admin')
@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="jumbotron">
                <p>
                    <span class="label col-form-label-lg">
                        Категорий 0
                    </span>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p>
                    <span class="label col-form-label-lg">
                        Материалов 0
                    </span>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p>
                    <span class="label col-form-label-lg">
                        Посетителей 0
                    </span>
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p>
                    <span class="label col-form-label-lg">
                        Сегодня 0
                    </span>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <a class="btn btn-block btn-success" href="#">Создать категорию</a>
            <a class="list-group-item" href="#">
                <h4 class="list-group-item-heading">Категория первая</h4>
                <p class="list-group-item-text">
                    Кол-во материалов
                </p>
            </a>
        </div>
        <div class="col-sm-6">
            <a class="btn btn-block btn-success" href="#">Создать материал</a>
            <a class="list-group-item" href="#">
                <h4 class="list-group-item-heading">Материал первый</h4>
                <p class="list-group-item-text">
                    Категория
                </p>
            </a>
        </div>
    </div>
@endsection