<template>
    
    <div>
        <transition :duration="{ enter: 500, leave: 300 }" enter-active-class="animated zoomIn" leave-active-class="animated zoomOut" mode="out-in">
            <header class="header" :class="{ mob: step > 0 }">
                <div class="header__wrapper">
                    <div class="header__items">
                        <a href="/" class="header__items_item logo">
                            <img src="/img/quiz/logo.svg" alt="logo">
                            <p class="logo_name">Фабрика потолков</p>
                        </a>
                        <div class="header__items_item contact">
                            <a href="" class="phone">
                                <svg class="icon" width="10px" height="19px">
                                    <use xlink:href="#phone"></use>
                                </svg>
                                8 800 333-22-68
                            </a>
                            <div v-if="step == 0" class="callback" @click="openCallModal">Заказать звонок</div>
                        </div>
                    </div>
                </div>    
            </header>
        </transition>
        <transition :duration="{ enter: 500, leave: 300 }" enter-active-class="animated zoomIn" leave-active-class="animated zoomOut" mode="out-in">
            <div v-if="step == 0">
                
                <section class="hero">
                    <div class="hero__wrapper">
                        <div class="hero__items">
                            <div class="hero__items_item">
                                <p class="hero_intro">Пройдите тест за 30 секунд</p>
                                <h1 class="hero_title">Получите расчёт натяжного потолка и <span class="mark">подарок</span></h1>
                                <button class="btn btn-pulse" @click="startQuiz">Получить расчёт</button>
                                <a href="/" class="hero_link">Перейти на сайт</a>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </transition>
        <transition :duration="{ enter: 500, leave: 300 }" enter-active-class="animated zoomIn" leave-active-class="animated zoomOut" mode="out-in">
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
                                <p class="quest_title">Укажите площадь и количество светильников</p>
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
                                            <input type="radio" v-model="questions.times" id="opt2-2" class="hidden" value="В течении месяца"/>
                                            <span class="label"></span>В течении месяца
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
                                        <img @click="nextGift"
                                         :src="currentGift.img" 
                                         v-touch:swipe.left="nextGift" 
                                         v-touch:swipe.right="prevGift" 
                                         alt="" class="gifts_img">
                                    </transition>
                                    <svg width="70" height="50" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" id="icon-swipe">
                                        <path d="m57,7.5625l-6.45,6.5625l-1.51875,-1.5375l3.8625,-3.9375l-10.89375,0l0,-2.175l10.89375,0l-3.88125,-3.9375l1.51875,-1.5375l6.46875,6.5625z" fill="black" id="right"/>
                                        <path d="m28,8.65l-10.89375,0l3.8625,3.9375l-1.51875,1.5375l-6.45,-6.5625l6.46875,-6.5625l1.51875,1.5375l-3.88125,3.9375l10.89375,0l0,2.175z" fill="black" id="left"/>
                                        <path d="m52.4074,23.40948l-9.18666,-5.42519a4.19548,4.19548 0 0 0 -2.40517,-0.79569a4.2859,4.2859 0 0 0 -3.11044,1.3563l0,-9.04198a4.44866,4.44866 0 0 0 -1.28396,-3.14661a4.30398,4.30398 0 0 0 -3.12853,-1.3563l0,0a4.41249,4.41249 0 0 0 -4.35824,4.44866l0,20.14554l-1.24779,-1.26588a8.49946,8.49946 0 0 0 -6.07621,-2.56792a8.58988,8.58988 0 0 0 -3.7253,0.94037a2.27858,2.27858 0 0 0 -1.24779,1.66372a2.38708,2.38708 0 0 0 0.66911,1.95307l13.90657,14.15975a13.72573,13.72573 0 0 0 9.60259,3.92422a13.97891,13.97891 0 0 0 13.83423,-14.08741l0,-7.08892a4.37632,4.37632 0 0 0 -2.24241,-3.81572l0,-0.00001zm0,10.85038a11.68224,11.68224 0 0 1 -11.59182,11.845l0,0a11.41098,11.41098 0 0 1 -7.97503,-3.25511l-13.96082,-14.15975a6.0943,6.0943 0 0 1 2.7126,-0.63294l0,0a6.18472,6.18472 0 0 1 4.46674,1.89882l2.76685,2.80301a0.94037,0.94037 0 0 0 0.65102,0.28934l0.3436,0a2.13391,2.13391 0 0 0 1.3563,-1.98924l0,-21.61034a2.11582,2.11582 0 0 1 2.09774,-2.15199l0,0a2.13391,2.13391 0 0 1 2.11582,2.15199l0,12.49602a1.08504,1.08504 0 0 0 0.70527,1.0127l0.36168,0a1.04887,1.04887 0 0 0 0.81378,-0.39785l1.8084,-2.35092a2.09774,2.09774 0 0 1 1.73606,-0.74144a2.0254,2.0254 0 0 1 1.22971,0.41593l9.25899,5.42519a2.13391,2.13391 0 0 1 1.06695,1.8084l0.03617,7.14317l-0.00001,0.00001z" fill="black" id="hand"/>
                                    </svg>
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
                                <p class="quest_info">Введите номер телефона и получите расчёт на WhatsApp и СМС <span class="mark">5 минут.</span></p>
                                <masked-input 
                                    type="tel" 
                                    autocomplete="off" 
                                    required
                                    v-model="questions.phoneclear"
                                    placeholder="Введите ваш номер*"
                                    mask="\+\7 (111) 111-11-11"
                                    @input="questions.phone = arguments[1]"
                                    class="input"
                                />
                                <div class="quest__control quest__control_finish">
                                    <button class="btn btn_send btn-pulse" :disabled="!isPhoneValid"  @click="submitQuiz">Получить расчёт</button>
                                    <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на <span>обработку персональных данных</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="quest__items_item quest_content finish" v-if="step == 5">
                            <p class="quest_intro finish">СПАСИБО!</p>
                            <p class="quest_title">Ваша заявка принята</p>
                            <div class="quest__control">
                                <a href="/" class="btn btn_next btn-pulse">Перейти на сайт</a>
                                <button class="btn btn_prev"  @click="step = 0">Закрыть окно</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </transition>
        <transition :duration="{ enter: 500, leave: 300 }" enter-active-class="animated zoomIn" leave-active-class="animated zoomOut" mode="out-in">
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
                            <p class="inf_text">Гарантия 15 лет</p>
                        </div>
                    </div>
                </div>
            </section>
        </transition>

        <modal v-if="callModal" @close="closeCallModal">
            <div slot="content" v-if="sendCall == false">
                <p class="modal-title">Заказать звонок</p>
                <p class="modal-intro">Оставьте ваши данные и специалист свяжется с вами <span class="modal-marck">в течение 5 минут</span></p>
                <form class="form" @submit="submitCall">
                    <input type="text" v-model="questions.name" class="input input_name" placeholder="Введите ваше имя"/>
                    <div>
                        <masked-input 
                            type="tel" 
                            autocomplete="off" 
                            required
                            v-model="questions.phoneclear"
                            placeholder="Введите ваш номер*"
                            mask="\+\7 (111) 111-11-11"
                            @input="questions.phone = arguments[1]"
                            class="input"
                            />
                    </div>
                    <button :disabled="!isPhoneValid" class="btn">Заказать звонок</button>
                </form>
                <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
            </div>
            <div slot="content" v-if="sendCall == true">
                <p class="modal-title">Спасибо, <br> заявка отправлена</p>
                <p class="modal-intro">Наш специалист свяжется с вами <span class="modal-marck">в течение 5 минут</span></p>
            </div>
        </modal>

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
                sendCall: false,
                size_md: false,
                callModal: false,
                formError: false,
                questions: {
					times: 'В течении месяца',
					phone: '',
                    phoneclear: '',
                    gift: 0,
                    area: 50,
					lamps: 10,
                    name: ''
				},
                gifts: [
					{
						title: 'Купон 5000 руб',
						img: '/img/quiz/gifts/new/gift-1.jpg'
					},
					{
						title: 'Второй потолок',
						img: '/img/quiz/gifts/new/gift-2.jpg'
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
            openCallModal: function () {
                if(Vue.cookie.get('form_send')){
                    this.openFormError()
                }else{
                   this.callModal = true
                }
            },
            closeCallModal: function () {
                this.callModal = false
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
                    ga.getAll()[0].send('event', 'quiz', 'send')
                ))
                
            },
            submitCall (e){
                e.preventDefault();

                axios.post('/forms/add-lead', {
                    phone: '8'+this.questions.phone,
                    city: window.city.bx_code,
                    name: this.questions.name
                }).then(response => (
                    this.sendCall = true,
                    Vue.cookie.set('form_send', true, 1),
                    window.yaCounter40202559.reachGoal('form-sub'),
                    ga.getAll()[0].send('event', 'forms', 'sub')
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
