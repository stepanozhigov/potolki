<?
Breadcrumbs::for('ceilings', function ($trail, $city) {
    $trail->push('Главная', route('ceilings', $city));
});

Breadcrumbs::for('contacts', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Контакты', route('contacts', $city));
});

Breadcrumbs::for('calculator', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Калькулятор', route('calculator', $city));
});

Breadcrumbs::for('photos', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Портфолио', route('photos', $city));
});

Breadcrumbs::for('services', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Услуги', route('services', $city));
});

Breadcrumbs::for('promos', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Акции', route('promos', $city));
});