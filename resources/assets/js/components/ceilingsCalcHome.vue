<template>
    <section class="wrapper calc section">
        <h2 class="title-dec">Калькулятор</h2>
        <p class="calc__item calc__item-intro">
            Расчёт стоимости натяжного потолка <span class="b-color_red">по акции.</span>
            Для точного расчёта необходим замер! Минимальный заказ {{minPrice}} ₽
        </p>
        <div class="calc__item">
            <p class="calc__item-name">Площадь помещения</p>
            <vue-slider
                class="slider"
                tooltip="always"
                :min="0"
                :max="150"
                v-model="area"
            >
            </vue-slider>
        </div>
        <div class="calc__item">
            <p class="calc__item-name">Количество светильников</p>
            <vue-slider
                class="slider"
                tooltip="always"
                :min="0"
                :max="30"
                v-model="lamps"
            >
            </vue-slider>
        </div>
        <div class="calc__item">
            <p class="calc__item-name">Цена с установкой</p>
            <p class="calc__total"><span>{{totlaPrice}}</span> <span class="rouble">8</span></p>
        </div>
        <a :href="link" class="calc__callback buttonN buttonN-red btn-4">Вызвать замерщика</a>
    </section>
</template>

<script>

import VueSlider from 'vue-slider-component'

export default {
    data: function () {
        return {
            area: 1,
            lamps: 0,
            priceArea: {
                krasnodar: 270,
                dolgoprudnyj: 450,
                nahodka: 450,
                sankt_peterburg: 450,
                ussuriysk: 400,
                vladivostok: 400,
                habarovsk: 400,
                blagoveschensk: 400,
                moskva: 450,
                sochi: 350,
                artem: 400,
                krasnoyarsk: 350,
                novosibirsk: 350,
                komsomolsk: 400
            },
            priceLamp: {
                krasnodar: 250,
                dolgoprudnyj: 250,
                nahodka: 300,
                sankt_peterburg: 350,
                ussuriysk: 300,
                vladivostok: 300,
                habarovsk: 300,
                blagoveschensk: 300,
                moskva: 500,
                sochi: 250,
                artem: 300,
                krasnoyarsk: 250,
                novosibirsk: 300,
                komsomolsk: 300
            },
            priceMin: {
                krasnodar: '5 000',
                dolgoprudnyj: '7 000',
                nahodka: '4 000',
                sankt_peterburg: '7 000',
                ussuriysk: '3 000',
                vladivostok: '4 000',
                habarovsk: '4 000',
                blagoveschensk: '4 000',
                moskva: '7 000',
                sochi: '6 000',
                artem: '4 000',
                krasnoyarsk: '5 000',
                novosibirsk: '5 000',
                komsomolsk: '4 000'
            }
        }
    },
    computed: {
        totlaPrice() {
            const city = window.city.code ? window.city.code.toString().replace(/[\-\/]/g,'_') : 'moskva'
            const priceA  = this.priceArea[city] ?  this.priceArea[city] : 350
            const priceL  = this.priceLamp[city] ?  this.priceLamp[city] : 250
             
            return this.area*priceA + this.lamps*priceL
        },
        link() {
            return `https://potolki-ts.ru/${window.city.code}/forms/measure`
        },
        minPrice() {
            const city = window.city.code ? window.city.code.toString().replace(/[\-\/]/g,'_') : 'moskva'
            const minPrice = this.priceMin[city] ? this.priceMin[city] : '4 000'
            
            return minPrice
        }
    },
    components: { 
        VueSlider
    }
}
</script>
