{{--
    v.1.3
--}}
<td class="text-nowrap text-{{ $align ?? 'right' }} text-{{ $theme ?? 'black' }}">
    @isset($editable)
        @component('components.editable.editable', [
            'ajax' => $editable['ajax'] ?? null,
            'type' => 'price',
            'title' => 'Цена',
            'name' => $editable['name'] ?? 'price',
            'url' => $editable['url'] ?? '#',
            'id' => $editable['item']->id,
        ]){{ $price }}@endcomponent
    @else
        {{ \App\Helpers::price_format($price) }}
    @endisset
    {{ $currency ?? '' }}
</td>
