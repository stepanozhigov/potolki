@extends('common.layout')

@section('content')
	@include('common.gui.header')
	<section class="payment b-texture container">
		@include('common.gui.titles', [
			'title' =>  'Оплата натяжных потолков онлайн',
			'overtitle' =>  'Заявка на оплату',
		])
		<style media="screen">
			.payment {
				width: 780px;
    			margin: 0 auto;
			}
			.payment__form {
				display: grid;
				grid-template-columns: 48% 48%;
				grid-gap: 20px;
			}
			.payment__form button {
				width: 100%;
			}

			@media screen and (max-width: 1100px) {
				.payment {
					width: 90%;
				}
				.payment__form {
					display: grid;
					grid-template-columns: 100%;
					grid-gap: 20px;
				}
			}
		</style>
		<form class="payment__form" method="POST"  class="application"  accept-charset="UTF-8" action="https://partner.rficb.ru/alba/input/">
		  <input type="hidden" name="key" value="yvgz56fJm6cDc6hpZJt1O5zcQQY6vVxdZaY1xCgk4OM=" />

		    <!-- <input type="hidden" name="key" value="fvMXytFivKigwP8EzZ21ErVxb+PqIpiwt6RSDsmXwGQ=" /> -->
		    <input type="hidden" name="name" value="potolki-ts.ru оплата договора"/>
		    <input type="hidden" name="order_id" value="0" />
            <input class="input" name="payer_name" value="" required placeholder="Ваше имя" />
            <input class="input" name="custom_fields" value="" required placeholder="Ваш адрес" />
            <input class="input" name="email" value="" required placeholder="Ваш e-mail" />
            <input class="input" name="comment" value="" required placeholder="Номер договора" />
            <input class="input" name="cost" value="" required placeholder="Сумма" />

		    <button class="button" name="button">Оплатить</button>
		</form>
	</section>
@endsection
