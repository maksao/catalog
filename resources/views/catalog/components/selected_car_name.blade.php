<div class="alert alert-secondary">Автомобиль:
    @if($s_car->isLoaded())
        <span class="font-weight-bold text-primary">{{ $s_car->getName() }}</span>
    @else
        <span class="badge badge-danger">Данные не найдены!</span>
    @endif
</div>
