{{--
    v.1.2
--}}
<tr class="{{ $class ?? '' }}
    @if(\App\Helpers::isHL($item->id))
        {{ ' table-primary' }}
    @elseif(isset($theme))
        {{ ' table-'.$theme }}
    @endif"
    @isset($id)
        id="{{ $id }}"
    @else
        id="ri{{ $item->id }}" {{-- ri = row item --}}
    @endisset
>
    {{ $slot }}
</tr>
