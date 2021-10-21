@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row main-form">
            <form class="" method="post" action="{{route('create')}}">
                @csrf
                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Фамилия</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="surname" id="email" placeholder="Введите Вашу Фамилию" value="{{ old('surname') }}"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Имя</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="email" placeholder="Введите Ваше имя" value="{{ old('name') }}"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Отчество</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="patronymic" id="email" placeholder="Введите Ваше Отчество" value="{{ old('patronymic') }}"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Дата рождения</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" name="Date_Birth" id="email" placeholder="Введите Вашу дату рождения" value="{{ old('Date_Birth') }}"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">e-mail</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="confirm" placeholder="Введите Ваш e-mail" value="{{ old('email') }}"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"/>
                        </div>
                    </div>
                </div>



                <div class="form-group ">
                    <button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Зарегистрироваться</button>
                </div>

            </form>
        </div>
    </div>
@endsection
