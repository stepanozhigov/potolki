<template>
    <div>
        <article @click="toggleMode" class="ourArticle">
            <div class="ourArticle__gallery">
                <img v-for="(slide, index) in slides" v-if="index == activeSlide" v-bind:src="imgPath + slide" class="ourArticle__img active" alt="">
                <button @click="nextSlide" v-if="slides.length > 1" class="ourArticle__gallery-prev"></button>
                <button @click="nextSlide" v-if="slides.length > 1" class="ourArticle__gallery-next"></button>
                <!--<div class="ourArticle__dots">
                    <button class="ourArticle__dot active"></button>
                    <button class="ourArticle__dot"></button>
                    <button class="ourArticle__dot"></button>
                </div>-->
            </div>
            <div class="ourArticle__desc">
                <h3>{{ post.title }}</h3>
                <p v-if="mode == 'expanded'" v-html="post.text"></p>
            </div>
            <a v-if="post.title || device == 'mobile'" data-src="#popup_articles" class="ourArticle__more" href="javascript:void(0);">Подробнее</a>
        </article>
        <div v-if="mode == 'detail'" class="overlay overlay_active" @click="toggleMode"></div>
        <div v-if="mode == 'detail'" class="popup popup_active" id="popup_articles" style="">
            <img src="/img/gui/close.svg" alt="" class="popup__close js-close" @click="toggleMode">
            <section class="ourArticle ourArticle_popup">
                <div class="ourArticle__gallery">
                    <img v-for="(slide, index) in slides" v-if="index == activeSlide" v-bind:src="imgPath + slide" class="ourArticle__img active" alt="">
                    <button @click="nextSlide" v-if="slides.length > 1" class="ourArticle__gallery-prev"></button>
                    <button @click="nextSlide" v-if="slides.length > 1" class="ourArticle__gallery-next"></button>
                    <!--<div class="ourArticle__dots">
                        <button class="ourArticle__dot active">Заказать звонок</button>
                        <button class="ourArticle__dot">Заказать звонок</button>
                        <button class="ourArticle__dot">Заказать звонок</button>
                    </div>-->
                </div>
                <div class="ourArticle__desc">
                    <h3 v-if="post.title">{{ post.title }}</h3>
                    <p v-html="post.text"></p>
                </div>
            </section>
        </div>
    </div>
    
</template>

<script>
    export default {
        props: ['post'],
        data: function () {
            return {
                imgPath: '/storage/',
                activeSlide: 0,
                mode: 'list'
            }
        },
        methods: {
            nextSlide: function () {
                if (this.activeSlide >= this.slides.length - 1) {
                    this.activeSlide = 0;  
                } else {
                    this.activeSlide++;    
                }
            },
            toggleMode: function () {
                console.log(this.mode, this.device);
                if (this.device == 'desktop') {
                    console.log(0);
                    if (this.mode == 'list') {
                        this.mode = 'detail';
                    } else {
                        this.mode = 'list';
                    }    
                }                

                if (this.device == 'mobile') {
                    console.log(1);
                    if (this.mode == 'list') {
                        this.mode = 'expanded';
                    } else {
                        this.mode = 'list';
                    }
                    
                }
                 console.log(this.mode, this.device);
            }
        },
        computed: {
            device: function () {
                return $(document).width() > 640 ? 'desktop':'mobile';
            },
            slides: function () {
                let slides = [];

                slides.push(this.post.img);
                
                
                if (this.post.images) {
                    let images = JSON.parse(this.post.images);
                    slides = slides.concat(images);
                }

                return slides;
            }
        }
    }
</script>
