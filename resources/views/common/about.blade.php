@extends('common.layout')

@section('content')
    @include('common.header')

    <div class="page__about">
        <div class="container">
            <p class="overtitle">ИНФОРМАЦИЯ О КОМПАНИИ</p>
            <h1 class="title">Фабрика пластиковых окон "Твой стиль" <br>в Сочи</h1>
        </div>
        <section class="about">
            <div class="page__inner">
                <blockquote class="about__quote">
                    <div class="container">
                        <p>
                            Собственное производство снимает любые ограничения
                            на цвет, конфигурацию <br>
                            и фактуру натяжного полотна <br>
                        </p>
                    </div>
                </blockquote>
                <div class="container">
                    <div class="about__heading">
                        <p class="about__subtitle">За более чем 10 лет работы компания «Твой стиль» из небольшого офиса в Хабаровске выросла в крупную сеть, которая сейчас насчитывает 8 представительств в России, в том числе и офис в Сочи. Мы заслужили доверие сотни заказчиков по всей стране, благодаря качественному производству, профессиональной команде и высокому уровню предоставляемых услуг.</p>
                        <p class="about__desc">Именно мы одними из первых в России стали применять технологию фотопечати для натяжных потолков, и мы не планируем останавливаться на достигнутом. Специалисты компании «Твой стиль» всегда в курсе последних тенденций мира натяжных потолков и готовы предложить вам самые неожиданные и сложные дизайн-проекты для вашего помещения.</p>
                        <div class="about__images">
                            <img src="/img/01.jpg" alt="" class="about__image fitImage">
                            <img src="/img/02.jpg" alt="" class="about__image fitImage">
                            <img src="/img/03.jpg" alt="" class="about__image fitImage">
                            <img src="/img/04.jpg" alt="" class="about__image fitImage">
                            <img src="/img/05.jpg" alt="" class="about__image fitImage">
                            <img src="/img/06.jpg" alt="" class="about__image fitImage">
                        </div>
                        <button class="about__button">Смотреть все фото</button>
                    </div>
                </div>
            </div>
            <div class="about__content">
                <div class="container">
                    <p class="about__desc">Собственное производство снимает любые ограничения на цвет, фактуру и конфигурацию натяжного полотна. Мы изготавливаем потолки по индивидуальному заказу, не ориентируясь на сезонность коллекций и не ограничивая вас одними лишь имеющимися каталогами.</p>
                    <p class="about__desc">Натяжные потолки с компанией «Твой стиль» стали еще доступнее. Мы предоставляем вам не только полную свободу дизайнерской мысли, но и не забываем о цене – наши натяжные потолки одни из самых доступных по стоимости в Сочи. Доверяйте профессионалам!</p>
                    <h2>Награды компании «Твой стиль»</h2>
                    <div class="about__rewards">
                        <div class="about__reward">
                            <img src="/img/trophy-001.png" alt="">
                            <h3>«Лучший товар Приморья»</h3>
                            <p>«Народный бренд в сфере <br>
                            строительных услуг»</p>
                        </div>
                        <div class="about__reward">
                            <img src="/img/trophy-002.png" alt="">
                            <h3>«ГЕММА» — лучшие товары и услуги</h3>
                            <p>«Профессионализм в сфере продаж <br>
                            и обслуживания населения–2016»</p>
                        </div>
                        <div class="about__reward">
                            <img src="/img/trophy-003.png" alt="">
                            <h3>Бизнес-премия Дальнего Востока</h3>
                            <p>«Лучший производитель натяжных потолков <br>
                            на Дальем Востоке–2012»</p>
                        </div>
                    </div>
                    <img src="/img/group-photo.jpg" alt="" class="about__staff">
                </div>
            </div>
        </section>
    </div>
    @include('common.videogallery')
    @include('common.message-dir-open')
	@include('common.form-request-open')
    @include('common.footer')
@endsection
