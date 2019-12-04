<script type="text/javascript">
    $(document).on('input', '#calc_home .range', function (e) {
        var area = $('[name=area]').val(),
            lamps = $('[name=lamps]').val(),
            mult = 350,
            price = 0;

        if (window.city.code == 'krasnodar') {
            mult = 290;
        }
        if (window.city.code == 'dolgoprudnyj') {
        	mult = 450;
        }
        if (window.city.code == 'moskva') {
            mult = 450;
        }
        price = lamps * 250 + area * mult;

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
