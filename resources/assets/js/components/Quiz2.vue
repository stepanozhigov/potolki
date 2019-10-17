<template>
	<div>
		<section class="ceilingsForm container">
	        <div class="ceilingsForm__banner">
	            <p class="ceilingsForm__overtitle">тест займёт 30 секунд</p>
	            <p class="ceilingsForm__title">Получите&nbsp;3 варианта расчета и&nbsp;подарок</p>
	            <a data-src="#popup_ceilingsform" href="javascript:void(0);" class="button form__button js-show">Получить расчет сейчас</a>
	            <p class="ceilingsForm__agreement">Оставляя контактную информацию, вы <br> соглашаетесь на <a href="http://89.108.103.224:99/sochi/agreement">обработку персональных данных</a> </p>
	        </div>
	        <div class="ceilingsForm__advantages">
	            <div class="ceilingsForm__advantages-item">
	                <img src="/img/car.svg" alt="">
	                <p>Выезд мастера бесплатно!</p>
	            </div>
	            <div class="ceilingsForm__advantages-item">
	                <img src="/img/cup.svg" alt="">
	                <p>Договор на дому</p>
	            </div>
	            <div class="ceilingsForm__advantages-item">
	                <img src="/img/sert.svg" alt="">
	                <p>Сертификаты</p>
	            </div>
	            <div class="ceilingsForm__advantages-item">
	                <img src="/img/garant.svg" alt="">
	                <p>Гарантия 15 лет</p>
	            </div>
	        </div>
	    </section>
		<form class="ceilingsform form popup__form  ceilingsform_sent">
			<img src="/img/gui/close_thin.svg" alt="" class="popup__close js-close">
			<div class="ceilingsform__heading">
				<div class="ceilingsform__heading-item active">
					<img src="/img/234.jpg" alt="">
					<div class="ceilingsform__heading-text">
						<p class="ceilingsform__heading-overtitle">Ваше помещение</p>
						<p class="ceilingsform__heading-title">Укажите площадь и количество светильников</p>
					</div>
				</div>
				<div class="ceilingsform__heading-item ">
					<img src="/img/133.jpg" alt="">
					<div class="ceilingsform__heading-text">
						<p class="ceilingsform__heading-overtitle">Подарок</p>
						<p class="ceilingsform__heading-title">Выберите подарок к натяжному потолку</p>
					</div>
				</div>
				<div class="ceilingsform__heading-item ">
					<img src="/img/153.jpg" alt="">
					<div class="ceilingsform__heading-text">
						<p class="ceilingsform__heading-overtitle">Спасибо!</p>
						<p class="ceilingsform__heading-title">Получите расчет потолка, а также приятный подарок</p>
					</div>
				</div>
			</div>
			<div class="ceilingsform__content ">
				<section class="ceilingsform__step ceilingsform__step_first active">
					<p class="ceilingsform__text">Площадь помещения</p>
					<input data-min="0" data-max="150" class="range" type="text" name="" value="">
					<p class="ceilingsform__text">Количество светильников</p>
					<input data-min="0" data-max="150" class="range" type="text" name="" value="">
					<a href="javascript:void(0);" class="ceilingsform__next">Выбор подарка →</a>
				</section>
				<section class="ceilingsform__step ceilingsform__step_gift ">
					<label class="ceilingsform__radio">
						<div class="radio">
							<input name="gift" type="radio" class="radio__input">
							<span class=" radio__mark"></span>
							Второй потолок
						</div>
					</label>
					<label class="ceilingsform__radio">
						<div class="radio">
							<input name="gift" type="radio" class="radio__input">
							<span class=" radio__mark"></span>
							Светильники
						</div>
					</label>
					<label class="ceilingsform__radio">
						<div class="radio">
							<input name="gift" type="radio" class="radio__input" checked>
							<span class=" radio__mark"></span>
							Купон на 5000 рублей
						</div>
					</label>
					<img src="/img/ceilingsForm/17.jpg" alt="">
					<img src="/img/ceilingsForm/18.jpg" alt="">
					<img class="active" src="/img/ceilingsForm/16.jpg" alt="">
					<a href="javascript:void(0);" class="ceilingsform__prev ceilingsform__next_small">← Назад</a>
					<a href="javascript:void(0);" class="ceilingsform__next ceilingsform__next_small">Выбрать</a>
				</section>
				<section class="ceilingsform__step ceilingsform__step_finish ">
					<p class="ceilingsform__desc">Введите номер телефона и вы <br> получите расчет на WhatsApp и СМС <br> в течении 5 минут</p>
					<input class="input form__input" type="tel" name="phone" required="" placeholder="Ваш телефон" im-insert="true">
					<button type="submit" class="ceilingsform__submit">Получить результат расчёта</button>
					<p class="ceilingsform__agreement">Оставляя контактную информацию, вы соглашаетесь на <a href="http://89.108.103.224:99/sochi/agreement">обработку персональных данных</a> </p>
				</section>
			</div>
			<section class="ceilingsform__thankyou">
				<p class="ceilingsform__text">Спасибо!</p>
				<p class="ceilingsform__desc">Ваша заявка принята</p>
				<a class="ceilingsform__transfer" href="#">Перейти на сайт</a>
				<a class="ceilingsform__close-button js-close" href="#">Закрыть окно</a>
			</section>
			<div class="ceilingsform__scale">
				<span style="width: 25%" class="">25 %</span>
			</div>
		</form>

	</div>
