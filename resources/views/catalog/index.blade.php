@extends('layouts.app')

@section('content')

    @include('catalog.components.selected_car_name')

    @foreach(array_chunk($groups, 3) as $chunk)
        <div class="card-deck mb-2">
            @foreach($chunk as $group)
                @include('catalog.components.group_card')
            @endforeach
        </div>
    @endforeach

@endsection

{{-- Правый блок --}}

@section('r_side')

    {{-- форма выбора автомобиля --}}
    @include('components._project.car_choice_panel', ['hide' => true])

@endsection

