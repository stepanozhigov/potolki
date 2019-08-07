<template>
	<div>
		<div class="catalogueDetail__main">
			<h2 class="catalogueDetail__title">Выберите тип поверхности</h2>
			<div class="catalogueDetail__filter">
	            <div class="catalogueDetail__types">
	                <a @click="set(surface)" v-for="surface in surfaces" class="tag catalogueDetail__tag">{{ surface.title }}</a>
	            </div>
	        </div>
            <catalogue-slider v-if="surface" :photos="surface.photos"></catalogue-slider>
	        <p v-if="surface" class="catalogueDetail__price">Печать на поверхности — от {{ surface.price }} ₽/м²</p>
	    </div>

	    <div v-if="surface" v-html="surface.desc" class="catalogueDetail__desc">
	     
	    </div>
    </div>
</template>
<script type="text/javascript">
	export default {
		data: function () {
			return {
				surface: null
			}
		},
		methods: {
			set: function (surface) {
				this.surface = surface;
			}
		},
		props: ['surfaces']
	}
</script>