</template>

<style type="text/css">
	.input_invalid {
		border-color: #dc1414;
		color: #dc1414;
	}
	.quiz {
		padding: 96px 120px 112px 120px;
	    display: flex;
	    flex-direction: column;
	    align-items: center;
	    background-image: url(/img/ceilings/quiz/quiz.jpg);
	    background-position: center;
	    background-repeat: no-repeat;
	    margin-bottom: 80px;
	}
	.quiz__footer {
		display: flex;
	    justify-content: space-between;
	    width: 80%;
	    margin: 0 auto;
	    margin-bottom: 80px;
	}
	.quiz__additional {
		width: 24%;
	    display: flex;
	    flex-direction: column;
	    align-items: center;
	}
	.quiz__additional p {
		color: #485058;
		font-family: "Playfair Display";
		font-size: 20px;
		font-weight: 400;
		line-height: 24px;
	}
	.quiz__success {
		padding-top: 40px;
	}
	.quiz__result {
		margin-top: -40px;
		flex-direction: column;
	}
	.quiz__result p {
	    hyphens: none;
		color: #485058;
		margin-bottom: 16px;
	}
	.quiz__result input {
		width: 368px;
		margin-bottom: 48px;
	}
	.quiz__result button {
	 	width: 368px;
 	}
	.quiz__titles {
		margin-bottom: 42px;
	}
	.quiz__overtitle {
		color: white;
		font-size: 16px;
	}
	.quiz__step {
		font-size: 16px;
	    font-weight: 300;
	    color: #485058;
	    margin-bottom: 12px;
	}
	.quiz__title {
		font-size: 64px;
		line-height: 64px;
		display: flex;
		flex-direction: column;
		color: white;
	}
	.quiz__title::after, .second-title::after {
		content: none;
	}
	.quiz__title span {
		font-size: 48px;
	}
	.quiz__intro {
		color: white;
		margin-bottom: 62px;
	}
	.quiz__buttons {
		margin-top: 48px;
		display: flex;
		justify-content: space-between;
	}
	.quiz__button {
		font-weight: 300;
	}
	.quiz__popup {
	    align-items: center;
    	justify-content: center;
    	flex-direction: column;
		padding: 48px 40px 64px 40px;
		box-shadow: 0 8px 16px rgba(0, 0, 0, 0.16), 0 0 8px rgba(0, 0, 0, 0.08), inset 0 -1px 0 rgba(0, 0, 0, 0.12);
		border-radius: 16px;
		width: 1120px;
	    background: white;
	    z-index: 9999999;
	    display: flex;   
	    position: fixed;
	    top: 50%;
	    left: 50%;
	    transform: translate(-50%, -50%);
	}
	.quiz__content {
		display: flex;
		flex-wrap: wrap;
		width: 100%;
	    justify-content: space-between;
	    align-items: center;
	}
	.quiz__content_area {
		width: 51%;
	}
	.quiz__content_when {
		width: 85%;
	}
	.quiz__img {
		margin-bottom: 16px;
		width: 100%;
	}
	.quiz__types {
		justify-content: center;
	}
	.quiz__type {
		margin: 0 16px 32px 0;
		width: 23.8%;
		flex-wrap: wrap;
		display: flex;
		flex-direction: column;
		align-items: center; 

	}
	.quiz__type:nth-of-type(4) {
		margin-right: 0
	}

	@media screen and (max-width: 1200px) {
		.quiz__popup {
			width: 95%;
		}
		.quiz__types {
			justify-content: space-evenly;
		}
		.quiz__type {
		    margin-right: 0;
		    width: 30%;
		}
	}
	@media screen and (max-width: 900px) {
		.quiz {
			background-image: url('/img/ceilings/quiz/quiz_768.jpg');
		    background-size: cover;
		    padding-left: 36px;
		    padding-right: 36px;
		}
		.quiz__title {
			font-size: 48px;
		}
		.quiz__title span {
			font-size: 40px;
		}
		.quiz__footer {
			flex-wrap: wrap;
		}
	}
	@media screen and (max-width: 500px) {
		.quiz {
			background-color: #485058;
    		background-image: none;
		    padding: 46px 8px;
		}
		.quiz__popup {
	        max-height: 95vh;
   			overflow: scroll;
		}
		.quiz__overtitle {
			font-size: 14px;
		}
		.quiz__titles {
			margin-bottom: 12px;
		}
		.quiz__title {
			font-size: 32px;
			line-height: 40px;
		    margin-top: 46px;
		}
		.quiz__title span {
			font-size: 24px;
		}
		.quiz__additional {
			width: 45%;
			text-align: center;
		}
		.quiz__radio {
			margin-bottom: 16px;
		}
		.quiz__types {
			flex-direction: column;
		}
		.quiz__type {
			width: 100%;
			align-items: flex-start;
			margin-bottom: 16px;
		}
		.quiz__img {
			display: none;
		}
		.quiz__buttons {
			flex-direction: column;
    		width: 100%;
		}
		.quiz__button {
			margin-bottom: 16px;
		}
		.quiz__next {
			order: 1;
		}
		.quiz__prev {
			order: 2;
		}
		.quiz__result {
			margin-top: 0;
		}
		.quiz__result p {
			text-align: center;
		}
		.quiz__result input {
			width: 100%;
		}
		.quiz__content_area {
			align-items: flex-start;
		    justify-content: flex-start;
		    width: 100%;
		    flex-direction: column;
		}
		.quiz__content_when {
		    flex-direction: column;
		    align-items: baseline;
		}
	}
