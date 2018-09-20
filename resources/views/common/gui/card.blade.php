<a href="{{ $link ?? '' }}" class="card b-card {{ $class ?? '' }}">

    @isset($plate)
        <p class="card__plate">12000  ₽ / 8 м2</p>
    @endisset

    @isset($img)
        <img src="{{ $img }}" alt="Фотопечать" class="card__img">
    @endisset

    @isset($title)
        <p class="card-title card__title">{{ $title }}</p>
    @endisset

    <hr class="line line_bold">

    @isset($text)
        <p class="card__subtitle">{{ $text }}</p>
    @endisset

    @isset($price)
        <p class="card__price">от {{ $price }} Р</p>
    @endisset

</a>