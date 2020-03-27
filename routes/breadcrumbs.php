<?php

// Главная
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('home'));
});

// Каталог главная после выбора тачки
Breadcrumbs::for('catalog.index', function ($trail, $engine_id) {
    $trail->parent('home');
    $trail->push('Автозапчасти', route('catalog.index', $engine_id));
});

// Просмотр списка подгрупп в группе
Breadcrumbs::for('catalog.group', function ($trail, $group, $engine_id) {
    $trail->parent('catalog.index', $engine_id);
    $trail->push(\App\Group::getName($group), route('catalog.group',[$group['id'], $engine_id, \App\Group::slug($group)]));
});

// Просмотр списка товара в подгруппе
Breadcrumbs::for('catalog.subgroup', function ($trail, $subgroup, $engine_id) {
    $trail->parent('catalog.group', $subgroup['owner'],$engine_id);
    $trail->push(\App\Group::getName($subgroup), route('catalog.subgroup',[$subgroup['id'], $engine_id, \App\Group::slug($subgroup)]));
});

// Просмотр товара
Breadcrumbs::for('catalog.part', function ($trail, $part, $subgroup, $engine_id) {
    $trail->parent('catalog.subgroup', $subgroup, $engine_id);
    $trail->push(\App\Part::getName($part));
});


// Логи
//Breadcrumbs::for('logs.show', function ($trail) {
//    $trail->parent('home');
//    $trail->push('Вернуться назад', \URL::previous()); $trail->push('История изменений');
//});

// Просмотр заказа
//Breadcrumbs::for('order.positions.index', function ($trail, $order) {
//    $trail->parent('orders.index');
//    $trail->push('Заказ '.$order->number, route('order.positions.index', $order->id));
//});