</style>

<script type="text/javascript">
	window.$ = window.jQuery = require('jquery');
	import Vue from 'vue';
	const VueInputMask = require('vue-inputmask').default;
	 
	Vue.use(VueInputMask);
	export default {
		watch: {
			// step: function (step) {
			// 	if (step == 7) {
			// 		var comp = this;
			// 		var phoneMask = new Inputmask({
			// 	        mask:'8 999 999-99-99',
			// 	        oncomplete: function(event) {
			// 	        	comp.phoneValidated = true; 
			// 	        },
			// 	        onincomplete: function(event) {
			// 	        	comp.phoneValidated = false;
			// 	        }
			//     	}),
			//     	$phones = $('.quiz__phone');
			//     	console.log($phones);
			// 		phoneMask.mask($phones);
			// 	}
			// }
		},
		computed: {
			cityLink: function () {
				var link = 'https://potolki-ts.ru/';

				if (window.city)
				{
					return link + window.city.code;
				}
				return link;
			}
		},
		data: function () {
			return {
				opened: false,
				step: 1,
				phoneValidated: false,
				questions: {
					area: null,
					type: null,
					material: null,
					lamp: null,
					when: null,
					gift: null,
					phone: null
				}
			}
		}, 
		methods: {
			enable: function () {
				this.phoneValidated = true;
			},
			disable: function () {
				this.phoneValidated = false;
			},
			send: function () {
				var comp = this;
				this.step = 6;

				$('[type=tel]').trigger('change'); 

				fbq('track', 'Lead');
    
			    if (typeof ga !== 'undefined') {
			        ga.getAll()[0].send('event', 'quiz', 'send');
			    }
			    if (typeof window.yaCounter40202559 !== 'undefined') {
			        window.yaCounter40202559.reachGoal('quiz');
			    }

				$.ajax({
					url:'/forms/quiz',
					dataType: 'json',
					method: 'post',
					data: {
						phone: comp.questions.phone,
						city: window.city.bx_code,
						questions: {
							'Площадь': comp.questions.area,
							'Тип': comp.questions.type,
							'Материал': comp.questions.material,
							'Освещение': comp.questions.lamp,
							'Когда': comp.questions.when,
							'Подарок': comp.questions.gift,
						}
					},
					success: function (response) {

					}
				})
			},
			validate: function (step) {
				return true;
			},
			nextStep: function () {
				if (this.validate(this.step)) {
					this.step ++ ;
				};
			}
		},
		mounted: function () {
			
		}
	}
</script>