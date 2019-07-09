<form action="{{ route('add-lead') }}" method="POST" class="form popup__form">
	@csrf
	<input type="hidden" name="city" value="{{ $city->externalCode() }}">
    <p class="overtitle popup__title">Заказать звонок</p>
    <p class="intro popup__intro">Оставьте ваши данные и специалист свяжется с вами <span class="intro_red">в&nbspтечение&nbsp5&nbspминут</span></p>
    <input required placeholder="Ваше имя" name="name" type="text" class="input popup__input">
    <input required placeholder="Ваш телефон" name="phone" type="tel" class="input popup__input">
    <button class="button popup__button">Заказать звонок</button>
    <p class="text popup__agreement">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
</form>
<div class="popup__status-send">
	<p class="popup__send-title">спасибо, <br> заявка отправлена</p>
	<p class="intro popup__intro">Подпишитесь на&nbsp;удобную для вас социальную сеть и&nbsp;получите 10&nbsp;% скидки</p>
	<div class="socials">
		@foreach($city->socials as $social)
			<a target="_blank" href="{{ $social->link }}" class="socials__item">
				<div class="socials__icon socials__icon_{{ $social->icon }}"></div>
			</a>
		@endforeach
	</div>
	@include('common.gui.survey')
</div>
