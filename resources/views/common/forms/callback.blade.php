<form action="{{ route('add-lead') }}" method="POST" class="form popup__form">
	@csrf
    <p class="overtitle popup__title">Заказать звонок</p>
    <hr class="line popup__line">
    <p class="intro popup__intro">Оставьте ваши данные и специалист свяжется с вами <span class="intro_red">в&nbspтечение&nbsp5&nbspминут</span></p>
    <input required placeholder="Ваше имя" name="name" type="text" class="input popup__input">
    <input required placeholder="Ваш телефон" name="phone" type="tel" class="input popup__input">
    <button class="button popup__button">Заказать звонок</button>
    <p class="form__status">Заявка отправлена, спасибо!</p>  
    <p class="text popup__agreement">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
</form>
