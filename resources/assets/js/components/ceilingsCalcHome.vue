<script type="text/javascript">
    $(document).on('input', '#calc_home .range', function (e) {
        var area = $('[name=area]').val(),
            lamps = $('[name=lamps]').val(),
            city = window.city.code,
            areaPrice = 350,
            lampPrice = 250,
            price = 0;

        if (city === 'krasnodar') {
            areaPrice = 270;
        }
        if (city === 'dolgoprudnyj' ||
            city === 'nahodka' ||
            city === 'sankt-peterburg') {
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

        if (city === 'moskva') {
            areaPrice = 450;
            lampPrice = 500;
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
