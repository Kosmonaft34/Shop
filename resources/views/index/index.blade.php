@extends('layouts.main')
@section('content')
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Профессиональная косметика
        </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Новинки</a></li>
            <li><a class="dropdown-item" href="#">Акции</a></li>
            <li><a class="dropdown-item" href="#">Волосы</a></li>
            <li><a class="dropdown-item" href="#">Лицо</a></li>
            <li><a class="dropdown-item" href="#">Брови и ресницы</a></li>
            <li><a class="dropdown-item" href="#">Для мужчин</a></li>
            <li><a class="dropdown-item" href="#">Для детей</a></li>
            <li><a class="dropdown-item" href="{{route('perfume')}}">Парфюм</a></li>
            <li><a class="dropdown-item" href="#">Инструмент</a></li>
            <li><a class="dropdown-item" href="#">Аксессуары</a></li>


        </ul>
    </div>

@endsection

