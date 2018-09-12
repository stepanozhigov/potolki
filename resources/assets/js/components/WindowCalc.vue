<template>
    
    <div class="calculator__inner">
        <div class="calculator__types">
            <label v-for="type in types" class="radio">
                <input class="radio__input"  type="radio" name="type" :value="type.code" v-model="currentType">
                <img v-if="currentType == type.code" class="calculator__type" :src="publicPath + type.form_img_selected" alt="">
                <img v-else class="calculator__type" :src="publicPath + type.form_img" alt="">                                
            </label>            
        </div>
        <transition name="slide" mode="out-in">
        <div v-for="type in types" :key="type.id" v-if="currentType == type.code"class="calculator__content">
            <div class="calculator__area">
                <img :src="publicPath + type.img" alt="">
                <div class="calculator__heights">
                    <input v-for="index in type.height_count" type="number" v-model.number="arrHeight[index]" class="input calculator__height" placeholder="Высота 1" name="height[]">
                </div>
                <div class="calculator__widths">
                     <input v-for="index in type.width_count" type="number" v-model.number="arrWidth[index]" class="input calculator__width" placeholder="Ширина 1" name="width[]">
                </div>
               
                
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
        </transition>
    </div>
   

</template>
<style>
    .slide-leave-active,
    .slide-enter-active {
    transition: .5s;
    }
    .slide-enter {
    transform: translate(100%, 0);
    }
    .slide-leave-to {
    transform: translate(-150%, 0);
    }
</style>
<script>
    export default {
        data: function () {
            return {
                currentType: 'simple',
                areaMode: '',
                install: 0,
                arrWidth: [],
                arrHeight: [],
                multiplier: 3000,
                publicPath: '/storage/'
            }
        },
        props: ['types'],
        computed: {
            width () {
                return this.arrWidth.length ? this.arrWidth.reduce( (total, current) => { return total + current } ): 0;
            },
            height () {
                return this.arrHeight.length ? this.arrHeight.reduce( (total, current) => { return total + current } ): 0;
            },
            area: function () {
                return this.width * this.height / 1000000;
            },
            installPrice: function () {
                return this.install * this.area;
            },
            summ: function () {
                return parseInt(this.area * this.multiplier + this.installPrice);
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
