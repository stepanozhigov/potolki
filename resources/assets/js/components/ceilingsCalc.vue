<template>
     <div class="ceilingCalculator">
        <h2 class="ceilingCalculator__title">Калькулятор</h2>
        <p class="ceilingCalculator__desc">Рассчитайте стоимость натяжного потолка онлайн. Матовые, сатиновые, глянцевые — все по одной цене! Выберите параметры вашего помещения, перемещая&nbsp;ползунки.</p>
        <div class="ceilingCalculator__item">
            <p class="ceilingCalculator__item-name">
                Площадь помещения, м<sup>2</sup>
            </p>
            <vue-slider
                class="slider"
                tooltip="always"
                :min="0"
                :max="150"
                v-model="area"
            >
            </vue-slider>
        </div>
        <div class="ceilingCalculator__item">
            <p class="ceilingCalculator__item-name">
                Трубы
            </p>
            <vue-slider
                class="slider"
                tooltip="always"
                :min="0"
                :max="30"
                v-model="tubes"
            >
            </vue-slider>
        </div>
        <div class="ceilingCalculator__item">
            <p class="ceilingCalculator__item-name">
                Углы
            </p>
            <vue-slider
                class="slider"
                tooltip="always"
                :min="4"
                :max="30"
                v-model="angles"
            >
            </vue-slider>
        </div>
        <div class="ceilingCalculator__item">
            <p class="ceilingCalculator__item-name">
                Светильники
            </p>
            <vue-slider
                class="slider"
                tooltip="always"
                :min="0"
                :max="30"
                v-model="lamps"
            >
            </vue-slider>
        </div>
        <p class="ceilingCalculator__subtitle">Для точного расчёта необходимо произвести замер! <br>Минимальный заказ {{priceMin[city]}} ₽</p>
        <p class="ceilingCalculator__total"><span class="js-calc-price">{{totlaPrice}}</span> ₽</p>
        <p class="ceilingCalculator__measure">с установкой</p>
        <a :href="link" class="ceilingCalculator__callback">Вызвать замерщика</a>
    </div>
</template>

<script>
import VueSlider from 'vue-slider-component'

export default {
    data: function () {
        return {
            area: 1,
            tubes: 0,
            angles: 4,
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
            },
            priceTubes: 200,
            priceAngles: 100
        }
    },
    computed: {
        totlaPrice() {
            const city = window.city.code ? window.city.code.toString().replace(/[\-\/]/g,'_') : 'moskva'
            const priceA  = this.priceArea[city] ? this.priceArea[city] : 350
            const priceL  = this.priceLamp[city] ? this.priceLamp[city] : 250
            
            return this.area*priceA + this.lamps*priceL + this.tubes*this.priceTubes + (this.angles*this.priceAngles - this.priceAngles*4)
        },
        link() {
            return `https://potolki-ts.ru/${window.city.code}/forms/measure`
        }
    },
    components: { 
        VueSlider
    }
}
</script>
