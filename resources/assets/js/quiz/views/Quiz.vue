<template>
    
    <div>
        <header class="header" :class="{ mob: step > 0 }">
            <div class="header__wrapper">
                <div class="header__items">
                    <div class="header__items_item logo">
                        <a :href="'/'+cityLink" class="logo_link">
                            <img src="/img/quiz/logo.svg" alt="logo">
                        </a>
                        <p class="logo_name">Фабрика потолков</p>
                    </div>
                    
                    <div class="header__items_item contact">
                        <a :href="'tel:'+phoneSite" class="phone">
                            <svg class="icon" width="10px" height="19px">
                                <use xlink:href="#phone"></use>
                            </svg>
                            {{phoneSite}}
                        </a>
                    </div>
                </div>
            </div>    
        </header>

        <div v-if="step == 0">
            
            <section class="hero">
                <div class="hero__wrapper">
                    <div class="hero__items">
                        <div class="hero__items_item">
                            <div>
                                <p class="hero_intro">Пройдите тест за 30 секунд</p>
                                <h1 class="hero_title">Получите расчёт натяжного потолка <br><span class="mark">и подарок</span></h1>
                            </div>
                            <div>
                                <button class="btn btn-pulse" @click="startQuiz">Получить расчёт и подарок</button>
                                <a :href="'/'+cityLink" class="hero_link">Перейти на сайт</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <section class="quest" v-if="step >= 1">
            <div class="quest__wrapper">
                <div class="quest__items">
                    <svg class="icon close" width="20px" height="20px" @click="step = 0">
                        <use xlink:href="#close"></use>
                    </svg>
                    <div class="quest__items_item quest_content" v-if="step == 1">
                        <div class="quest_img">
                            <img src="/img/quiz/234.jpg">
                        </div>
                        <div class="quest__titles">
                            <p class="quest_intro">Вопрос 1/3</p>
                            <p class="quest_title">Укажите параметры вашего помещения</p>
                        </div>
                        
                        <div class="quest__list quest__range">
                            <div class="quest__range_wrapper">
                                <p class="quest__range_title">Площадь помещения</p>
                                <div class="quest__range_item">
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
                            </div>
                            <div class="quest__range_wrapper">
                                <p class="quest__range_title">Количество светильников</p>
                                <div class="quest__range_item">
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
                            </div>
                            <div class="quest__control">
                                <button class="btn btn_next btn-pulse"  @click="step++">Далее</button>
                            </div>
                        </div>
                    </div>

                    <div class="quest__items_item quest_content" v-if="step == 2">
                        <div class="quest_img">
                            <img src="/img/quiz/121.jpg">
                        </div>
                        <div class="quest__titles">
                            <p class="quest_intro">Вопрос 2/3</p>
                            <p class="quest_title">Когда планируете делать потолок?</p>
                        </div>
                        <div class="quest__list quest__range">
                            <ul>
                                <li>
                                    <label for="opt2-1" class="radio">
                                        <input type="radio" v-model="questions.times" id="opt2-1" class="hidden" value="В ближайшие дни"/>
                                        <span class="label"></span>В ближайшие дни
                                    </label>
                                </li>
                                <li>
                                    <label for="opt2-2" class="radio">
                                        <input type="radio" v-model="questions.times" id="opt2-2" class="hidden" value="В течение месяца"/>
                                        <span class="label"></span>В течение месяца
                                    </label>
                                </li>
                                <li>
                                    <label for="opt2-3" class="radio">
                                        <input type="radio" v-model="questions.times" id="opt2-3" class="hidden" value="Не знаю"/>
                                        <span class="label"></span>Не знаю
                                    </label>
                                </li>
                            </ul>
                            <div class="quest__control">
                                <button class="btn btn_prev"  @click="step--">Назад</button>
                                <button class="btn btn_next btn-pulse" @click="step++">Далее</button>
                            </div>
                        </div>
                    </div>

                    <div class="quest__items_item quest_content" v-if="step == 3">
                        <div class="quest_img">
                            <img src="/img/quiz/132.jpg">
                        </div>
                        <div class="quest__titles">
                            <p class="quest_intro">Вопрос 3/3</p>
                            <p class="quest_title">Выберите подарок к натяжному потолку</p>
                        </div>
                        <div class="quest__list quest__range">
                            <div class="gifts" v-if="size_md == false">
                                <button @click.prevent="nextGift" class="gifts_arrow gifts_prev">
                                <svg class="icon">
                                    <use xlink:href="#arrow-left"></use>
                                </svg>
                                </button>
                                <button @click.prevent="nextGift" class="gifts_arrow gifts_next">
                                    <svg class="icon">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </button>
                                <transition name="slide-fade">
                                    <img :src="currentGift.img" 
                                        v-touch:swipe.left="nextGift" 
                                        v-touch:swipe.right="prevGift" 
                                        alt="" class="gifts_img">
                                </transition>
                                <div class="gifts__paginated">
                                    <span v-for="(gift, id) in gifts" :for="id" class="gifts__paginated_dot" :class="{active: questions.gift === id}"></span>
                                </div>
                            </div>
                            <div class="gifts_md" v-if="size_md == true">
                                <label v-for="(gift, id) in gifts" :for="id"  class="radio_img">
                                    <input type="radio" v-model="questions.gift" name="radio" :id="id"  :value="id" class="hidden"/>
                                    <figure class="hover_img">
                                        <img :src="gift.img" :alt="gift.title" class="gifts_img">
                                    </figure>
                                </label>
                            </div>
                            <div class="quest__control">
                                <button class="btn btn_prev"  @click="step--">Назад</button>
                                <button class="btn btn_next btn-pulse"  @click="step++">Далее</button>
                            </div>
                        </div>
                    </div>

                    
                    <div class="quest__items_item quest_content" v-if="step == 4">
                        <div class="quest_img">
                            <img src="/img/quiz/130.jpg">
                        </div>
                        <div class="quest__titles">
                            <p class="quest_intro">Расчет</p>
                            <p class="quest_title">Получите расчёт натяжного потолка и подарок</p>
                        </div>
                        <div class="quest__list quest__range">
                            <p class="quest_info">Введите номер телефона и получите расчёт на WhatsApp и СМС в течении <span class="mark">5 минут.</span></p>
                            <masked-input 
                                type="tel" 
                                autocomplete="off" 
                                required
                                v-model="questions.phoneclear"
                                placeholder="Введите ваш номер*"
                                :mask="{
                                    pattern: '\+7 (V11) 111-11-11',
                                    formatCharacters: {
                                        'V': {
                                            validate: char => /[9]/.test(char)
                                        }, 
                                    }, 
                                }"
                                @input="questions.phone = arguments[1]"
                                class="input"
                            />
                            <div class="quest__control quest__control_finish">
                                <button class="btn btn_send btn-pulse" :disabled="!isPhoneValid"  @click="submitQuiz">Получить расчёт и подарок</button>
                                <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на <span>обработку персональных данных</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="quest__items_item quest_content finish" v-if="step == 5">
                        <p class="quest_intro finish">СПАСИБО!</p>
                        <p class="quest_title">Ваша заявка принята</p>
                        <div class="quest__control">
                            <a :href="'/'+cityLink" class="btn btn_next btn-pulse">Перейти на сайт</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="inf">
            <div class="inf__wrapper">
                <div class="inf__items">
                    <div class="inf__items_item">
                        <svg class="icon" width="116px" height="80px">
                            <use xlink:href="#inf-1"></use>
                        </svg>
                        <p class="inf_text">Выезд мастера бесплатно!</p>
                    </div>
                    <div class="inf__items_item">
                        <svg class="icon" width="81px" height="81px">
                            <use xlink:href="#inf-2"></use>
                        </svg>
                        <p class="inf_text">Договор на дому</p>
                    </div>
                    <div class="inf__items_item">
                        <svg class="icon" width="82px" height="82px">
                            <use xlink:href="#inf-3"></use>
                        </svg>
                        <p class="inf_text">Сертификаты</p>
                    </div>
                    <div class="inf__items_item">
                        <svg class="icon" width="69px" height="81px">
                            <use xlink:href="#inf-4"></use>
                        </svg>
                        <p class="inf_text">Гарантия 5 лет</p>
                    </div>
                </div>
            </div>
        </section>

        <modal v-if="formError" @close="openFormError">
            <div slot="content">
                <p class="modal-title">Вы уже отправляли заявку!</p>
                <p class="modal-intro">В ближайшее время мы свяжется с вами.</p>
            </div>
        </modal>

    </div>

