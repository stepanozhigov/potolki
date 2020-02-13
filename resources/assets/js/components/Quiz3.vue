<template>
	<section class="quiz">
				<header v-if="step == 0" class="quiz__header">
					<img src="/img/quiz/logo.svg" class="logo">
				</header>

				<section v-if="step == 0" class="quiz__preview" >
					<p class="overtitle">
						пройдите тест за 30 секунд
					</p>
					<h1 class="h1">
						Получите расчёт кухни&nbsp;или шкафа-купе <span class="color_red">и&nbsp;подарок</span>
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
					<div class="quiz__radios">
						<label class="radio quiz__radio">
							<input v-model="questions.type" class="radio__input" type="radio" name="" value="Кухня">
							<span class="radio__mark"></span>
							<span class="radio__label">Кухня</span>
						</label>
						<label class="radio quiz__radio">
							<input v-model="questions.type" class="radio__input" type="radio" name="" value="Шкаф-купе">
							<span class="radio__mark"></span>
							<span class="radio__label">Шкаф-купе</span>
						</label>
						<label class="radio quiz__radio">
							<input v-model="questions.type" class="radio__input" type="radio" name="" value="Другая мебель">
							<span class="radio__mark"></span>
							<span class="radio__label">Другая мебель</span>
						</label>
					</div>
					<button @click="step = 2" class="button">Далее</button>
				</section>
				<section v-if="step == 2" class="quiz__question">
					<div class="quiz__range">
						<vue-slider
					    class="slider"
						tooltip="always"
					    :min="1"
					    :max="15"
					    :step="1"
					    v-model="questions.length"
						:tooltip-formatter="lengthTooltip"
						>
					  </vue-slider>
					</div>
					<button @click="step = 3" class="button">Далее</button>
				</section>
				<section v-if="step == 3" class="quiz__question">
					<div class="quiz__radios">
						<label class="radio quiz__radio">
							<input v-model="questions.class" class="radio__input" type="radio" name="" value="Экономный">
							<span class="radio__mark"></span>
							<span class="radio__label">Экономный</span>
						</label>
						<label class="radio quiz__radio">
							<input v-model="questions.class" class="radio__input" type="radio" name="" value="Средний">
							<span class="radio__mark"></span>
							<span class="radio__label">Средний</span>
						</label>
						<label class="radio quiz__radio">
							<input v-model="questions.class" class="radio__input" type="radio" name="" value="Премиум">
							<span class="radio__mark"></span>
							<span class="radio__label">Премиум</span>
						</label>
					</div>
					<button @click="step = 4" class="button">Далее</button>
				</section>
				<section v-if="step == 4" class="quiz__question">
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
					<button @click="step = 5" class="button">Далее</button>
				</section>
				<section v-if="step == 5" class="quiz__question">
					<form class="form quiz__form">
						<p class="intro form__intro">
							Введите номер телефона и получите расчёт на WhatsApp и СМС в течении <span class="intro_red">5&nbspминут.</span>
						</p>
						<the-mask :masked="true" type="tel" v-model="questions.phone" class="input form__input" :mask="'+# (###) ###-##-##'"></the-mask>
						<button :disabled="!validated" @click.prevent="submit" class="button form__button">Получить расчёт и подарок</button>
					</form>
				</section>
				<section v-if="step == 6" class="quiz__result">
					<p class="overtitle overtitle_gray">Спасибо!</p>
					<h2 class="h2">Ваша заявка принята</h2>
					<a href="https://kuhni-ts.ru/" class="button">Перейти на сайт</a>
					<button @click="step = 0" class="button button_gray">Закрыть окно</button>
				</section>
			</section>
</template>