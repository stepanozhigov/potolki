<div class="form-request-open">
    <div class="container">
        <div class="form-request-open__content">
            <h2 class="form-request-open__title">Запишитесь на замер <span class="form-request-open__text-accent">сегодня</span> и получите <br> дополнительную <span class="form-request-open__text-accent">скидку 10%</span></h2>
            <h2 class="form-request-open__title-mobile">БЕСПЛАТНЫЙ ЗАМЕР</h2>
            <p class="form-request-open__subtitle">Оставьте контактные данные и наш специалист перезвонит Вам <span class="form-request-open__text-accent"> в течении 5 минут</span></p>
            <form id="form-request-open" action="https://jsonplaceholder.typicode.com/posts" class="form-request-open__form">
                <label class="form-request-open__input-wrap">
                    <input type="text" name="name" placeholder="Ваше имя*" class="form-request-open__input form-request-open__input-name" required>
                </label>
                <label class="form-request-open__input-wrap">
                    <input type="tel" name="phone" placeholder="Ваше телефон*" class="form-request-open__input form-request-open__input-phone" required>
                </label>
                <input type="submit" value="Вызвать замерщика" class="form-request-open__submit">
                <p class="form-request-open__status-send">Заявка отправлена</p>
            </form>
            <p class="form-request-open__rules">
                Оставляя контактную информацию, Вы соглашаетесь на <a href="javascript:void(0);" class="link tooltip" data-tooltip-content="#tooltip_content">обработку персональных данных</a>
            </p>
        </div>
    </div>
</div>
@include('common.personal-data')
