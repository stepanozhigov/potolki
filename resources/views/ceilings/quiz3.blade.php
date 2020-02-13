<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Квиз опрос. Твой стиль</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <link rel="stylesheet" href="https://unpkg.com/vue-range-component@1.0.2/dist/vue-range-slider.min.css"> -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vue-slider-component@latest/theme/default.css">
		<style>
			@font-face {
				font-family: "Helvetica Neue";
				src: url('/source/fonts/helvetica-neue/helvetica-neue_light.woff');
				font-weight: 300;
				font-display: swap;
			}
			@font-face {
				font-family: "Futura PT - Book";
				src: url('/source/fonts/futura-pt/futura-pt_book.woff');
				font-weight: 300;
				font-display: swap;
			}
			@font-face {
				font-family: "Playfair Display";
				src: url('/source/fonts/playfair-display/playfair-display.woff');
				font-weight: 400;
				font-display: swap;
			}

			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}

			.color_black {
				color: #485058;
			}
			.color_gray {
				color: #808890;
			}
			.color_red {
				color: #dc1414;
			}

			.overtitle {
				color: #485058;
				font-family: "Futura PT - Book";
				font-size: 14px;
				font-weight: 300;
				letter-spacing: 4px;
				line-height: 28px;
				text-transform: uppercase;
			}
			.overtitle_gray {
				color: #808890;
				text-align: center;
			}
			.h1 {
				color: #485058;
				font-family: "Playfair Display";
				font-size: 32px;
				font-weight: 400;
				line-height: 40px;
				/* color: #dc1414; */
			}
			.h2 {
				color: #485058;
				font-family: "Playfair Display";
				font-size: 22px;
				font-weight: 400;
				line-height: 26px;
			}
			.h3 {
				color: #485058;
				font-family: "Playfair Display";
				font-size: 18px;
				font-weight: 400;
			}
			.intro {
				color: #485058;
				font-family: "Helvetica Neue";
				font-size: 18px;
				font-weight: 300;
				line-height: 26px;
				/* color: #dc1414; */
			}
			.intro_red {
				color: #dc1414;
			}

			.button {
				display: flex;
			    justify-content: center;
			    align-items: center;

				box-shadow: inset 0 -1px 0 #a01414;
				border-radius: 5px;
				background-color: #dc1414;
				border: none;
				color: #ffffff;
				padding: 12px;
				outline: none;

				font-size: 20px;
				font-family: "Helvetica Neue";
				text-decoration: none;
			}
			.button_gray {
				background-color: #babec2;
				box-shadow: inset 0 -1px 0 #808890;
			}
			.radio {
				display: grid;
				align-items: center;
			    grid-template-columns: 24px 1fr;
			}
			.radio__input {
				display: none;
			}
			.radio__mark {
				width: 16px;
				height: 16px;
				border-radius: 50%;
				border: 1px solid #babec2;
				background-color: #ffffff;
				position: relative;
			}
			.radio__input:checked + .radio__mark:before {
				content: '';
				position: absolute;
				width: 8px;
				height: 8px;
				box-shadow: inset 0 -1px 0 #a01414;
				background-color: #dc1414;
				border-radius: 50%;
			    top: 50%;
			    left: 50%;
			    transform: translate(-50%, -50%);
			}
			.radio__label {
				color: #485058;
				font-family: "Helvetica Neue";
				font-size: 16px;
				font-weight: 300;
				line-height: 24px	;
			}
			.input {
				outline: none;
				border-radius: 4px;
				border: 1px solid #babec2;
				background-color: #ffffff;
				color: #808890;
				font-family: "Helvetica Neue";
				font-size: 18px;
				font-weight: 300;
				line-height: 20px;
				padding: 14px 16px;
			}
			.vue-slider-rail {
				height: 12px !important;
				box-shadow: inset 0 1px 0 #808890;
				border-radius: 10px;
				background-color: #babec2;
			}
			.vue-slider-process {
				height: 12px;
				box-shadow: inset 0 1px 0 #a01414;
				border-radius: 10px;
				background-color: #dc1414;
			}
			.vue-slider-dot-tooltip-top {
				top: 4px !important;
			}
			.vue-slider-dot {
				width: 41px !important;
				height: 40px !important;
			    /* top: -16px !important; */
			}
			.vue-slider-dot-tooltip-inner {
				width: 50px;
				height: 38px;
				color: #dc1414;
				font-family: "Helvetica Neue";
				font-size: 32px;
				line-height: 32px;
				background: none;
    			border: none;
			}
			.vue-slider-dot-tooltip-inner:after {
				content: none;
				display: none;
			}
			.form {
				display: grid;
				padding-bottom: 30px;
			}
			.form__intro {
				margin-bottom: 26px;
			}
			.form__input {
				margin-bottom: 16px;
			}


			.gifts {
				position: relative;
			}
			.gifts__arrow {
				z-index: 999;
				outline: none;
				position: absolute;
				top: 32%;
				width: 60px;
				height: 60px;
				border: none;
				background-color: rgba(0,0,0,.4);
				border-top-left-radius: 35px;
				border-bottom-left-radius: 35px;
			}
			.gifts__next {
				right: -16px;
			}
			.gifts__prev {
				left: -16px;
				transform: rotate(-180deg);
			}
			.gifts img {
				width: 100%;
			}

			.agreement {
				color: #808890;
				font-family: "Helvetica Neue";
				font-size: 12px;
				font-weight: 300;
				line-height: 16px;
			}

			.quiz {
				display: grid;
				justify-content: stretch;
			}
			.quiz__header {
				display: grid;
				justify-content: center;
				padding: 24px 0;
			}
			.quiz__preview {
				background: url(/source/background.jpg);
				background-repeat: no-repeat;
				background-size: cover;
				display: grid;
				justify-content: center;
				align-items: start;
				text-align: center;
				padding: 56px 20px 40px 20px;
			}
			.quiz__preview .overtitle {
				margin-bottom: 8px;
			}
			.quiz__preview .h1 {
				margin-bottom: 48px;
			}
			.quiz__preview .agreement {
				margin-top: 28px;
			}
			.quiz__steps {
				display: grid;
				grid-template-columns: 1fr 2fr;
				grid-template-areas: 'img overtitle'
									 'img title';
			}
			.quiz__steps img {
				grid-area: img;
			}
			.quiz__steps .overtitle {
				grid-area: overtitle;
			    align-self: end;
				min-height: 28px;
			}
			.quiz__steps .h2 {
				grid-area: title;
				align-self: start;
			}
			.quiz__question {
				padding: 48px 16px 32px 16px;
				display: grid;
				border-radius: 16px 16px 0 0;
				background-color: #ffffff;
				box-shadow: 0 8px 16px rgba(0, 0, 0, 0.16), 0 0 8px rgba(0, 0, 0, 0.08), inset 0 -1px 0 rgba(0, 0, 0, 0.12);
			}
			.quiz__radios {
			    display: grid;
				row-gap: 16px;
				margin-bottom: 32px;
			}
			.quiz__range {
				padding: 56px 0 48px 0;
			}
			.quiz__gifts {
				margin-bottom: 24px;
			}
			.quiz__result {
				align-items: start;
				display: grid;
				justify-content: center;
				padding-top: 64px;
			}
			.quiz__result .overtitle {
				margin-bottom: 8px;
			}
			.quiz__result .h2 {
				margin-bottom: 48px;
			}
			.quiz__result .button {
				margin-bottom: 16px;
			}

			@media screen and (min-width: 900px) {
				.quiz__question, .quiz__steps {
					width: 450px;
    				margin: 0 auto;
				}
			}
		</style>
	</head>
	<body>
		<? $visit = new App\Visit; ?>
		<main id="quiz">
			<section class="quiz">
				<header v-if="step == 0" class="quiz__header">
					<img src="/img/quiz/logo.svg" class="logo">
				</header>

				<section v-if="step == 0" class="quiz__preview" >
					<p class="overtitle">
						пройдите тест за 30 секунд
					</p>
					<h1 class="h1">
						Получите расчёт<br>
						натяжного потолка<br>
						<span class="color_red">и подарок</span>
					</h1>
					<button @click="step = 1" class="button">Получить расчёт</button>
					<p class="agreement">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
				</section>

				<section v-if="step > 0 && currentQuestion" class="quiz__steps">
					<img :src="currentQuestion.img">
					<p class="overtitle">@{{ currentQuestion.overtitle }}</p>
					<p class="h2" v-html="currentQuestion.title"></p>
				</section>

				<section v-if="step == 1" class="quiz__question">
					<p class="h3">Площадь помещения</p>
					<div class="quiz__range">
						<vue-slider
					    class="slider"
						tooltip="always"
					    :min="1"
					    :max="100"
					    :step="1"
					    v-model="questions.area"
						:tooltip-formatter="lengthTooltip"
						>
					  </vue-slider>
					</div>
					<p class="h3">Количество светильников</p>
					<div class="quiz__range">
						<vue-slider
					    class="slider"
						tooltip="always"
					    :min="1"
					    :max="20"
					    :step="1"
					    v-model="questions.lamps"
						:tooltip-formatter="lengthTooltip"
						>
					  </vue-slider>
					</div>

					<button @click="step = 2" class="button">Далее</button>
				</section>
				<section v-if="step == 2" class="quiz__question">
					<div class="gifts quiz__gifts">
						<button  @click.prevent="nextGift" class="gifts__arrow gifts__prev">
					      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16">
					        <defs>
					          <path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z">
					          </path>
					        </defs>
					        <g>
					          <g transform="translate(-1405 -522)">
					            <use fill="" xlink:href="#83zha"
					            ></use></g></g>
					      </svg>
					    </button>
						<button @click.prevent="nextGift" class="gifts__arrow gifts__next">
					      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16">
					        <defs>
					          <path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z">
					          </path>
					        </defs>
					        <g>
					          <g transform="translate(-1405 -522)">
					            <use fill="" xlink:href="#83zha"
					            ></use></g></g>
					      </svg>
					    </button>
						<transition name="slide-fade">
							<img @click="nextGift" class="gifts__image" :src="currentGift.img" alt="">
						</transition>
						<div class="gifts__dots">
				      		<span v-for="(gift, id) in gifts" class="gifts__dot" :class="{'gifts__dot_active':1}"></span>
					    </div>
					</div>
					<button @click="step = 3" class="button">Далее</button>
				</section>
				<section v-if="step == 3" class="quiz__question">
					<form class="form quiz__form">
						<p class="intro form__intro">
							Введите номер телефона и получите расчёт на WhatsApp и СМС в течении <span class="intro_red">5&nbspминут.</span>
						</p>
						<the-mask :masked="true" type="tel" v-model="questions.phone" class="input form__input" :mask="'+# (###) ###-##-##'"></the-mask>
						<button :disabled="!validated" @click.prevent="submit" class="button form__button">Получить расчёт и подарок</button>
					</form>
				</section>
				<section v-if="step == 4" class="quiz__result">
					<p class="overtitle overtitle_gray">Спасибо!</p>
					<h2 class="h2">Ваша заявка принята</h2>
					<a href="https://potolki-ts.ru/" class="button">Перейти на сайт</a>
					<button @click="step = 0" class="button button_gray">Закрыть окно</button>
				</section>
			</section>
		</main>
	</body>



	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
	<script src="https://unpkg.com/vue-the-mask@0.11.1/dist/vue-the-mask.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue-slider-component@latest/dist/vue-slider-component.umd.min.js"></script>

	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script> 

	  <!-- Facebook Pixel Code -->
      <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1114291812076604');
        fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1114291812076604&ev=PageView&noscript=1"
      /></noscript>
    <!-- End Facebook Pixel Code -->

	<!-- Yandex.Metrika counter -->
		<script async type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(40202559, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:false, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/40202559" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
	    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85472546-4"></script>
	    <script>
	        window.dataLayer = window.dataLayer || [];
	        function gtag(){dataLayer.push(arguments);}
	        gtag('js', new Date());

	        gtag('config', 'UA-85472546-4');
	    </script>
	<!-- Global site tag (gtag.js) - Google Analytics -->

	<script type="text/javascript">
		const quiz = new Vue({
			el: '#quiz',
			watch: {
				'questions.phone': function (val) {
					console.log(val.replace(/^\+\d/, '+7'));
					this.questions.phone = val.replace(/^\+\d/, '+7');
					// return val.replace(/^8/, '+7');
				}
			},
			components: {
			    'vueSlider': window[ 'vue-slider-component' ],
			},
			computed: {
				validated: function () {
					var phone = this.questions.phone,
						length = phone.replace(/ /g, '').length;
					return length > 10;
				},
				currentQuestion: function () {
					if (this.steps[this.step - 1] == undefined) {
						return null
					}
					return this.steps[this.step - 1];
				},
				currentGift: function () {
					return this.gifts[this.questions.gift];
				}
			},
			methods: {
				lengthTooltip: function (value) {
					return value + ' ';
				},
				submit: function () {
					this.step = 4;

					if (typeof fbq !== 'undefined') {
						fbq('track', 'Lead');
					}

				    if (typeof ga !== 'undefined') {
				        ga.getAll()[0].send('event', 'quiz', 'send');
				    }
				    if (typeof window.yaCounter40202559 !== 'undefined') {
				        window.yaCounter40202559.reachGoal('quiz');
				    }

					$.ajax({
						url:'/forms/quiz2',
						dataType: 'json',
						method: 'post',
						data: {
							phone: quiz.questions.phone,
							// city: window.city.bx_code,
							area: quiz.questions.area,
							lamps: quiz.questions.lamps,
							gift: quiz.gifts[quiz.questions.gift].title
						},
						success: function (response) {

						}
					})
				},
				nextGift: function () {
					let count = this.gifts.length,
						next = this.questions.gift + 1;

					if (next > count - 1) {
						next = 0;
					}

					this.questions.gift = next;
				}
			},
			data: {
				step: 0,

				steps: [
						{
							overtitle: 'Вопрос 1/2',
							img: '/source/girl_1.jpg',
							title: 'Укажите параметры вашего помещения'
						},
						{
							overtitle: 'Вопрос 2/2',
							img: '/source/girl_4.jpg',
							title: 'Выберите ваш подарок'
						},
						{
							overtitle: '',
							img: '/source/girl_4.jpg',
							title: "Получите расчёт<br>вашего заказа<br>и подарок"
						},
				],
				questions: {
					gift: 0,
					area: 50,
					lamps: 10,
					phone: ''
				},
				gifts: [
					{
						title: 'Купон 5000 руб',
						img: '/source/win_gift_1.jpg'
					},
					{
						title: 'Второй потолок',
						img: '/img/quiz/gifts/new/second.jpg'
					},
					{
						title: 'Светильники',
						img: '/img/quiz/gifts/new/lights.jpg'
					}
				]
			}
		})
	</script>
</html>
