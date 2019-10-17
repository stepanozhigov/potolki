<template>
  <div class="gifts">
    <button  @click.prevent="nextGift" class="gifts__prev">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16">
        <defs>
          <path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z">
          </path>
        </defs>
        <g>
          <g transform="translate(-1405 -522)">
            <use fill="" xlink:href="#83zha"
            ></use></g></g>
      </svg>
    </button>
    <transition name="slide-fade">
      <div v-touch:swipe="nextGift" class="gifts__item gifts__item_active">
        <img class="gifts__image" :src="current.img" alt="">
      </div>
    </transition>
    <div class="gifts__dots">
      <span v-for="(gift, id) in gifts" class="gifts__dot" :class="{'gifts__dot_active':id==index}"></span>
    </div>
    <button @click.prevent="nextGift" class="gifts__next">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16">
        <defs>
          <path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z">
          </path>
        </defs>
        <g>
          <g transform="translate(-1405 -522)">
            <use fill="" xlink:href="#83zha"
            ></use></g></g>
      </svg>
    </button>
  </div>
</template>

<style lang="scss">

  .gifts {
    flex-direction: column;
    align-items: center;
    &__dots {
      width: 15%;
      display: flex;
      justify-content: space-between;
      margin-bottom: 16px;
    }
    &__image {
      margin-bottom: 16px;
    }
    &__dot {
      border-radius: 50%;
      width: 8px;
      height: 8px;
      background-color: #e6e8ea;

      &_active {
        background-color: #dc1414;
      }
    }
    &__next {
      svg {
        width: 10px;
        height: 16px;
        fill: #babec2;
      }
      z-index: 999;
      outline: none;
      position: absolute;
      top: 32%;
      right: -17px;
      width: 60px;
      height: 60px;
      border: none;
      background-color: rgba(0, 0, 0, 0.4);
      border-top-left-radius: 35px;
      border-bottom-left-radius: 35px;
    }
    &__prev {
      svg {
        width: 10px;
        height: 16px;
        fill: #babec2;
      }
      z-index: 999;
      outline: none;
      position: absolute;
      top: 32%;
      left: -17px;
      transform: rotate(180deg);
      width: 60px;
      height: 60px;
      border: none;
      background-color: rgba(0, 0, 0, 0.4);
      border-top-left-radius: 35px;
      border-bottom-left-radius: 35px;
    }
  }
</style>

<script type="text/javascript">
  export default {
    computed: {
      current: function () {
        return this.gifts[this.index];
      }
    },
    methods: {
      nextGift: function () {
        var next = this.index + 1;
        if (!this.gifts[next]) {
          next = 0;
        }
        console.log('next');
        window.gift = this.gifts[next].title;
        this.index = next;
      }
    },
    mounted: function () {
        window.gift = this.gifts[this.index].title;
    },
    data: function () {
      return {
        index: 0,
        gifts: [
          {
            title: 'Купон на 5000 рублей',
            img: '/img/quiz/gifts/new/5000.jpg'
          },
          {
            title: 'Второй потолок',
            img: '/img/quiz/gifts/new/second.jpg'
          },
          {
            title: 'Светильники',
            img: '/img/quiz/gifts/new/lights.jpg'
          }
        ]
      }
    }
  }
</script>
