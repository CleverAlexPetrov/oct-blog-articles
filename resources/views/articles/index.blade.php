@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <a href="{{ route('articles.create') }}">
                    <i class="fa fa-plus"></i> Добавить статью
                </a>  
            </button>
        </div>
    </div>
    <!-- Текущие задачи -->
    @if (count($articles) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Текущая задача
        </div>
        <div class="panel-body">
            <table class="table table-striped articles-table">
                <!-- Заголовок таблицы -->
                <thead>
                    <tr>
                        <th>articles</th>
                        <th>articles</th>
                    </tr>
                </thead>
                <!-- Тело таблицы -->
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <!-- Имя задачи -->
                        <td class="table-text">
                            <div>{{ $articles->name }}</div>
                        </td>
                        <td>
                            <!-- TODO: Кнопка Удалить -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <a href="{{ route('articles.create') }}">
                    <i class="fa fa-plus"></i> Добавить статью
                </a>
            </button>
        </div>
    </div>
</div>
@endsection