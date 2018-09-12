<template>
    
    <div class="calculator__inner">
        <div class="calculator__types">
            <label class="radio">
                <input class="radio__input"  type="radio" name="type" value="type-1" v-model="type">
                <img v-if="type == 'type-1'" class="calculator__type" src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueWindowsCalc/balcony_red.png" alt="">
                <img v-else class="calculator__type" src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueWindowsCalc/balcony.png" alt="">                                
            </label>
            <label class="radio">
                <input class="radio__input"  type="radio" name="type" value="simple" v-model="type">
                <img v-if="type == 'simple'" class="calculator__type" src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueWindowsCalc/balcony_red.png" alt="">
                <img v-else class="calculator__type" src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueWindowsCalc/balcony.png" alt="">   
            </label>
            <label class="radio">
                <input class="radio__input" type="radio"  name="type" value="simple2" v-model="type">
                <img v-if="type == 'simple2'" class="calculator__type" src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueWindowsCalc/balcony_red.png" alt="">
                <img v-else class="calculator__type" src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueWindowsCalc/balcony.png" alt="">   
            </label>
        </div>
        <div v-if="type == 'type-1'" class="calculator__content">
            <div class="calculator__area">
                <img src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueWindowsCalc/simple_big.png" alt="">
                <input type="number" v-model.number="arrWidth[0]" class="input" placeholder="Ширина 1" name="width[]">
                <input type="number" v-model.number="arrWidth[1]" class="input" placeholder="Ширина 2" name="width[]">
                <input type="number" v-model.number="arrHeight[0]" class="input" placeholder="Высота 1" name="height[]">
                <input type="number" v-model.number="arrHeight[1]" class="input" placeholder="Высота 2" name="height[]">
            </div>
            <div class="calculator__controls">
                <label class="radio">
                    <input name="install" type="radio" v-model="install" value=500 class="radio__input">
                    <span class="radio__mark"></span>
                    С установкой
                </label>
                <label class="radio">
                    <input name="install" type="radio" v-model="install" value=0 checked class="radio__input">
                    <span class="radio__mark"></span>
                    Без установки
                </label>
            </div>
            <form action="" class="form calculator__result">
                Расчетная цена
                <span>{{ summ }} Р</span>
                <input type="text" placeholder="Введите ваше имя">
                <input type="tel">
                <button class="button">Заказать</button>
                <p>Внимание! Стоимость является примерной. Более точная оценка требует выезда замерщика</p>
            </form>
        </div>
        <div v-if="type == 'simple'" class="calculator__content">
            <div class="calculator__area">
                <img src="http://okna-ts.ru/local/templates/windows/source/builds/static/img/assets/catalogueWindowsCalc/simple_big.png" alt="">
                <input type="number" v-model.number="arrWidth[0]" class="input" placeholder="Ширина" name="width">
                <input type="number" v-model.number="arrHeight[0]" class="input" placeholder="Высота" name="height">
            </div>
            <div class="calculator__controls">
                <label class="radio">
                    <input name="install" type="radio" v-model.number="install" value=500 class="radio__input">
                    <span class="radio__mark"></span>
                    С установкой
                </label>
                <label class="radio">
                    <input name="install" type="radio" v-model.number="install" value=0 checked class="radio__input">
                    <span class="radio__mark"></span>
                    Без установки
                </label>
            </div>
            <form action="" class="form calculator__result">
                Расчетная цена
                <span>{{ summ }} Р</span>
                <input type="text" placeholder="Введите ваше имя">
                <input type="tel">
                <button class="button">Заказать</button>
                <p>Внимание! Стоимость является примерной. Более точная оценка требует выезда замерщика</p>
            </form>
        </div>
    </div>
   

</template>

<script>
    export default {
        data: function () {
            return {
                type: 'simple',
                install: 0,
                arrWidth: [0, 0],
                arrHeight: [0, 0],
                multiplier: 3000
            }
        },
        computed: {
            width () {
                return this.arrWidth.reduce( (total, current) => { return total + current } );
            },
            height () {
                return this.arrHeight.reduce( (total, current) => { return total + current } );
            },
            area: function () {
                return this.width * this.height / 1000000;
            },
            installPrice: function () {
                return parseInt(this.install) * this.area;
            },
            summ: function () {
                return this.area * this.multiplier + this.installPrice;
            }
        },
        watch: {
            type: function (value, old) {
               this.arrWidth = [0, 0];
               this.arrHeight = [0, 0];
            }
        },
        mounted() {
            console.log('Window calc Component mounted.')
        },
        methods: {
        }        
    }
</script>
