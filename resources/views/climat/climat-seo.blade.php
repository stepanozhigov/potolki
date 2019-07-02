<section class="climat-seo">
    <div class="container climat-seo__content">
        <div class="climat-seo__seo">
            <div class="climat-seo__seo-content">
                <h2 class="climat-seo__title">Монтаж кондиционеров в Сочи</h2>
                <p class="climat-seo__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h3 class="climat-seo__subtitle">Выбор кондиционера</h3>
                <p class="climat-seo__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p class="climat-seo__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <button class="climat-seo__seo-open" type="button" name="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="18" viewBox="0 0 34 18">
                	<g>
                		<g><path fill="none" stroke="#808890" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="50" d="M33 1v0L17 17v0L1 1v0"/></g>
                	</g>
                </svg>
            </button>
        </div>
        <form class="form climat-seo__form" action="{{ route('add-lead') }}">
            <h2 class="climat-seo__title">Остались вопросы?</h2>
            <p class="climat-seo__text">Оставьте заявку и мы перезвоним вам в течении 5 минут</p>
            @csrf
            <input class="input form__input form__input_horiz" type="text" name="name" required placeholder="Ваше имя">
            <input class="input form__input form__input_horiz" type="tel" name="phone" required placeholder="Ваш телефон">
            <button class="button form__button">Заказать звонок</button>
			<p class="form__status">Заявка отправлена</p>
            <p class="subtext form__agreement">Оставляя контактную информацию, вы соглашаетесь на <a href="{{ route('agreement', $city) }}">обработку персональных данных</a> </p>
        </form>
    </div>
</section>
