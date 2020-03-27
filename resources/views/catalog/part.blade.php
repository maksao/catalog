@extends('layouts.app')

@section('content')

    @include('catalog.components.selected_car_name')

    <div class="col-lg-8">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex align-items-center justify-content-center">
{{--                    <img src="" class="card-img" alt="Фото">--}}
                    Изображение отсутствует
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $part['partnumber'] }}</h5>
                        @if($part['partnumber_new'])
                            <div>Новый номер: <span class="font-weight-bold">{{ $part['partnumber_new'] }}</span></div>
                        @endif
                        @if($part['partnumber_alt'] && $part['partnumber_alt'] != $part['partnumber'])
                            <div>Альтернативный кросс номер: <span class="font-weight-bold">{{ $part['partnumber_alt'] }}</span></div>
                        @endif
                        @if($part['upc'])
                            <div>Штрихкод: <span class="font-weight-bold">{{ $part['upc'] }}</span></div>
                        @endif
                        <p class="card-text">{{ $part['description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
{{--        <ul class="list-group">--}}
{{--            <li class="list-group-item list-group-item-success">Принадлежность автомобилям</li>--}}
{{--            @foreach(Arr::sort($applicability) as $ap_car)--}}
{{--                <li class="list-group-item">{{ $ap_car }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
    </div>
    <div class="card border-success mb-3">
        <div class="card-header">Принадлежность автомобилям</div>
        <div class="card-body">
            @foreach(Arr::sort($applicability) as $ap_car)
                <a href="{{ route('catalog.index', $ap_car['engine_id']) }}" class="mr-1 text-nowrap">{{ $ap_car['name'] }},</a>
            @endforeach
        </div>
    </div>
{{--    @if(in_array(request()->ip(), ['127.0.0.1','87.249.39.222']))--}}
{{--        <div>--}}
{{--            @dump($part)--}}
{{--        </div>--}}
{{--    @endif--}}
@endsection

{{-- Правый блок --}}

@section('r_side')

    {{-- форма выбора автомобиля --}}
    @include('components._project.car_choice_panel', ['hide' => true])

@endsection

