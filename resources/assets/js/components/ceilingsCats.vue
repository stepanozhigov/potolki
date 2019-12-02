<template>

        <transition-group name="list-complete"  tag="div" class="carousel catalog__carousel">
            <a  :href="dataUrl(cat)" v-touch:swipe.left="offsetShowPoint" v-touch:swipe.right="offsetBackShowPoint" v-for="(cat, index) in showedItems" v-bind:key="cat.id" class="carousel__item">
                <img :src="'/storage/'+cat.img" :alt="cat.name" class="carousel__item_img">
                <div class="carousel__item_wrap">
                    <p class="carousel__item_title">{{ cat.name }}</p>
                    <p class="text carousel__item_text">{{ cat.ceiling_intro }}</p>
                    <p class="price carousel__item_price">от {{ formatPrice(cat.price) }}  ₽/м2</p>
                </div>
            </a>
        </transition-group>    

</template>

<style>
.list-complete-item {
  transition: all 1s;
  display: inline-block;
  margin-right: 10px;
}
.list-complete-enter, .list-complete-leave-to
/* .list-complete-leave-active до версии 2.1.8 */ {
  opacity: 0;
  transform: translateY(30px);
}
.list-complete-leave-active {
  position: absolute;
  display: none;
}
</style>

<script>
    export default {
        data: function () {
            return {
                showCount: 7,
                showPoint: 0,
                interval: 0,
                currentCatIndex: 0,
                mode: 'list',
            }
        },
        computed: {
            showedItems: function () {
                if(!this.cats) {
                    return false;
                }
                var itemsCount = this.cats.length,
                    index = this.showPoint,
                    width = window.innerWidth,
                    items = [];

                if(width > 768){
                    this.showCount ++;
                }

                while (items.length < this.showCount) {
                    if (!this.cats[index]) {
                        index = 0;
                    }
                    items.push(this.cats[index]);

                    index ++;
                }

                return items;
            }
        },
        props:['cats', 'city'],
        methods: {
            formatPrice(value) {
                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")
            },
            dataUrl(value) {
                if(value.type = "material"){
                    return "/"+this.city.code+"/catalogue/"+value.slug;
                }
                else{
                    return "/"+this.city.code+"/photoprint/";
                }
            },
            offsetShowPoint (stop = false) {
                if(!this.cats) {
                    return false;
                }
                const itemsCount = this.cats.length;

                this.showPoint ++;

                if (this.showPoint == itemsCount) {
                    this.showPoint = 0;
                }
            },
            offsetBackShowPoint (stop = false) {
                const itemsCount = this.cats.length;

                this.showPoint --;

                if (this.showPoint <= 0) {
                    this.showPoint = itemsCount;
                }
            },
        }
    }
</script>