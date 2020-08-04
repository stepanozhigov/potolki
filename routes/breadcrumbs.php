<?php
Breadcrumbs::for('ceilings', function ($trail, $city) {
    $trail->push('Главная', route('ceilings', $city));
});

Breadcrumbs::for('catalogueCeilings', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Каталог', route('catalogueCeilings', $city));
});

Breadcrumbs::for('catalogue', function ($trail, $city) {
    $trail->parent('catalogueCeilings', $city);
   // $trail->push('', route('catalogue', $city));
});

Breadcrumbs::for('contacts', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Контакты', route('contacts', $city));
});

Breadcrumbs::for('dillers', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Дилерам', route('dillers', $city));
});

Breadcrumbs::for('employees', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Сотрудники', route('employees', $city));
});

Breadcrumbs::for('reviews', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Отзывы', route('reviews', $city));
});

Breadcrumbs::for('vacancies', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Вакансии', route('vacancies', $city));
});

Breadcrumbs::for('dirMessage', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Написать директору', route('dirMessage', $city));
});

Breadcrumbs::for('ceilingsCalc', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Калькулятор', route('ceilingsCalc', $city));
});

Breadcrumbs::for('questions', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Вопросы и ответы', route('questions', $city));
});

Breadcrumbs::for('about', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('О компании', route('about', $city));
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
    //dump($type);
   // $trail->push('Услуги', route('services', $city));
});

Breadcrumbs::for('zamenaPolotna', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Замена полотна', route('services', $city));
});
Breadcrumbs::for('ustanovka', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Установка', route('services', $city));
});
Breadcrumbs::for('remont', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Ремонт', route('services', $city));
});
Breadcrumbs::for('sliv', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Слив', route('services', $city));
});

Breadcrumbs::for('promos', function ($trail, $city) {
    $trail->parent('ceilings', $city);
    $trail->push('Акции', route('promos', $city));
});
