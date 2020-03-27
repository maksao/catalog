@component('components.panels.menu',['header'=>'Выберите автомобиль', 'hide' => $hide ?? null])
    <div class="p-1">
        @component('components.forms.plain.select',[
                        'form_group_class' => 'form-group-sm',
                        'label' => 'Марка',
                        'name'=>'makes',
                        'id' => 'makes'
                    ])
            @include('components.forms.elements.option_default',['selected'=>true])
            @foreach($makes_list as $make)
                @include('components.forms.elements.option',[
                    'label' => $make['value'],
                    'value' => $make['id']
                ])
            @endforeach
        @endcomponent

        @component('components.forms.plain.select',[
            'form_group_class' => 'form-group-sm',
            'label' => 'Год',
            'name'=>'years',
            'id' => 'years',
            'disabled' => true
        ])
            @include('components.forms.elements.option_default',['selected'=>true])
        @endcomponent

        @component('components.forms.plain.select',[
            'form_group_class' => 'form-group-sm',
            'label' => 'Модель',
            'name'=>'models',
            'id' => 'models',
            'disabled' => true
        ])
            @include('components.forms.elements.option_default',['selected'=>true])
        @endcomponent

        @component('components.forms.plain.select',[
            'form_group_class' => 'form-group-sm',
            'label' => 'Двигатель',
            'name'=>'engines',
            'id' => 'engines',
            'disabled' => true
        ])
            @include('components.forms.elements.option_default',['selected'=>true])
        @endcomponent
        <div class="alert alert-secondary text-center my-2 small" id="selected-car">{{ isset($s_car) ? $s_car->getName() : '- автомобиль не выбран -' }}</div>
        @isset($s_car)
            <a href="{{ route('catalog.index', $s_car->engine_id) }}" class="btn btn-outline-success btn-sm" id="show-car-result">Показать результат</a>
        @else
            <a href="#" class="btn btn-outline-secondary btn-sm disabled" id="show-car-result">Показать результат</a>
        @endif
    </div>
@endcomponent

@push('scripts')
    <script src="/js/select_car.js"></script>
@endpush
