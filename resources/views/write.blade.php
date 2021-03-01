@extends('layout')

@section('title') Зворотний зв'язок @endsection

@section('main_content')
    <h1>Звернутись</h1>

    <div class="row">
        <div class="col-sm-4">

            <form action="/telegram" method="POST">
                @csrf
                <legend>Заголовок формы</legend>

                <div class="form-group">
                    <label for="">Введите ваше имя</label>
                    <input type="text" class="form-control" id="" name="user_name" placeholder="Например, Иван">
                </div>

                <div class="form-group">
                    <label for="">Введите номер телефона</label>
                    <input type="text" class="form-control" id="" name="user_phone" placeholder="+7 (999) 99 99 999">
                </div>

                <div class="form-group">
                    <label for="">Введите email</label>
                    <input type="textarea" class="form-control" id="" name="user_email" placeholder="mail@mail.ru">
                </div>

                <div class="form-group">
                    <label for="">Введите текс</label>
                    <input type="textarea" class="form-control" id="" name="user_text" placeholder="text">
                </div>

                <button type="submit" class="btn btn-primary">Отправить форму</button>
            </form>
        </div><!-- .col-sm-4 -->
    </div> <!-- .row -->
@endsection
