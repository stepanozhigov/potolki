<div class="review reviews__item">
    <div class="review__body">
        @include('common.gui.person', ['class' => 'review__person', 'name' => $review->fio, 'img' => Storage::url($review->avatar), 'text' => null ])
        <hr class="review__line">
        <p class="review__date">{{ $review->created_at}}</p>
        <p class="review__text">
                {{ $review->text }}
        </p>
        <div class="review__counters">
            <span class="counter"><img class="counter__img" src="/img/chat.svg" alt="">4</span>
            <span class="counter"><img class="counter__img" src="/img/attach.svg" alt="">1</span>
        </div>
    </div>
    <div class="review__media">
        <img class="review__img" src="{{ Storage::url($review->preview_img) }}" alt="">
    </div>
</div>