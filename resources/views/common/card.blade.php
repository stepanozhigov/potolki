<a href="{{ !empty($link) ? $link:'' }}" class="card {{ !empty($class) ? $class:'' }}">

    @if (!empty($plate))
        <p class="card__plate">12000  ₽ / 8 м2</p>
    @endif

    @if (!empty($img))
        <img src="{{ $img }}" alt="Фотопечать" class="card__img">
    @endif

    @if (!empty($title))
        <p class="card__title">{{ $title }}</p>
    @endif
    <hr class="card__line">

    @if (!empty($text))
        <p class="card__subtitle">{{ $text }}</p>
    @endif

    @if (!empty($price))
        <p class="card__price">от {{ $price }} Р</p>
    @endif

</a>