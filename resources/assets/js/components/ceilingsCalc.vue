<template>
    <div class="ceilingCalculator">
        <h2 class="ceilingCalculator__title">Калькулятор</h2>
        <p class="ceilingCalculator__desc">Рассчитайте стоимость натяжного потолка онлайн. Матовые, сатиновые, глянцевые — все по одной цене! Выберите параметры вашего помещения, перемещая&nbsp;ползунки.</p>
        <div class="ceilingCalculator__item">
            <p class="ceilingCalculator__item-name">
                Площадь помещения, м<sup>2</sup>
            </p>
            <input value="1" name="area" data-min="0" data-from="1" data-max="150" class="range" type="text">
        </div>
        <div class="ceilingCalculator__item">
            <p class="ceilingCalculator__item-name">
                Количество труб
            </p>
            <input name="tubes" data-min="0"  data-max="10" class="range" type="text">
        </div>
        <div class="ceilingCalculator__item">
            <p class="ceilingCalculator__item-name">
                Количество углов
            </p>
            <input v-model="angles" name="angles" data-min="4" data-from="4" data-max="30" class="range" type="text">
        </div>
        <div class="ceilingCalculator__item">
            <p class="ceilingCalculator__item-name">
                Количество светильников
            </p>
            <input name="lamps" data-min="0" data-max="30" class="range" type="text">
        </div>
        <p class="ceilingCalculator__subtitle">Для точного расчёта необходимо произвести замер!</p>
        <p class="ceilingCalculator__total"><span class="js-calc-price">350</span> ₽</p>
        <p class="ceilingCalculator__measure">с установкой</p>
        <button data-src="#popup_callback" class="ceilingCalculator__callback js-show">Вызвать замерщика</button>
    </div>
</template>

<script type="text/javascript">
    $(document).on('input', '.range', function (e) {
        var area = $('[name=area]').val(),
            tubes = $('[name=tubes]').val(),
            angles = $('[name=angles]').val(),
            lamps = $('[name=lamps]').val(),
            price = 0;

        price = angles * 100 + tubes * 200 + lamps * 250 + area * 350 - 400;

        $('.js-calc-price').html(price);
    })
    export default {
        data: function () {
            return {
                area: 1,
                tubes: 0,
                angles: 4,
                lamps: 0
            }
        },
        computed: {
            price: function () {
                return this.angles * 100 + this.tubes * 200 + this.lamps * 250 + this.area * 350;
            }
        }
    }
</script>
