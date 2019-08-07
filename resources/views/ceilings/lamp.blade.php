<section class="lamp js-show" data-src="#popup_callback">
    <div class="lamp__gallery">
        <img src="{{ Storage::url($lamp->img) }}" alt="lamp-img" class="lamp__image hidden visible">
    </div>
    <h3 class="lamp__title">{{ $lamp->title }}</h3>
    <div class="lamp__price">
        <span class="lamp__summ">{{ $lamp->price }} ₽</span>
    </div>
</section>
