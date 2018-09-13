<img class="form-review__icon" width="" height="" src="/img/" alt="">
<section class="form-review">
    <div class="container">
        <div class="form-review__wrap js-form-body">
            <h2 class="form-review__title">Оставить отзыв</h2>
            <div class="form-review__inner">
                <form id="form-review" class="form-review__form">
                    <div class="form-review__row">
                        <div class="form-review__item form-review__login">
                            <p class="form-review__name">Авторизуйтесь через</p>
                            <div class="form-review__socials">
                                <a href="javascript:void(0);" class="form-review__link social-auth-btn" data-social="vk">
                                    <img class="form-review__icon" width="50" height="50" src="/img/social_gray_vk.svg" alt="">
                                </a>
                                <a href="javascript:void(0);" class="form-review__link social-auth-btn" data-social="fb">
                                    <img class="form-review__icon" width="50" height="50" src="/img/social_gray_fb.svg" alt="">
                                </a>
                                <a href="javascript:void(0);" class="form-review__link social-auth-btn" data-social="ok">
                                    <img class="form-review__icon" width="50" height="50" src="/img/social_gray_ok.svg" alt="">
                                </a>
                                <a href="javascript:void(0);" class="form-review__link social-auth-btn" data-social="in">
                                    <img class="form-review__icon" width="50" height="50" src="/img/social_gray_inst.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="form-review__item form-review__signin">
                            <p class="form-review__name">или представьтесь</p>
                            <input type="text" name="name" class="form-review__input" placeholder="Ваше имя *" required>
                        </div>
                        <div class="form-review__item form-review__avatar">
                            <p class="form-review__name">Ваше фото</p>
                            <label for="addAvatar" class="form-review__avatar-photo js-input-label js-label-avatar">
                                <input name="avatar" type="file" id="addAvatar" class="form-review__avatar-input js-input-file js-input-avatar">
                                <img class="form-review__avatar-icon js-input-icon" width="100" height="50" src="/img/add-file.svg" alt="">
                                <img src="" alt="" class="form-review__avatar-image js-input-image">
                            </label>
                        </div>
                    </div>
                    <div class="form-review__row form-review__row_vertical">
                        <p class="form-review__name">Сформулируйте Ваше сообщение</p>
                        <div class="switcher form-review__switcher">
                            <button type="button" class="switcher__button switcher__button_active">Текстовый отзыв</button>
                            <button type="button" class="switcher__button">Видеоотзыв</button>
                        </div>
                        <div class="form-review__tab active">
                            <textarea class="form-review__content" placeholder="Ваше сообщение. Просим Вас соблюдать нормативную лексику и нормы уважения. В противном случае отзыв будет удален."></textarea>
                            <div class="form-review__item form-review__media">
                                <p class="form-review__name">Добавьте фотографии</p>
                                <div class="form-review__media-list">
                                    <label for="photoFirst" class="form-review__media-item js-input-label">
                                        <input name="photos[]" type="file" id="photoFirst" class="js-input-file">
                                        <img class="form-review__avatar-icon js-input-icon" width="50" height="50" src="/img/add-file_small.svg" alt="">
                                        <img src="" alt="" class="form-review__media-file js-input-image">
                                    </label>
                                    <label for="photoSecond" class="form-review__media-item js-input-label">
                                        <input name="photos[]" type="file" id="photoSecond" class="js-input-file">
                                        <img class="form-review__avatar-icon js-input-icon" width="50" height="50" src="/img/add-file_small.svg" alt="">
                                        <img src="" alt="" class="form-review__media-file js-input-image">
                                    </label>
                                    <label for="photoThird" class="form-review__media-item js-input-label">
                                        <input name="photos[]" type="file" id="photoThird" class="js-input-file">
                                        <img class="form-review__avatar-icon js-input-icon" width="50" height="50" src="/img/add-file_small.svg" alt="">
                                        <img src="" alt="" class="form-review__media-file js-input-image">
                                    </label>
                                </div>
                            </div>
                            <div class="form-review__item form-review__addressed">
                                <p class="form-review__name">Адресовано для</p>
                                <div class="form-review__select">
                                    <select name="addressed">
                                        <option value="0" selected>Администрации</option>
                                        <option value="1">Менеджеру</option>
                                        <option value="2">Администрации</option>
                                        <option value="3">Менеджеру</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-review__tab">
                            <textarea class="form-review__content" placeholder="Ссылка на Youtube"></textarea>
                            <div class="form-review__item form-review__media">
                                <p class="form-review__name">Добавьте видео</p>
                                <div class="form-review__media-list">
                                    <label for="video" class="form-review__media-item form-review__media-item_video">
                                        <img class="form-review__media-icon" width="60" height="60" src="/img/add-file_small.svg" alt="">
                                        <input name="video" type="file" id="video" class="js-video-file">
                                    </label>
                                    <p class="form-review__video-text">Видео добавлено</p>
                                </div>
                            </div>
                            <div class="form-review__item form-review__addressed">
                                <p class="form-review__name">Адресовано для</p>
                                <div class="form-review__select">
                                    <select name="addressed">
                                        <option value="0" selected>Администрации</option>
                                        <option value="1">Менеджеру</option>
                                        <option value="2">Администрации</option>
                                        <option value="3">Менеджеру</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-review__row">
                        <img src="%=static=%img/content/captcha.jpg" alt="" class="form-review__captcha">
                        <input type="submit" class="form-review__submit" value="Отправить">
                        <p class="form-review__agree">
                            Оставляя контактную информацию, Вы соглашаетесь на обработку <a href="javascript:void(0);" class="form-review__link">персональных данных</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-review__feedback js-form-feedback">
            <h3 class="form-review__feedback-title">Отзыв отправлен</h3>
            <p class="form-review__feedback-text">
                Спасибо за обратную связь!<br>Ваш отзыв обрабатывается модератором и скоро будет размещён на сайте.
            </p>
            <button type="button" class="form-review__feedback-button js-reset-form">Оставить новый отзыв</button>
        </div>
    </div>
</section>
