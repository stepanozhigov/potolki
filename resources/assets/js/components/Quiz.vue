<template>
	<div>
		<section class="quiz">
			<p class="overtitle quiz__overtitle">Тест займёт 1 минуту</p>
	        <h1 class="title quiz__title">
	        	Получите 3 варианта&nbspрасчета
	        	<span>эконом, стандарт и премиум</span>
	        </h1>
	        <p class="intro quiz__intro">В конце теста вас ждёт подарок!</p>
	        <button @click="opened = true" class="button quiz__button">Получить расчет сейчас</button>
	        <div v-if="opened" class="overlay overlay_active"></div>
	        <div v-show="opened" class="quiz__popup">
	        	<a @click="opened = false" class="popup__close quiz__close">
			    	<img data-lazy-src="/img/gui/close.svg" alt="" class="" src="/img/gui/close.svg">
			    </a>
			    <div v-if="step < 8" class="quiz__titles">
			    	<p v-if="step < 7" class="overtitle quiz__step">Вопрос {{ step }}/6</p>
			    	<p v-if="step == 7" class="overtitle quiz__step">Спасибо за ответы!</p>
			    	<p v-if="step == 1" class="second-title">Укажите примерный метраж помещения?</p>
			    	<p v-if="step == 2" class="second-title">Выберите тип натяжного потолка</p>
			    	<p v-if="step == 3" class="second-title">Какую фактуру натяжного потолка вы хотите?</p>
			    	<p v-if="step == 4" class="second-title">Какое хотели бы освещение в потолке?</p>
			    	<p v-if="step == 5" class="second-title">Когда планируете делать потолок?</p>
			    	<p v-if="step == 6" class="second-title">Выберите ваш подарок к потолку</p>
			    	<p v-if="step == 7" class="second-title">Получите результат расчёта и подарок, оставив контакты</p>
			    </div>
			    <div v-if="step == 1" class="quiz__content quiz__content_area">
			    	<label class="radio quiz__radio">
			    		<input v-model="questions.area" value="до 10" type="radio" class="radio__input">
			    		<i class="radio__mark"></i>
			    		<span class="radio__label">До 10 кв.м</span>
			    	</label>
			    	<label class="radio quiz__radio">
			    		<input v-model="questions.area" value="до 20" type="radio" class="radio__input">
			    		<i class="radio__mark"></i>
			    		<span class="radio__label">До 20 кв.м</span>
			    	</label>
			    	<label class="radio quiz__radio">
			    		<input v-model="questions.area" value="до 30" type="radio" class="radio__input">
			    		<i class="radio__mark"></i>
			    		<span class="radio__label">До 30 кв.м</span>
			    	</label>
			    	<label class="radio quiz__radio">
			    		<input v-model="questions.area" value="от 40" type="radio" class="radio__input">
			    		<i class="radio__mark"></i>
			    		<span class="radio__label">От 40 кв.м</span>
			    	</label>
			    </div>
			    <div v-if="step == 2" class="quiz__content quiz__types">
			    	<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/types/types_1.jpg">
			    		<div class="radio">
				    		<input v-model="questions.type" value="одноуровневый" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Одноуровневый</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/types/types_2.jpg">
			    		<div class="radio">
				    		<input v-model="questions.type" value="двухуровневый" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Двухуровневый</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/types/types_3.jpg">
			    		<div class="radio">
				    		<input v-model="questions.type" value="Фотопечать" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Фотопечать</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/types/types_4.jpg">
			    		<div class="radio">
				    		<input v-model="questions.type" value="С подсветкой" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">С подсветкой</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/types/types_5.jpg">
			    		<div class="radio">
				    		<input v-model="questions.type" value="Резной" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Резной</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/types/types_6.jpg">
			    		<div class="radio">
				    		<input v-model="questions.type" value="3D-объёмный" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">3D-объёмный</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/types/types_7.jpg">
			    		<div class="radio">
				    		<input v-model="questions.type" value="звездное небо" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Звездное небо</span>
			    		</div>
		    		</label>
			    	
			    </div>
			    <div v-if="step == 3" class="quiz__content quiz__types">
			    	<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/materials/material_1.jpg">
			    		<div class="radio">
				    		<input v-model="questions.material" value="Матовый" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Матовый</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/materials/material_2.jpg">
			    		<div class="radio">
				    		<input v-model="questions.material" value="Глянцевый" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Глянцевый</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/materials/material_3.jpg">
			    		<div class="radio">
				    		<input v-model="questions.material" value="Сатиновый" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Сатиновый</span>
			    		</div>
		    		</label>
			    </div>
			    <div v-if="step == 4" class="quiz__content quiz__types">
			    	<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/lamps/lamps_1.jpg">
			    		<div class="radio">
				    		<input v-model="questions.lamp" value="Встраиваемые светильники" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Встраиваемые светильники</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/lamps/lamps_2.jpg">
			    		<div class="radio">
				    		<input v-model="questions.lamp" value="Светильники с люстрой" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Светильники с люстрой</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/lamps/lamps_3.jpg">
			    		<div class="radio">
				    		<input v-model="questions.lamp" value="Внутренняя подсветка" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Внутренняя подсветка</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/lamps/lamps_4.jpg">
			    		<div class="radio">
				    		<input v-model="questions.lamp" value="Только люстра" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Только люстра</span>
			    		</div>
		    		</label>
			    </div>
			    <div v-if="step == 5" class="quiz__content quiz__content_when">
			    	<label class="radio quiz__radio">
			    		<input v-model="questions.when" value="В ближайшие дни" type="radio" class="radio__input">
			    		<i class="radio__mark"></i>
			    		<span class="radio__label">В ближайшие дни</span>
			    	</label>
			    	<label class="radio quiz__radio">
			    		<input v-model="questions.when" value="Через неделю" type="radio" class="radio__input">
			    		<i class="radio__mark"></i>
			    		<span class="radio__label">Через неделю</span>
			    	</label>
			    	<label class="radio quiz__radio">
			    		<input v-model="questions.when" value="Через 2 недели" type="radio" class="radio__input">
			    		<i class="radio__mark"></i>
			    		<span class="radio__label">Через 2 недели</span>
			    	</label>
			    	<label class="radio quiz__radio">
			    		<input v-model="questions.when" value="Через месяц" type="radio" class="radio__input">
			    		<i class="radio__mark"></i>
			    		<span class="radio__label">Через месяц</span>
			    	</label>
			    	<label class="radio quiz__radio">
			    		<input v-model="questions.when" value="Пока прицениваюсь" type="radio" class="radio__input">
			    		<i class="radio__mark"></i>
			    		<span class="radio__label">Пока прицениваюсь</span>
			    	</label>
			    </div>
			    <div v-if="step == 6" class="quiz__content quiz__types">
			    	<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/gifts/gift_1.jpg">
			    		<div class="radio">
				    		<input v-model="questions.gift" value="Второй потолок" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Второй потолок</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/gifts/gift_2.jpg">
			    		<div class="radio">
				    		<input v-model="questions.gift" value="Купон на 5000 рублей" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Купон на 5000 рублей</span>
			    		</div>
		    		</label>
		    		<label class="quiz__type">
			    		<img class="quiz__img" src="/img/ceilings/quiz/gifts/gift_3.jpg">
			    		<div class="radio">
				    		<input v-model="questions.gift" value="Светильники" type="radio" class="radio__input">
				    		<i class="radio__mark"></i>
				    		<span class="radio__label">Светильники</span>
			    		</div>
		    		</label>
			    </div>
			    <div v-show="step == 7" class="quiz__content quiz__result">
		    		<p class="text">Введите номер телефона, мы вышлем СМС с результатами</p>
		    		<input v-mask="{mask: '8 999-999-99-99', oncomplete: enable}" v-model="questions.phone" class="input quiz__phone" type="tel" placeholder="Ваш телефон*">
		    		<button :disabled="!phoneValidated" @click="send" class="button quiz__button">Получить результат расчёта</button>
			    </div> 
			    <div v-if="step < 7" class="quiz__buttons">
			    	<button v-if="step > 1" @click="step--" class="button quiz__button quiz__prev" style="margin-right: 16px">Предыдущий шаг</button>
			    	<button @click="step++" class="button quiz__button quiz__next">Следующий шаг</button>
			    	
			    </div>
			    <div v-if="step == 8" class="quiz__success">
			    	<p class="overtitle quiz__step">Спасибо!</p>
			    	<p class="second-title">Заявка принята</p>
			    	<a href="https://potolki-ts.ru" class="button">Перейти на сайт</a>
			    </div>
	        </div>
	    </section>
	    <div class="quiz__footer">
	    	<div class="quiz__additional">
	    		<img src="/img/ceilings/quiz/icons/icon_1.png">
	    		<p>Выезд мастера бесплатно!</p>
	    	</div>
	    	<div class="quiz__additional">
	    		<img src="/img/ceilings/quiz/icons/icon_2.png">
	    		<p>Договор на дому</p>
	    	</div>
	    	<div class="quiz__additional">
	    		<img src="/img/ceilings/quiz/icons/icon_3.png">
	    		<p>Сертификаты</p> 
	    	</div>
	    	<div class="quiz__additional">
	    		<img src="/img/ceilings/quiz/icons/icon_4.png">
	    		<p>Гарантия 15 лет</p>
	    	</div>
	    </div>
	</div>
</template>

<style type="text/css">
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
		flex-direction: column;
	}
	.quiz__result p {
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
				this.step = 8;

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
			}
		},
		mounted: function () {
			
		}
	}
</script>