@extends('backend.layouts.blank')
@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="mar-ver pad-btm text-center">
                            <h1 class="h3">Установка интернет-магазина для ООО "Строительный дом Дворики"</h1>
                            <p>Прежде чем продолжить вам необходимо ознакомиться со следующими пунктами.</p>
                        </div>
                        <ol class="list-group">
{{--                            <li class="list-group-item text-semibold"><i class="la la-check"></i> Codecanyon purchase code</li>--}}
                            <li class="list-group-item text-semibold"><i class="la la-check"></i> Название базы данных</li>
                            <li class="list-group-item text-semibold"><i class="la la-check"></i> Имя пользователя</li>
                            <li class="list-group-item text-semibold"><i class="la la-check"></i> Пароль базы данных</li>
                            <li class="list-group-item text-semibold"><i class="la la-check"></i> Имя хоста</li>
                        </ol>
                        <p class="mt-3">
                            В процессе установки мы проверим, есть ли файлы, которые необходимо записать
                            (<strong>.env file</strong>) have
                            <strong>write permission</strong>. We will also check if <strong>curl</strong> are enabled on your server or not.
                        </p>
                        <p>
                            Gather the information mentioned above before hitting the start installation button. If you are ready....
                        </p>
                        <br>
                        <div class="text-center">
                            <a href="{{ route('step1') }}" class="btn btn-primary">
                                Start Installation Process
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
