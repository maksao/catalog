@extends('layouts.app')

@section('content')

    @include('catalog.components.selected_car_name')

    @component('components.tables.table', [
        'id' => 'datatable',
        'responsive' => true,
        'header' => [
               'Наименование',
               'Артикул',
               'Производитель',
               '#actions#'
           ],
       ])
        @foreach($parts as $part)
            <tr>

                {{-- Название --}}

                <td class="align-middle">
                    {{ \App\Part::getName($part) }}
                </td>

                {{-- Артикул --}}

                <td class="align-middle">
                    <a href="{{ route('catalog.part',[$part['id'], $subgroup['id'], $engine_id], Str::slug(\App\Part::getName($part))) }}">{{ $part['code'] }}</a>
                </td>

                {{-- Производитель --}}

                <td class="align-middle">
                    {{ $part['make'] }}
                </td>

                <td class="align-middle text-right">
                    <a class="btn btn-danger" href="https://www.avto-olimp.ru/search.html?article={{ $part['code'] }}&brand={{ $part['make'] }}">Узнать цену</a>
                </td>

            </tr>
        @endforeach
    @endcomponent

    @push('styles')
        <link href="/others/datatables/datatables.min.css" rel="stylesheet">
    @endpush
    @push('scripts')
        <script src="/others/datatables/datatables.min.js"></script>
        <script>
            $('#datatable').DataTable({
                paging: false,
                language: {
                    "search": "Поиск:",
                    "info":  "Найдено _TOTAL_ наименований",
                    "infoFiltered":   "(отфильтровано из _MAX_)"
                },
                "columnDefs": [
                    { "orderable": false, "targets": 3 }
                ]
            });
        </script>
    @endpush

@endsection

{{-- Правый блок --}}

@section('r_side')

    {{-- форма выбора автомобиля --}}
    @include('components._project.car_choice_panel', ['hide' => true])

@endsection

