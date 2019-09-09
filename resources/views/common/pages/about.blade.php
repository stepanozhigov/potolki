@extends('common.layout')

@section('content')
    @include('common.gui.header')
        @include('common.gui.titles', [
            'class' =>  'container about__titles',
            'overtitle' =>  'ИНФОРМАЦИЯ О&nbsp;КОМПАНИИ',
            'title' =>  "Информация о компании «Твой стиль» {$city->name_formatted}"
        ])
        <section class="about">
            <div class="b-texture">
                <blockquote class="about__quote" style="background: url('/img/about/ys_factory.jpg')">
                    <div class="container">
                        <p>Собственное производство обеспечивает качество продукции, короткие сроки от&nbsp;заказа до&nbsp;установки и,&nbsp;конечно, низкую стоимость!</p>
                    </div>
                </blockquote>
                <p class="about__subtext">За&nbsp;более чем 16&nbsp;лет работы фабрика натяжных потолков &laquo;Твой стиль&raquo; из&nbsp;небольшого офиса в&nbsp;Хабаровске выросла в&nbsp;крупную сеть,
    						 которая сейчас насчитывает 8&nbsp;представительств в&nbsp;России. Мы&nbsp;заслужили доверие тысяч заказчиков по&nbsp;всей стране,
    						 благодаря качественному производству, профессиональной команде и&nbsp;высокому уровню предоставляемых услуг.
                </p>
                <div class="about__images">
                    @foreach($city->photos() as $photo)
                        <img src="{{ Storage::url($photo) }}" alt="" class="about__image">
                    @endforeach
                    <!--<img src="/img/about/02.jpg" alt="" class="about__image">
                    <img src="/img/about/03.jpg" alt="" class="about__image">
                    <img src="/img/about/04.jpg" alt="" class="about__image">
                    <img src="/img/about/05.jpg" alt="" class="about__image">
                    <img src="/img/about/06.jpg" alt="" class="about__image">-->
					<a class="about__all-images" href="javascript:void(0);">Смотреть все фото</a>
                </div>
            </div>
            <div class="about__content">
                    <p class="about__desc text">
                        Собственное производство снимает любые ограничения на цвет и фактуру натяжного потолка. Мы изготавливаем натяжные потолки по индивидуальному заказу, не ограничивая вас одними лишь имеющимися каталогами.
                    </p>
                    <p class="about__desc text">Натяжные потолки с компанией «Твой стиль» стали еще доступнее. Мы предоставляем вам не только полную свободу дизайнерской мысли, но и не забываем о цене – наши цены из самых доступных по стоимости . Доверяйте профессионалам!</p>
                    @include('common.gui.titles', ['secondTitle' => 'Награды компании «Твой стиль»'])
                    <div class="about__rewards">
                        <div class="about__reward">
                            <img src="/img/trophy-001.png" alt="">
                            <h3>«Лучший товар Приморья»</h3>
                            <p class="text">«Народный бренд&nbsp;в&nbsp;сфере
                            строительных&nbsp;услуг»</p>
                        </div>
                        <div class="about__reward">
                            <img src="/img/trophy-002.png" alt="">
                            <h3>«ГЕММА» — лучшие товары и услуги</h3>
                            <p class="text">«Профессионализм в сфере продаж
                            и&nbsp;обслуживания&nbsp;населения&mdash;2016»</p>
                        </div>
                        <div class="about__reward">
                            <img src="/img/trophy-003.png" alt="">
                            <h3>Бизнес-премия Дальнего Востока</h3>
                            <p class="text">«Лучший производитель натяжных потолков
                            на&nbsp;Дальем&nbsp;Востоке–2012»</p>
                        </div>
						<a class="about__all-rewards" href="javascript:void(0);">Смотреть все награды</a>
                    </div>
                    <div class="about__staff">
                        <img src="/img/about/group-photo.png" alt="">
                    </div>
            </div>
        </section>

        <section class="videogallery">
            <!-- <button type="button" class="videogallery__prev"></button> -->
            <div class="videogallery__slider">
                <div class="videogallery__slide active">
                    <h2>Собственное производство</h2>
                    <iframe src="https://www.youtube.com/embed/ZzBDdgLxTxE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p class="text">Собственное производство снимает любые ограничения на цвет, фактуру и конфигурацию натяжного полотна. Мы изготавливаем потолки по индивидуальному заказу, не ориентируясь на сезонность коллекций и не ограничивая вас одними лишь имеющимися каталогами.</p>
                </div>
            </div>
            <!-- <button type="button" class="videogallery__next"></button> -->
        </section>

    @include('common.gui.footer')
@endsection
