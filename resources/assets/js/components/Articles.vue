<template>
    <div class="articles__content">
        <post v-for="post in posts" :post="post"></post>
    </div>
</template>

<script>
    Vue.component('post', require('./Article.vue'));
    export default {
        props: ['posts'],
        data: function () {
            return {
                imgPath: '/storage/',
                mode: 'list'
            }            
        }
    }
</script> 
