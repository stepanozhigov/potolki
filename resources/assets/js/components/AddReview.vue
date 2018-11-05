<template>
    <div class="add-review">
        <div v-if="!user.fullName" class="add-review__label intro">
            Авторизуйтесь через
            <social-auth v-on:logged="setUser" mix='add-review__socials'></social-auth>
        </div>
        <div :class="['add-review__label', 'intro', {'add-review__label_person': user.avatar} ]">
            <span v-if="!user.fullName">Или представьтесь</span>
            <img class="add-review__avatar" :src="user.avatar">
            <input type="text" class="input add-review__input" v-model="user.fullName" placeholder="Ваше имя *">
        </div>

        <div class="add-review__label add-review__label_full intro">
            Сформулируйте Ваше сообщение
            <textarea v-model="text" name="" id="" class="textarea add-review__textarea" placeholder="Ваше сообщение. Просим Вас соблюдать нормативную лексику и нормы уважения. В противном случае отзыв может быть удалён."></textarea>
        </div>
        <div class="add-review__label intro">
            Прикрепите фотографии
            <label class="file add-review__file">
                <img v-for="preview in previews" v-bind:src="preview" class="file__preview add-review__preview">
                <img src="/img/gui/add-file.png" alt="" class="file__preview">
                <input v-on:change="handlePhoto"  type="file" class="file__input">
            </label>
        </div>
        <div class="add-review__label intro">
            Прикрепите видео
            <label class="file add-review__file">
                <img src="/img/gui/add-file.png" alt="" class="file__preview">
                <input v-on:change="handleVideo" type="file" class="file__input">
                <span class="subtext file__name">{{ video ? video.name: '' }}</span>
            </label>
        </div>
        <button @click="send" class="button add-review__submit">Отправить</button>
        <p class="subtext add-review__agreement">Оставляя контактную информацию, Вы соглашаетесь на обработку персональных данных</p>
        <img src="/img/photo-girl.png" class="add-review__girl" alt="">
    </div>
</template>

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('[name=token]').attr('content')
    }
    });
    const socialAuth = require('./SocialAuth.vue');
    export default {
        components: {
            'social-auth': socialAuth
        },
        data: function () {
            return {
                user: {
                    fullName: ''
                },
                text: '',
                photos: [],
                video: null,
                previews: [],
                videoPreview: null
            }
        },
        methods: {
            send: function ()
            {
                var data = new FormData;

                this.photos.forEach(element => {
                    data.append('photos[]', element);
                });
                
                data.append('direction_id', 1);
                data.append('video', this.video);
                data.append('fio', this.user.fullName);
                data.append('text', this.text);

                if (this.user.avatar) {
                    data.append('avatar', this.user.avatar);
                }

                if (this.user.socialType) {
                    data.append('social', this.user.socialType);
                }

                if (this.user.userHref) {
                    data.append('link', this.user.userHref);
                }

                $.ajax({
                    url:'/forms/add-review',
                    data: data,
                    method: 'post',
                    processData: false,
                    contentType: false,
                    success: function (response) {

                    }
                })
            },
            setUser: function (user)
            {
                this.user = user;
            },
            handleVideo(event) {
                var input = event.target;

                this.video = input.files[0];                

            },
            handlePhoto(event) {
                var input = event.target,
                    $previews = this.previews,
                    reader = new FileReader;

                this.photos.push(input.files[0]);                

                reader.onload = function (event) {
                    $previews.push(event.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    }
</script>