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
    <div class="container">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <a href="{{ route('articles.create') }}">
                    <i class="fa fa-plus"></i> Добавить статью
                </a>  
            </button>
        </div>
    </div>
    <br/>
    <div class="form-group">
        <!-- Текущие задачи -->
        @if (count($articles) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Новости
            </div>
            <div class="panel-body">
                <table class="table table-striped articles-table">
                    <!-- Заголовок таблицы -->
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Действие</th>
                        </tr>
                    </thead>
                    <!-- Тело таблицы -->
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <!-- Имя задачи -->
                            <td class="table-text">
                                <div>{{ $article->name }}</div>
                            </td>
                            <td>
                                <form action="{{ url('article/'.$article->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-article-{{ $article->id }}" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
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
</div>
@endsection