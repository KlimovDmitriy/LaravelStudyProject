@extends('layouts.main')
@section('content')
    <div style="background-color: aqua">
        <a href={{$addProductRoute}}> Добавить продукты</a><br>
        <a href={{$removeProductRoute}}> Удалите продукты</a>
    </div>
@endsection



