<script type="text/javascript">
    $(document).on('input', '#calc_home .range', function (e) {
        var area = $('[name=area]').val(),
            lamps = $('[name=lamps]').val(),
<<<<<<< HEAD
            lampsPrice = 250,
            mult = 350,
=======
            city = window.city.code,
            areaPrice = 350,
            lampPrice = 250,
>>>>>>> 528cdf1c35a20f80cd75543efeac80ac23f3f5b4
            price = 0;

        if (city === 'krasnodar') {
            areaPrice = 290;
        }
<<<<<<< HEAD
        if (window.city.code == 'moskva') {
            mult = 450;
        }
        if (window.city.code == 'dolgoprudnyj') {
        	mult = 450;
        }
        if (window.city.code == 'nahodka') {
            mult = 450;
            lampsPrice = 300;
        }

        if (window.city.code == 'ussuriysk') {
            mult = 400;
            lampsPrice = 300;
        }
        if (window.city.code == 'vladivostok') {
            mult = 400;
            lampsPrice = 300;
        }
        if (window.city.code == 'habarovsk') {
            mult = 400;
            lampsPrice = 300;
        }
        if (window.city.code == 'blagoveschensk') {
            mult = 400;
        }
        price = lamps * lampsPrice + area * mult;
=======
        if (city === 'moskva' ||
            city === 'dolgoprudnyj' ||
            city === 'nahodka') {
        	areaPrice = 450;
        }

        if (city === 'ussuriysk' ||
            city === 'vladivostok' ||
            city === 'habarovsk' ||
            city === 'blagoveschensk') {
        	areaPrice = 400;
        }

        if (city === 'ussuriysk' ||
            city === 'vladivostok' ||
            city === 'habarovsk' ||
            city === 'nahodka') {
        	lampPrice = 300;
        }

        

        price = lamps * lampPrice + area * areaPrice;
>>>>>>> 528cdf1c35a20f80cd75543efeac80ac23f3f5b4

        $('.js-calc-price').html(price.toLocaleString());
    })
    $(document).ready(function () {
        $('[name=area]').trigger('input');
    })
    export default {
        data: function () {
            return {
                area: 1,
                lamps: 0
            }
        }
    }
</script>