</template>
<script>
    import MaskedInput from 'vue-masked-input'
    import axios from 'axios'
    import VueSlider from 'vue-slider-component'
    import Vue2TouchEvents from 'vue2-touch-events'
    import VueCookie from 'vue-cookie'
    Vue.use(VueCookie);
    Vue.component('modal', require('../components/ModalForm.vue').default)
    Vue.use(Vue2TouchEvents)
    const pattern = /^[0-9]+$/;

    export default {
        data: function () {
            return {
                step: 0,
                size_md: false,
                formError: false,
                phoneSite:  window.city.phone,
                cityLink: window.city.code,
                questions: {
					times: '',
					phone: '',
                    phoneclear: '',
                    gift: 1,
                    area: 50,
					lamps: 10
				},
                gifts: [
					{
						title: 'Второй потолок',
						img: '/img/quiz/gifts/new/gift-2.jpg'
					},
                    {
						title: 'Купон 5000 руб',
						img: '/img/quiz/gifts/new/gift-1.jpg'
					},
					{
						title: 'Светильники',
						img: '/img/quiz/gifts/new/gift-3.jpg'
					}
				]
            }
        },
        computed: {
            isPhoneValid() {
                return pattern.test(this.questions.phone)
            },
            currentGift: function () {
				return this.gifts[this.questions.gift];
			}
        },
        created() {
            window.addEventListener('resize', this.handleResize)
            this.handleResize();
        },
        destroyed() {
            window.removeEventListener('resize', this.handleResize)
        },
        methods: {
            lengthTooltip: function (value) {
				return value + ' '; 
			},
            openFormError: function () {
                this.formError = !this.formError
            },
            startQuiz: function () {
                if(Vue.cookie.get('form_send')){
                    this.openFormError()
                }else{
                    this.step = 1
                }
            },
            submitQuiz (e){
                e.preventDefault();

                if(this.questions.times === ''){
                    this.questions.times = 'Не знаю'
                }

                axios.post('/forms/quiz2', {
                    phone: '8'+this.questions.phone,
                    city: window.city.bx_code,
                    area: this.questions.area,
                    lamps: this.questions.lamps,
                    times: this.questions.times,
                    gift: this.gifts[this.questions.gift].title
                }).then(response => (
                    this.step = 5,
                    Vue.cookie.set('form_send', true, 1),
                    window.yaCounter40202559.reachGoal('quiz'),
                    fbq('track', 'Lead'),
                    pixel.Add(32517465),
                    ga.getAll()[0].send('event', 'quiz', 'send'),
                    setTimeout(() => {
                        window.location.href = '/'+this.cityLink
                    }, 4000)
                ))
                
            },
            nextGift: function () {
				let count = this.gifts.length,
					next = this.questions.gift + 1;

				if (next > count - 1) {
					next = 0;
				}
				this.questions.gift = next;
			},
            prevGift: function () {
				let count = this.gifts.length,
					prev = this.questions.gift - 1;
                    
				if (prev < 0) {
					prev = count - 1;
				}
				this.questions.gift = prev;
			},
            handleResize() {
                if(window.innerWidth > 992){
                    this.size_md = true
                }else{
                    this.size_md = false
                }
                
            }
        },
        components: { 
            MaskedInput,
            VueSlider
        }
    }
</script>
