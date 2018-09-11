<section class="message-dir-open ">
    <div class="container">
        <div class="message-dir-open__content about__message-dir-open">
            <div class="message-dir-open__director">
                <div class="message-dir-open__image-wrap">
                    <img src="/img/director.png" class="message-dir-open__image">
                </div>
                <h2 class="message-dir-open__title">Написать директору</h2>
                <p class="message-dir-open__name">Репин Александр Александрович</p>
            </div>
            <form id="message-dir-open" action="https://jsonplaceholder.typicode.com/posts" method="post" class="message-dir-open__form">
                <label class="message-dir-open__input-wrap">
                    <input type="text" name="name" value="" class="message-dir-open__input" placeholder="Ваше имя*" required>
                </label>
                <label class="message-dir-open__input-wrap">
                    <input type="text" name=city"" value="" class="message-dir-open__input" placeholder="Ваш город">
                </label>
                <label class="message-dir-open__input-wrap">
                    <input type="email" name="mail" value="" class="message-dir-open__input" placeholder="Ваш e-mail*" required>
                </label>
                <label class="message-dir-open__input-wrap">
                    <input type="tel" name="phone" value="" class="message-dir-open__input message-dir-open__input-phone" placeholder="Ваш телефон">
                </label>
                <label class="message-dir-open__input-wrap">
                    <input type="text" name="theme" value="" class="message-dir-open__input" placeholder="Тема сообщения">
                </label>
                <textarea name="textarea" rows="8" cols="80" class="message-dir-open__textarea" placeholder="Текст сообщения"></textarea>
                <div class="message-dir-open__bottom">
                    <input type="submit" value="Отправить" name="" class="message-dir-open__submit">
                    <p class="message-dir-open__status-send">Письмо отправлено</p>
                    <p class="message-dir-open__rules">Оставляя контактную информацию, Вы соглашаетесь на <a href="javascript:void(0);" class="link tooltip" data-tooltip-content="#tooltip_content">обработку персональных данных</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
