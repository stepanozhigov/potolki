@extends('common.layout')

@section('content')
	<style type="text/css">
	* {
		hyphens: none !important;
		word-break      : normal;
	}
	#popup_callback {
    z-index: 102;
    z-index: 99999999999999999;
		align-items: center;


}
#popup_callback .popup__close {
	top: 39px !important;
	right: 39px !important;
}

	.overflowed {
		overflow: initial;
	}
	.overlay {
		display: none !important;
	}
	.page {
		position: relative;
	}
	.ceilingsform {
		align-items: flex-start;
		height: auto;
		justify-content: center;
		overflow: initial;
	}
	.ceilingsform__heading {
		margin: 0;
		width: 100%;
	}
	.ceilingsform__heading-item.active {
		padding-left: 8px;
		padding-right: 16px;
	}
	.ceilingsForm__title {
		display: inline;
		margin-bottom: 49px;
	}
		.footer {
			display: none;
		}
		.ceilingsform__heading-title {
			hyphens: none;
		}
		.ceilingsform_sent .ceilingsform__thankyou {
			height: 100vh;
	    align-items: flex-start;
	    justify-content: flex-start;
	    padding-top: 110px;
	}
		.ceilingsform__heading-text {
			padding-top: 57px;
			padding-right: 8px;
			padding-bottom: 0;
		}
		.ceilingsform__heading-item {
			align-items: flex-start;
		}
		.radio {
			color: #485058;
			font-family: "Playfair Display";
			font-size: 18px;
			font-weight: 400;
			line-height: 21px;
			margin-bottom: 16px;
		}
		@media screen and (max-width: 650px)
		{
			.popup_ceilingsform.popup_active {
				top: 0;
				height: auto !important;
				left: 0;
				position: absolute;
				overflow: initial;
				transform: none;
				max-width: 100vw;
    overflow-x: hidden;
			}
			.popup__close {
				box-shadow: initial !important;
			    background: none;
			    background-color: transparent;
			    top: 15px;
		        width: 17px;
    			padding: 0;
			}
		}
	</style>
    @include('common.headerCeilingsForm')
	    <section class="ceilingsForm container">
	        <div class="ceilingsForm__banner b-texture b-texture_sand">
	            <p class="ceilingsForm__overtitle">пройдите тест за 30 секунд</p>
	            <p class="ceilingsForm__title">Получите расчёт<br>натяжного потолка<br>и <span style="color: #dc1414">подарок</span></p>
	            <a data-src="#popup_ceilingsform" href="javascript:void(0);" class="button form__button js-show">Получить расчёт</a>
	            <p class="ceilingsForm__agreement">Оставляя контактную информацию, вы <br> соглашаетесь на <a href="/sochi/agreement">обработку персональных данных</a> </p>
	        </div>
      </section>
    	<div class="popup popup_ceilingsform" id="popup_ceilingsform" style="">
    		<img src="/img/gui/close.svg" alt="" class="popup__close js-close">
    		<!-- ceilingsform_sent -->
	    	<form action="{{ route('forms.quiz2') }}" class="ceilingsform form js-less popup__form">
	    		@csrf
	    		<input type="hidden" name="city" value="{{ $city->bx_code }}">
				<img src="/img/gui/close_thin.svg" alt="" class="popup__close js-close">
				<div class="ceilingsform__heading">
					<div class="ceilingsform__heading-item active">
						<img height="160px" src="/img/quiz/234.jpg" alt="">
						<div class="ceilingsform__heading-text">
							<p class="ceilingsform__heading-title">Укажите параметры<br>вашего помещения</p>
						</div>
					</div>
					<div class="ceilingsform__heading-item ">
						<img height="160px" src="/img/quiz/132.jpg" alt="">
						<div class="ceilingsform__heading-text">
							<p class="ceilingsform__heading-title">Выберите ваш<br>подарок к<br>натяжному потолку</p>
						</div>
					</div>
					<div class="ceilingsform__heading-item ">
						<img height="160px" src="/img/quiz/133.jpg" alt="">
						<div class="ceilingsform__heading-text">
							<p class="ceilingsform__heading-title">Получите расчет<br>натяжного потолка<br>и подарок</p>
						</div>
					</div>
				</div>
				<div class="ceilingsform__content ">
					<section class="ceilingsform__step ceilingsform__step_first active">
						<p class="ceilingsform__text">Площадь помещения</p>
						<input data-min="0" data-max="100" class="range" type="text" name="area" value="">
						<p class="ceilingsform__text">Количество светильников</p>
						<input data-min="0" data-max="50" class="range" type="text" name="lamps" value="">
						<a href="javascript:void(0);" class="ceilingsform__next">Выбрать подарок →</a>
					</section>
					<section class="ceilingsform__step ceilingsform__step_gift" id="gifts">
						<gifts></gifts>
						<!-- <div class="gifts__item">
							<p class="gifts__title">Купон на 5000 рублей</p>
							<img class="gifts__image" src="/img/quiz/gifts/5000.jpg" alt="">
						</div>
						<div class="gifts__item gifts__item_active">
							<p class="gifts__title">Второй потолок</p>
							<img class="gifts__image" src="/img/quiz/gifts/Second.jpg" alt="">
						</div>
						<div class="gifts__item">
							<p class="gifts__title">Светильники</p>
							<img class="gifts__image" src="/img/quiz/gifts/Lights.jpg" alt="">
						</div> -->

						<a href="javascript:void(0);" class="ceilingsform__prev ceilingsform__next_small">← Назад</a>
						<a href="javascript:void(0);" class="ceilingsform__next ceilingsform__next_small">Выбрать</a>
					</section>
					<section class="ceilingsform__step ceilingsform__step_finish ">
						<p class="ceilingsform__desc">Введите номер телефона и получите расчёт на WhatsApp и СМС в течении <span style="color: red">5&nbspминут.</span></p>
						<input class="input form__input" type="tel" name="phone" required="" placeholder="Ваш телефон">
						<button type="submit" class="ceilingsform__submit">Получить расчёт и подарок</button>
						<p class="ceilingsform__agreement">Оставляя контактную информацию, вы соглашаетесь на <a href="/sochi/agreement">обработку персональных данных</a> </p>
					</section>
				</div>
				<section class="ceilingsform__thankyou">
					<p class="ceilingsform__text">Спасибо!</p>
					<p class="ceilingsform__desc">Ваша заявка принята</p>
					<a class="ceilingsform__transfer" href="{{ route('ceilings', $city) }}">Перейти на сайт</a>
					<a class="ceilingsform__close-button js-close" href="#">Закрыть окно</a>
				</section>
			</form>
		</div>

    @include('common.gui.footer', ['skipOffer' => true])
@endsection
