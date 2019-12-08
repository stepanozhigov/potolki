<img src="/img/gui/close.svg" alt="close" class="popupN__close js-close">
<div class="popupN-sale__general">
    <h3 class="popupN__title">Сделаем дешевле!</h3>
    <form action="{{ route('add-lead') }}" method="POST" class="form popupN__form">
        <p class="popupN__intro">Оставьте заявку на скидку, если вы нашли дешевле, и получите 500 рублей.</p>
        @csrf
        <input type="hidden" name="city" value="{{ $city->bx_code }}">
        <input type="hidden" name="name" value="Получить скидку">
        <input required placeholder="Ваш телефон" name="phone" type="tel" class="inputN popupN__input">
        <button class="buttonN buttonN-red popupN-sale__btn">Получить скидку</button>
        <p class="popupN__agreement">Оставляя контактную информацию, вы соглашаетесь на <u>обработку персональных данных</u></p>
    </form>
</div>
<img src="/img/templates/gui/form/sale_popap.png" alt="sale" class="popupN-sale__img">

<div class="popup__status-send">
	<p class="popup__send-title">спасибо, <br> заявка отправлена</p>
</div>