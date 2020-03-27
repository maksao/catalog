{{--

    v.1.0

--}}

@component('components.forms.plain.wrapper', array_merge(get_defined_vars()['__data'],[
    'form_group_class' => 'form-group-sm',
    'label' => 'Показать за период'
]))
    @include('components.forms.horizontal.input',[
        'type' => 'date',
        'label' => 'от',
        'name' => $names['from'] ?? 'from',
        'value' => $values['from'] ?? null
    ])
    @include('components.forms.horizontal.input',[
        'type' => 'date',
        'label' => 'до',
        'name' => $names['to'] ?? 'to',
        'value' => $values['to'] ?? null
    ])
@endcomponent

