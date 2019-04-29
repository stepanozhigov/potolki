<div class="formAdress" id="formAdressPopup">
    <div class="formAdress__content">
        <h3 class="formAdress__title">Редактировать адрес <br> доставки</h3>
        <form id="formAdress" action="https://jsonplaceholder.typicode.com/posts" method="post">
            <label class="formAdress__input-wrap">
                <input type="text" name="regeon" placeholder="Регион *" class="formAdress__input" required>
            </label>
            <label class="formAdress__input-wrap">
                <input type="tel" name="city" placeholder="Город *" class="formAdress__input" required>
            </label>
            <label class="formAdress__input-wrap">
                <input type="text" name="street" placeholder="Улица *" class="formAdress__input" required>
            </label>
            <label class="formAdress__input-wrap">
                <input type="tel" name="house" placeholder="Дом *" class="formAdress__input" required>
            </label>
            <label class="formAdress__input-wrap">
                <input type="text" name="apartments" placeholder="Квартира / Офис *" class="formAdress__input" required>
            </label>
            <label class="formAdress__input-wrap">
                <input type="tel" name="index" placeholder="Индекс *" class="formAdress__input" required>
            </label>
            <input type="submit" value="Отправить заявку" class="formAdress__submit">
            <p class="formAdress__status-send">Данные отправлены, спасибо!</p>
            <button class="formAdress__abort">Отмена</button>
        </form>
    </div>
</div>
