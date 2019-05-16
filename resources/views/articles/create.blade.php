@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Новая статья</div>

                <div class="panel-body">
                    <!-- Отображение ошибок проверки ввода -->
                    @include('common.errors')

                    <!-- Форма новой задачи -->
                    <form action="{{ route('articles.store') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <!-- Имя задачи -->
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="article" class="col-sm-3 control-label">Название</label>
                                <input type="text" name="name" id="article-name" class="form-control">
                                <label for="article" class="col-sm-3 control-label">Текст</label>
                                <textarea type="text" name="text" id="article-text" class="form-control"></textarea>
                            </div>
                        </div>
                        <!-- Кнопка добавления задачи -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-default"></i> Сохранить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

