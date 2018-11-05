<template>
    <div :class="[mix, 'socials']">
        <img @click="vkAuth()" class="socials__item" src="/img/gui/social_gray_vk.svg" alt="">
        <img class="socials__item" src="/img/gui/social_gray_ok.svg" alt="">
        <img class="socials__item" src="/img/gui/social_gray_fb.svg" alt="">
        <img class="socials__item" src="/img/gui/social_gray_inst.svg" alt="">
    </div>
</template>


<script>
    export default {
        data: function () {
            return {
                user: {}
            }
        },
        props: ['mix'], 
        methods: {
            vkAuth: function () {
                VK.init({
                    apiId: 5898289
                });
                VK.Auth.login(response => {
                    if (response.session) {
                        let user = response.session.user;
                        return VK.Api.call('users.get', {'user_ids': user.id, fields: 'photo_200', v: '5.80'}, res => {
                            var userData = {
                                socialType: 'vk',
                                userHref: user.href,
                                fullName: user.first_name + ' ' + user.last_name,
                                surname: user.last_name,
                                avatar: res.response[0].photo_200
                            };
                            this.user = userData;
                            localStorage.setItem('socialUser', JSON.stringify(userData));

                        });
                    }
                });
            }
        },
        mounted () {
            this.user = JSON.parse(localStorage.getItem('socialUser'))
        },
        watch: {
            user: function (val) {
                if (val) {
                    this.$emit('logged', val);
                }
                
            }
        }
    };
</script>