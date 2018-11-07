<template>
    <div class="main-offers">
        <section v-for="(offer, index) in offers" v-if="index == currentOfferIndex" class="main-offer js-offer-slider" :style="{ 'background-image': backgroundImage}">
            <div v-if="offer.type == 'form'" class="main-offer__inner container">
                <p class="text main-offer__overtitle">{{ offer.overtitle }}</p>
                <h1 class="title main-offer__title js-title"></h1>
                <p class="main-offer__subtitle">{{ offer.text }}</p>

                <form class="form main-offer__form mobile-hide" action="" id="offer-form">
                    <input v-model="name" v-on:focus="pauseSliding" v-on:focusout="initSliding" class="input form__input" type="text"  placeholder="Ваше имя">
                    <input v-model="phone" v-on:focus="pauseSliding" v-on:focusout="initSliding" class="input form__input" type="tel"  placeholder="Ваш телефон">
                    <button class="button form__button">Вызвать замерщика</button>
                    <p class="form__agreement subtext subtext_white">Оставляя контактную информацию, Вы соглашаетесь на обработку персональных данных</p>
                </form>
                <button data-src="#popup_callback" class="button main-offer__button mobile-only js-show">Вызвать замерщика</button>
            </div>
            <div v-if="offer.type == 'link'" class="container main-offer__social">
                <a target="_blank" class="button button_insta" :href="offer.link">Подписаться</a>
            </div>
        </section>
    </div>
</template>

<script>
    import typewriter from 'typewriter-effect/dist/core';

    export default {
        data: function () {
            return {
                currentOfferIndex: 0,
                offerTime: 20000,
                interval: 0,
                name: '',
                phone: ''
            }
        },
        computed: {
            currentOffer: function () {
                return this.offers[this.currentOfferIndex];
            },
            backgroundImage: function () {
                return `url(/storage/${this.currentOffer.background_img})`;
            }
        },
        methods: {
            nextSlide: function () {
                var nextOfferIndex = this.currentOfferIndex + 1;
                
                if (this.offers[nextOfferIndex]) {
                    this.currentOfferIndex = nextOfferIndex;
                } 
                else {
                    this.currentOfferIndex = 0;
                }

                return true;
            },
            initTypeWriter: function () {
                if (!this.currentOffer.title) return false;

                var titleString = this.currentOffer.title,
                    titleContainer = document.querySelector('.js-title'),
                    arTitles = titleString.split('|');
                
                new typewriter(titleContainer, {
                    strings: arTitles,
                    autoStart: true,
                    loop: true,
                    delay: 70
                });
            },
            initSliding: function () {
                this.interval = setInterval(this.nextSlide, this.offerTime);
            },
            pauseSliding: function () {
                clearInterval(this.interval);
            }
        },
        props: ['offers'],
        updated: function () {
            this.initTypeWriter();
        },
        mounted: function () {
            this.initTypeWriter();
            this.initSliding();
        }
    }
</script>