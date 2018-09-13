<div class="review-popup review-popup_active">
    <div class="review-popup__body"> 
        @include('common.gui.person', ['class' => 'review-popup__person', 'name' => 'Тест тест', 'img' => 'http://okna-ts.ru/upload/iblock/595/5950d9e525e6adb22ba91eb1b4bae1d1.jpg', 'line' => true, 'text' => '11.11.2011'])
        <p class="review-popup__text">
                Каждый человек знает, что такое ремонт и каждый стоял перед выбором строительной компании. Долго не могла определиться…
        </p>
        
    </div>
    <div class="review-popup__media">
        <img class="review-popup__img" src="http://okna-ts.ru/upload/iblock/06d/06dda983ced93419d8a393591f9db32a.jpg" alt="">
        <img class="review-popup__img" src="http://okna-ts.ru/upload/iblock/06d/06dda983ced93419d8a393591f9db32a.jpg" alt="">
        <img class="review-popup__img" src="http://okna-ts.ru/upload/iblock/06d/06dda983ced93419d8a393591f9db32a.jpg" alt="">
    </div>
    @isset($comments)
        <div class="review__comments">
            @foreach ($comments as $comment)
                <div class="comment">
                    <p class="third-title comment__title">{{ $comment->type }}</p>
                    <hr class="line">
                    <p class="text comment__text">
                        {{ $comment->text }}
                    </p>
                    @include('common.gui.person', [
                        'class' => 'comment__person',
                        'name' => 'Тест тест',
                        'img' => 'http://okna-ts.ru/upload/iblock/595/5950d9e525e6adb22ba91eb1b4bae1d1.jpg',
                        'text' => 'Начальник розничного отдела']
                    )
                </div>
            @endforeach
        </div>
    @endisset
</div>