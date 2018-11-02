<template>
    <div class="comment comment_client">
        <p class="third-title comment__title">Добавить комментарий</p>
        <hr class="line comment__line">
        <textarea class="textarea comment__textarea" v-bind:disabled="!user" name="" id="" v-bind:placeholder="placeholder" v-model="message"></textarea>
        <div v-if="user" class="comment__user comment__user_client user">
            <div class="user__left">
                <img v-bind:src="user.avatar" alt="" class="user__avatar">
            </div>
            <div class="user__right">
                <p class="text user__name">{{ user.fullName }}</p>
            </div> 
        </div>
        <div v-if="!user" class="comment__auth">
            <span class="third-title">Авторизуйтесь через</span>
            <div class="comment__socials socials">
                <img @click="vkAuth()" class="socials__item" src="/img/gui/social_gray_vk.svg" alt="">
                <img data-callback="unlockComment" class="socials__item js-social-auth" data-social="vk" src="/img/gui/social_gray_ok.svg" alt="">
                <img data-callback="unlockComment" class="socials__item js-social-auth" data-social="vk" src="/img/gui/social_gray_fb.svg" alt="">
                <img data-callback="unlockComment" class="socials__item js-social-auth" data-social="vk" src="/img/gui/social_gray_inst.svg" alt="">
            </div>                                
        </div>
        <div class="comment__controls">
            <span v-if="isValidated" class="button button_red comment__sent" @click="send()">Отправить</span>
            <span class="link comment__close js-close">Закрыть</span>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
               user: {},
               message: ''
            }
        },
        computed: {
            placeholder () {
                return this.user ? 'Введите ваше сообщение':'Авторизуйтесь, чтобы оставить комментарий.'
            },
            isValidated () {
                return this.user && this.message.length > 0
            }
        },
        methods: {
            send () {
                var $this = this;

                $.ajax({
                    url:'/forms/add-comment',
                    method: 'post',
                    data: {
                        _token: $('[name=token]').attr('content'),
                        fio: $this.user.fullName,
                        avatar: $this.user.avatar,
                        text: $this.message,
                        review_id: $this.review,
                        type: 'client'
                    }
                })
            },
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
        props: ['review'],
        mounted () {
            this.user = JSON.parse(localStorage.getItem('socialUser'))
        }
    }
</script>