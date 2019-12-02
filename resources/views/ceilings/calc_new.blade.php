<section class="wrapper calc section">
	<h2 class="title-dec">Калькулятор</h2>
	<p class="calc__item calc__item-intro">
		Расчёт стоимости натяжного потолка <span class="b-color_red">по акции</span>.
		Для точного расчёта необходимо произвести замер!
	</p>
	<div class="calc__item">
		<p class="calc__item-name">Площадь помещения</p>
		<input value="1" name="area" data-min="0" data-from="1" data-max="150" class="range" type="text">
    </div>
	<div class="calc__item">
		<p class="calc__item-name">Количество светильников</p>
		<input name="lamps" data-min="0" data-max="30" class="range" type="text">
	</div>
	<div class="calc__item">
		<p class="calc__item-name">Цена с установкой</p>
		<p class="calc__total"><span class="js-calc-price">350</span> ₽</p>
	</div>
	<a href="{{ route('forms.measure', $city) }}" class="calc__callback buttonN buttonN-red">Вызвать замерщика</a>
</section>