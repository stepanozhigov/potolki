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
                :min="4"
                :max="30"
                v-model="lamps"
            >
            </vue-slider>
        </div>
        <p class="ceilingCalculator__subtitle">Для точного расчёта необходимо произвести замер!</p>
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
                sankt_peterburg: 350,
                ussuriysk: 400,
                vladivostok: 400,
                habarovsk: 400,
                blagoveschensk: 400,
                moskva: 450,
                sochi: 350,
                artem: 350,
                krasnoyarsk: 350,
                novosibirsk: 350,
                komsomolsk: 350
            },
            priceLamp: {
                krasnodar: 250,
                dolgoprudnyj: 250,
                nahodka: 300,
                sankt_peterburg: 300,
                ussuriysk: 300,
                vladivostok: 300,
                habarovsk: 300,
                blagoveschensk: 250,
                moskva: 500,
                sochi: 250,
                artem: 250,
                krasnoyarsk: 250,
                novosibirsk: 250,
                komsomolsk: 250
            },
            priceTubes: 200,
            priceAngles: 100
        }
    },
    computed: {
        totlaPrice() {
            const city = window.city.code ? window.city.code.toString().replace(/[\-\/]/g,'_') : 'moskva'

            return this.area*this.priceArea[city] + this.lamps*this.priceLamp[city] + this.tubes*this.priceTubes + (this.angles*this.priceAngles - this.priceAngles*4)
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
