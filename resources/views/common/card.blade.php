<a class="card {{ !empty($class) ? $class:'' }}">

    @if (!empty($plate))
        <p class="card__plate">12000  ₽ / 8 м2</p>
    @endif

    @if (!empty($img))
        <img src="http://potolki-ts.ru/upload/iblock/72f/72f5b56193a6f64ef030ecc854ccf376.jpg" alt="Фотопечать" class="card__img">
    @endif

    @if (!empty($title))
        <p class="card__title">Фотопечать</p>
    @endif
    <hr class="card__line">

    @if (!empty($text))
        <p class="card__subtitle">Мансарда</p>
    @endif

</a>