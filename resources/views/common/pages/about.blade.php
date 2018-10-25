@extends('common.layout')

@section('content')
    @include('common.gui.header')
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'ИНФОРМАЦИЯ О КОМПАНИИ',
            'title' =>  "Фабрика пластиковых окон \"Твой стиль\" {$city->name_formatted}",
            'intro' =>  "За более чем 10 лет работы фабрика пластиковых окон «Твой стиль» из небольшого офиса в Хабаровске выросла в крупную сеть,
                         которая сейчас насчитывает 8 представительств в России, в том числе и офис {$city->name_formatted}. Мы заслужили доверие сотни заказчиков по всей стране,
                         благодаря качественному производству, профессиональной команде и высокому уровню предоставляемых услуг."          
        ])
        <section class="about b-texture container">
            <div class="about__images">
                <img src="/img/about/01.jpg" alt="" class="about__image fitImage">
                <img src="/img/about/02.jpg" alt="" class="about__image fitImage">
                <img src="/img/about/03.jpg" alt="" class="about__image fitImage">
                <img src="/img/about/04.jpg" alt="" class="about__image fitImage">
                <img src="/img/about/05.jpg" alt="" class="about__image fitImage">
                <img src="/img/about/06.jpg" alt="" class="about__image fitImage">
            </div>

            <div class="about__content">
                    <p class="about__desc text">
                        Надежные ПВХ-системы и легкие алюминиевые конструкции — самые оптимальные варианты не только для остекления помещений, но и для изготовления перегородок, а также входных и межкомнатных дверей. У нас есть собственная фабрика, где мы производим стандартные конструкции и системы по индивидуальным проектам с учетом всех особенностей помещения и пожеланий заказчика.
                    </p>
                    <p class="about__desc text">В компании всегда бесплатный замер и безупречный сервис. Наши специалисты рады помочь вам в подборе любого оборудования из каталогов «Твой стиль». Оставьте свой номер телефона в поле для обратной связи или заходите в наш офис в вашем городе, чтобы ознакомиться со всем ассортиментом.</p>
                    @include('common.gui.titles', ['secondTitle' => 'Награды компании «Твой стиль»'])
                    <div class="about__rewards">
                        <div class="about__reward">
                            <img src="/img/trophy-001.png" alt="">
                            <h3>«Лучший товар Приморья»</h3>
                            <p class="text">«Народный бренд в сфере <br>
                            строительных услуг»</p>
                        </div>
                        <div class="about__reward">
                            <img src="/img/trophy-002.png" alt="">
                            <h3>«ГЕММА» — лучшие товары и услуги</h3>
                            <p class="text">«Профессионализм в сфере продаж <br>
                            и обслуживания населения–2016»</p>
                        </div>
                        <div class="about__reward">
                            <img src="/img/trophy-003.png" alt="">
                            <h3>Бизнес-премия Дальнего Востока</h3>
                            <p class="text">«Лучший производитель натяжных потолков <br>
                            на Дальем Востоке–2012»</p>
                        </div>
                    </div>
                    <img src="/img/about/group-photo.jpg" alt="" class="about__staff">
            </div>
        </section>
    @include('common.gui.footer')
@endsection
