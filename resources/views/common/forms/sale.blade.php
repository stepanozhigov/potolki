<form action="{{ route('add-lead') }}" method="POST" class="form popup__form">
	@csrf
	<input type="hidden" name="city" value="{{ $city->externalCode() ?? '' }}">
    <p class="overtitle popup__title">Получить скидку</p>
    <p class="intro popup__intro">Оставьте ваш телефон и получите скидку!</p>
    <input required placeholder="Ваш телефон" name="phone" type="tel" class="input popup__input">
    <button class="button popup__button">Получить скидку</button>
    <p class="text popup__agreement">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
</form>
<div class="popup__status-send">
	<p class="popup__send-title">спасибо, <br> заявка отправлена</p>
</div>