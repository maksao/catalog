@extends('layouts.app')

@section('content')

<div class="alert alert-warning text-center font-weight-bold">Для начала необходимо выбрать автомобиль</div>

@endsection

{{-- Правый блок --}}

@section('r_side')
    {{-- форма выбора автомобиля --}}
    @include('components._project.car_choice_panel')


@endsection
