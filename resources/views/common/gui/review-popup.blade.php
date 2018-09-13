<div class="review-popup review-popup_active">
    <div class="review-popup__body"> 
        @include('common.gui.person', ['class' => 'review-popup__person', 'name' => 'Тест тест', 'img' => 'http://okna-ts.ru/upload/iblock/595/5950d9e525e6adb22ba91eb1b4bae1d1.jpg', 'line' => true, 'text' => '11.11.2011'])
        <!--<a href="" class="person review-popup__person">
            <img src="http://okna-ts.ru/upload/iblock/595/5950d9e525e6adb22ba91eb1b4bae1d1.jpg" alt="" class="person__photo">
            <div class="person__right">
                <p class="person__name">Снежана Снежана</p> 
                <hr class="line review-popup__line">
                <p class="review-popup__date">11.11.2011</p>
            </div>            
        </a>-->        
        <p class="review-popup__text">
                Каждый человек знает, что такое ремонт и каждый стоял перед выбором строительной компании. Долго не могла определиться…
        </p>
        
    </div>
    <div class="review-popup__media">
        <img class="review-popup__img" src="http://okna-ts.ru/upload/iblock/06d/06dda983ced93419d8a393591f9db32a.jpg" alt="">
        <img class="review-popup__img" src="http://okna-ts.ru/upload/iblock/06d/06dda983ced93419d8a393591f9db32a.jpg" alt="">
        <img class="review-popup__img" src="http://okna-ts.ru/upload/iblock/06d/06dda983ced93419d8a393591f9db32a.jpg" alt="">
    </div>
    <div class="review__comments">
        <div class="comment">
            <p class="third-title comment__title">Ответ администрации</p>
            <hr class="line">
            <p class="text comment__text">
                Здравствуйте, Сидни. Благодарим Вас за отзыв. Приносим наши извинения за доставленные неудобства.
                Уточните, пожалуйста, мне в почту чуть больше информации (номер заказа, код клиента) или контактную информацию для связи с Вами.
                Хотелось бы разобраться и найти варианты для дальнейшего сотрудничества. Спасибо.
            </p>
            @include('common.gui.person', ['class' => 'comment__person', 'name' => 'Тест тест', 'img' => 'http://okna-ts.ru/upload/iblock/595/5950d9e525e6adb22ba91eb1b4bae1d1.jpg', 'text' => 'Начальник розничного отдела'])

        </div>
        <div class="comment">
            <p class="third-title comment__title">Комментарий клиента</p>
            <hr class="line">
            <p class="text comment__text">
                Здравствуйте, Сидни. Благодарим Вас за отзыв. Приносим наши извинения за доставленные неудобства.
                Уточните, пожалуйста, мне в почту чуть больше информации (номер заказа, код клиента) или контактную информацию для связи с Вами.
                Хотелось бы разобраться и найти варианты для дальнейшего сотрудничества. Спасибо.
            </p>
            @include('common.gui.person', ['class' => 'comment__person', 'name' => 'Тест тест', 'img' => 'http://okna-ts.ru/upload/iblock/595/5950d9e525e6adb22ba91eb1b4bae1d1.jpg'])
        </div>
    </div>
</div>