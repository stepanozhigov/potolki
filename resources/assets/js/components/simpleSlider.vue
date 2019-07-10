<template>
    <div class="simpleSlider">
        <button @click="prev" type="button" class="simpleSlider__prev" name="button">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
        </button>
        <div class="simpleSlider__content">
            <img :src="slide" alt="">
        </div>
        <button @click="next" type="button" class="simpleSlider__next" name="button">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
        </button>
    </div>
</template>

<script type="text/javascript">
    export default {
        data: function () {
            return {
                active: 0,
                slides: [
                    '/img/ceilings/photoprint.jpg',
                    'http://potolki-ts.ru/upload/iblock/2a9/2a9c66b96e9dd50c5e8e796ee71f5ed6.jpg',
                    'http://potolki-ts.ru/upload/iblock/670/6701a4d200d73187256a3baccecd131d.jpg',
                    'http://potolki-ts.ru/upload/iblock/13f/13f9c3f9cf93eecf35edf2d2594fbc2e.jpg',
                    'http://potolki-ts.ru/upload/iblock/3a6/3a6aafacc9e67346adad492bc5aa9b19.jpg'
                ]
            };
        },
        computed: {
            slide: function () {
                return this.slides[this.active];
            }
        },
        methods: {
            next () {
                this.active++;
                if (this.active >= this.slides.length) {
                    this.active = 0;
                }
            }, 
            prev () {
                this.active--;
                if (this.active < 0) {
                    this.active = this.slides.length - 1;
                }
            }
        }
    }
</script>
