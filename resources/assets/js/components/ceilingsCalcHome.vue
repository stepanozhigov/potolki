<script type="text/javascript">
    $(document).on('input', '#calc_home .range', function (e) {
        var area = $('[name=area]').val(),
            lamps = $('[name=lamps]').val(),
            areaPrice = 350,
            lampPrice = 250,
            price = 0;

        if (window.city.code == 'krasnodar') {
            areaPrice = 290;
        }
        if (window.city.code == 'moskva' ||
            window.city.code == 'dolgoprudnyj' ||
            window.city.code == 'nahodka') {
        	areaPrice = 450;
        }

        if (window.city.code == 'ussuriysk' ||
            window.city.code == 'vladivostok' ||
            window.city.code == 'habarovsk' ||
            window.city.code == 'blagoveschensk') {
        	areaPrice = 400;
        }

        if (window.city.code == 'ussuriysk' ||
            window.city.code == 'vladivostok' ||
            window.city.code == 'habarovsk' ||
            window.city.code == 'nahodka') {
        	lampPrice = 300;
        }

        

        price = lamps * lampPrice + area * areaPrice;

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
