<div class="review reviews__item">
    <div class="review__body b-card">
        @include('common.gui.person', ['class' => 'review__person', 'name' => $review->fio, 'img' => Storage::url($review->avatar), 'text' => null ])
        <hr class="line review__line">
        <p class="subtext review__date">{{ $review->created_at}}</p>
        <p class="subtext review__text">
                {{ $review->text }}
        </p>
        <div class="review__counters">
            <span class="counter subtext"><img class="counter__img" src="/img/gui/chat.svg" alt="">4</span>
            <span class="counter subtext"><img class="counter__img" src="/img/gui/attach.svg" alt="">1</span>
        </div>
    </div>
    <div class="review__media b-card">
        <img class="review__img" src="{{ Storage::url($review->preview_img) }}" alt="">
    </div>
</div>