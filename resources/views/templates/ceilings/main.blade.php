<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="title" content="Заказать установку натяжных потолков">
	<meta name="description" content="Заказать установку натяжных потолков в&nbspСочи цены от 100 руб./м2 от производителя, с установкой под ключ, замер бесплатно, гарантия до 15 лет, закажите на сайте и получите скидку!">
	<link async rel="preload" href="/css/ceilings.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<title>Document</title>
</head>
<body class="body">
	<header class="header">
		<a class="logo header__logo" href="/" aria-label="На главную страницу">
			@include('templates.gui.icons.logo.logo__icon')
		</a>
		<div class="directions">
			@include('templates.gui.icons.arrow.arrow')
			<ul class="directions__list">
				<li class="text directions__item">Фабрика натяжных&nbspпотолков</li>
			</ul>
		</div>
		<button class="hamburger header__hamburger" aria-label="Открыть меню" >
			@include('templates.gui.icons.hamburger')
		</button>
		<nav class="menu">

		</nav>
		<hr class="line header__line">
		<a href="" class="whatsapp header__whatsapp">
			@include('templates.gui.icons.phone.whatsapp')
			<p>WhatsApp</p>
			<p><u>Написать</u></p>
		</a>
		<a href="" class="phone header__phone">
			@include('templates.gui.icons.phone.phone')
			<p>8 800 222-11-97</p>
			<p>Заказать звонок</p>
		</a>
	</header>
	<main class="content">
		<section class="hero">
			<p class="overtitle hero__overtitle">
				Монтаж 1 день | Гарантия 15 лет
			</p>
			<h1 class="h1 hero__title">
				<b>Натяжные потолки</b><br>
				в Москве и МО<br>
				от 100 ₽/м²
			</h1>
			<p class="intro hero__intro">
				Бесплатно вызовите специалиста<br>для замера и расчёта
			</p>
			<form class="form hero__form">
				<input class="input form__input" placeholder="Введите телефон" aria-label="Введите номер телефона в формате +7 999 999-99-99">
				<button class="button form__button">Вызвать замерщика</button>
				<p class="form__agreement">
					Оставляя контактную информацию, вы соглашаетесь на <u>обработку персональных данных</u>
				</p>
			</form>
		</section>
		<section class="section offer b-texture b-texture_sand">
			<h2 class="title offer__title"><b>Двойная скидка!</b></h2>
			<img class="offer__img" data-src="/img/templates/ceilings/offer/double_sale.png" alt="Увеличиваем скидки до 60%">
			<p class="intro offer__intro">Только до 25 сентября!</p>
			<form class="form">
				<input class="input form__input" placeholder="Введите телефон" aria-label="Введите номер телефона в формате +7 999 999-99-99">
				<button class="button form__button">Получить скидку</button>
				<p class="form__agreement">
					Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных
				</p>
			</form>
		</section>
		<section class="section">
			<h2 class="title section__title">Калькулятор</h2>
			<hr class="line section__line">
			<p class="intro section__intro">
				Расчёт стоимости натяжного потолка <span class="b-color_red">по акции</span>.
				Для точного расчёта необходимо произвести замер!
			</p>
			<form class="calculator">
				<label class="radio calculator__radio">
					<span class="h4 radio__name">Площадь помещения</span>
					<output name="area_count" class="radio__value" for="area">0</output>
					<input oninput="area_count.value=area.value" id="area" class="radio__input" type="range">
				</label>
				<label class="radio calculator__radio">
					<span class="h4 radio__name">Количество светильников</span>
					<output name="lamps_count" class="radio__value" name="lamps">0</output>
					<input oninput="lamps_count.value=lamps.value" id="lamps" class="radio__input" type="range">
				</label>
				<div class="calculator__result">
					<p class="h4">Цена с установкой</p>
					<output class="calculator__result">8 750 ₽</p>
				</div>
				<button class="button" type="button" aria-label="Вызвать замерщика">Вызвать замерщика</button>
			</form>
		</section>
		<section class="section">
			<div class="offer">
				<img class="offer__img" data-src="/img/templates/gui/offer/opponent_sale.png" alt="Скидка до 500р от цены конкурента">
				<h2 class="title section__title">
					Нашли дешевле?<br>
					Сделаем скидку!
				</h2>
			</div>
		 	<button class="button section__button">Получить скидку</button>
		</section>
		<section class="section section_full b-texture">
			<h2 class="title section__title">Каталог натяжных потолков в Сочи от производителя</h2>
			<hr class="line section__line">
			<ul class="carousel">
				<li class="card carousel__item">
					<img class="card__img" data-src="/img/templates/ceilings/placeholder.jpg" alt="">
					<p class="overtitle card__title">Матовые</p>
					<hr class="line card__line">
					<p class="text card__text">
						Имеют слегка шероховатую поверхность и внешне напоминают классический беленый потолок.
					</p>
					<p class="price card__price">от 100 ₽/м2</p>
				</li>
				<li class="card carousel__item">
					<img class="card__img" data-src="/img/templates/ceilings/placeholder.jpg" alt="">
					<p class="overtitle card__title">Матовые</p>
					<hr class="line card__line">
					<p class="text card__text">
						Имеют слегка шероховатую поверхность и внешне напоминают классический беленый потолок.
					</p>
					<p class="price card__price">от 100 ₽/м2</p>
				</li>
				<li class="card carousel__item">
					<img class="card__img" data-src="/img/templates/ceilings/placeholder.jpg" alt="">
					<p class="overtitle card__title">Матовые</p>
					<hr class="line card__line">
					<p class="text card__text">
						Имеют слегка шероховатую поверхность и внешне напоминают классический беленый потолок.
					</p>
					<p class="price card__price">от 100 ₽/м2</p>
				</li>
			</ul>
			<ul class="dots">
				<li class="dot"></li>
			</ul>
			<a href="" class="button section__button">Перейти в каталог</a>
		</section>
		<section class="section">
			<p class="overtitle section__overtitle">Наши преимущества</p>
			<h2 class="title section__title">Звонят многим,<br>заказывают у нас.<br>Почему?</h2>
			<hr class="line section__line">
			<p class="intro section__intro">
				Фабрика натяжных потолков «Твой&nbspстиль» основана в 2003 году является лидером по производству и установке натяжных потолков на Дальнем Востоке.
			</p>
			<div class="advantages">
				<article class="advantage">
					<img class="advantage__img" data-src="/img/templates/gui/company/factory.jpg" alt="Собственное производство">
					<h3 class="title advantage__title">Собственное производство</h3>
					<p class="intro advantage__intro">— Обеспечивает гарантию низкой цены</p>
					<p class="intro advantage__intro">— Снимает любые ограничения на цвет, конфигурацию и фактуру натяжного полотна</p>
					<p class="intro advantage__intro">— 549 вариантов фактур и оттенков</p>
				</article>
				<article class="advantage">
					<img class="advantage__img" data-src="/img/templates/gui/company/director.jpg" alt="Генеральный директор Репин А.А. всегда на связи">
					<h3 class="title advantage__title">Директор всегда на связи</h3>
					<p class="intro advantage__intro">
						Я лично контролирую все этапы работы с помощью прямого контакта со своими клиентами.
						Вы можете написать мне в любую социальную сеть или позвонить.
						Прямая линия обеспечивает ответственную работу каждого сотрудника.
						Считаю это самым важным фактором для моих клиентов.
					</p>
					<div class="signature advantage__signature">
						<span class="signature__name">А. А. Репин</span>
						<img class="signature__img" data-src="/img/templates/gui/company/signature.png" alt="">
					</div>
					<a href="" class="button section__button">Написать в Инстаграм</a>
					<a href="" class="button section__button">Остальные преимущества</a>
				</article>
			</div>
		</section>
		<section class="section b-texture">
			<h2 class="title section__title">Примеры наших работ</h2>
			<hr class="line section__line">
			<ul class="carousel">
				<li class="card carousel__item">
					<img class="card__img" data-src="/img/templates/ceilings/placeholder.jpg" alt="">
					<p class="overtitle card__title">Матовые</p>
					<hr class="line card__line">
					<p class="text card__text">
						Имеют слегка шероховатую поверхность и внешне напоминают классический беленый потолок.
					</p>
					<p class="price card__price">от 100 ₽/м2</p>
				</li>
				<li class="card carousel__item">
					<img class="card__img" data-src="/img/templates/ceilings/placeholder.jpg" alt="">
					<p class="overtitle card__title">Матовые</p>
					<hr class="line card__line">
					<p class="text card__text">
						Имеют слегка шероховатую поверхность и внешне напоминают классический беленый потолок.
					</p>
					<p class="price card__price">от 100 ₽/м2</p>
				</li>
				<li class="card carousel__item">
					<img class="card__img" data-src="/img/templates/ceilings/placeholder.jpg" alt="">
					<p class="overtitle card__title">Матовые</p>
					<hr class="line card__line">
					<p class="text card__text">
						Имеют слегка шероховатую поверхность и внешне напоминают классический беленый потолок.
					</p>
					<p class="price card__price">от 100 ₽/м2</p>
				</li>
			</ul>
			<ul class="dots">
				<li></li>
			</ul>
			<a href="" class="button section__button">Посмотреть работы</a>
		</section>
		{{-- <section class="section">
			<h2 class="title section__title">Отзывы наших клиентов</h2>
			<hr class="line section__line">
			<ul class="carousel">
				<li class="card carousel__item">
					<img class="card__img" src="" alt="">
					<p class="card__title">Матовые</p>
					<hr class="line card__line">
					<p class="text card__text">
						Имеют слегка шероховатую поверхность и внешне напоминают классический беленый потолок.
					</p>
					<p class="price card__price">от 100 ₽/м2</p>
				</li>
			</ul>
			<ul class="dots">
				<li></li>
			</ul>
			<a href="" class="button section__button">Прочитать все отзывы</a>
		</section>--}}
		<section class="seo">
			<img class="seo__background" data-src="/img/templates/gui/seo/intro.jpg" alt="Натяжные потолки в Сочи">
			<article class="seo__article article">
				<h4 class="h4">Натяжной потолок</h4>
				<p class="text article__text">
					Компания «Твой стиль» предлагает качественные и практичные натяжные потолки с установкой в Сочи недорого.
					Экологичные материалы, возможность легко спрятать неровные поверхности и дефекты, удобство при эксплуатации, длительный срок службы, доступная стоимость, широкие дизайнерские возможности — это основные преимущества нашей продукции. Фабрика натяжных потолков гарантирует возможность заказать любой цвет и фактуру полотна для всех типов помещений. Наша компания предлагает покрытия из пленки ПВХ, которая долгие годы не теряет яркости, не подвержена изменениям от перепадов температур и идеально вписывается в интерьерное оформление. Благодаря такому практичному и выгодному предложению от производителя, вы сэкономите немало средств, а результат будет эффектным и надёжным.
				</p>
				<u class="text article__more">Читать далее</u>
			</article>
			<img class="seo__img" data-src="/img/templates/gui/seo/video.jpg" alt="">

		</section>
		<section class="section">
			<h2 class="h3 section__title">Оцените наш сайт</h2>
			<div class="assess">
				@include('templates.gui.icons.socials.youtube-up')
				@include('templates.gui.icons.socials.youtube-down')
			</div>
		</section>
		<section class="section open-form">
			<h2 class="overtitle overtitle_medium open-form__title">Запишитесь на замер <span class="b-color_red">сегодня</span> и&nbspполучите дополнительную <span class="b-color_red">скидку&nbsp10&nbsp%</span></h2>
			<p class="text open-form__intro">Перезвоним вам в течение 5 минут</p>
			<form class="form" action="index.html" method="post">
				<input type="text" class="input" placeholder="Введите имя">
				<input type="text" class="input" placeholder="Введите телефон">
				<button class="button form__button">Вызвать замерщика</button>
				<p class="form__agreement">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
			</form>
		</section>
	</main> 
	<footer class="footer">
		<ul class="footer__contacts">
			<li class="phone">
				@include('templates.gui.icons.phone.phone_white')
				<a>8 800 333-97-16</a>
				<span>Круглосуточно | Бесплатно</span>
			</li>
			<li class="email">
				@include('templates.gui.icons.mail.mail_white')
				<p>sochi@mail-ts.ru</p>
			</li>
			<li class="pin">
				@include('templates.gui.icons.map.pin')
				<p>Наши офисы</p>
			</li>
			<li>
				@include('templates.gui.icons.socials.insta')
				@include('templates.gui.icons.socials.fb')
				@include('templates.gui.icons.socials.vk')
				@include('templates.gui.icons.socials.ok')
				@include('templates.gui.icons.socials.youtube')
			</li>
		</ul>
		<nav>
			<a href="#">О компании</a>
			<div class="">
				<a href="#">Написать директору</a>
			</div>
			<a href="#">ФАКТУРЫ</a>
			<a href="#">ТЕХНОЛОГИИ</a>
		</nav>
		<div class="credentials">
			@include('templates.gui.icons.logo.logo__white')
			<hr>
			<p>
				2003-2017 © ООО «Твой Стиль».<br>
				Все права защищены.
			</p>
			<a href="#"><u>Оценить сайт</u></a>
			<p>Разработка и продвижение<br>TREND PRO</p>
		</div>
	</footer>
</body>
<script src="/js/ceilings.js"></script>
</html>
