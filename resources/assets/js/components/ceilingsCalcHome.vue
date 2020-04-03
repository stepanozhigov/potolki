<script type="text/javascript">
    $(document).on('input', '#calc_home .range', function (e) {
        var area = $('[name=area]').val(),
            lamps = $('[name=lamps]').val(),
            lampsPrice = 250,
            mult = 350,
            price = 0;

        if (window.city.code == 'krasnodar') {
            mult = 290;
        }
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
        },
        computed: {
            price: function () {
                return this.lamps * 250 + this.area * 350;
            }
        }
    }
</script>
