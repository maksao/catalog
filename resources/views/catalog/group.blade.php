@extends('layouts.app')

@section('content')

    @include('catalog.components.selected_car_name')

    @if(count($subgroups))
        <div class="list-group">
            @foreach($subgroups as $subgroup)
                <a href="{{ route('catalog.subgroup',[$subgroup['id'], $engine_id, \App\Group::slug($subgroup)]) }}"
                   class="list-group-item list-group-item-action{{ $subgroup['important'] ? ' list-group-item-danger' : '' }}"
                >{{ \App\Group::getName($subgroup) }}</a>
            @endforeach
        </div>
    @endif
@endsection

{{-- Правый блок --}}

@section('r_side')

    {{-- форма выбора автомобиля --}}
    @include('components._project.car_choice_panel', ['hide' => true])

@endsection

