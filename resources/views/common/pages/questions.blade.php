@extends('common.layout')

@section('content')
    @include('common.gui.header')

    <div class="page__questions">
        <div class="container">
            <p class="overtitle">ВОПРОС-ОТВЕТ</p>
            <h1 class="title">Вопросы и ответы о натяжных потолках</h1>
            <p class="intro">
                В этом разделе мы собрали ответы на самые популярные вопросы. А если вы не нашли интересующую вас информацию, наши менеджеры с удовольствием дадут вам полную консультацию.
            </p>
        </div>
        <section class="questions">
            <div class="container">
                <div class="page__inner">
                    <div class="questions__filter">
                            <button data-type="techInfo" class="questions__filter-item questions__techInfo js-active">Техническая информация</button >
                                <button data-type="price" class="questions__filter-item questions__price">Стоимость, акции, скидки</button >
                                    <button data-type="termins" class="questions__filter-item questions__termins">Основные термины</button >
                                        <button data-type="garanty" class="questions__filter-item questions__garanty">Гарантия, договор, сертификаты</button >
                                            <button data-type="installQuestions" class="questions__filter-item questions__installQuestions">Вопросы по установке</button >
                                            </div>
                                            <div class="questions__content" id="questions-ajax-content">
                                                <section class="questions__card">
                                                    <h2>Возможен ли монтаж натяжного потолка в комнате с печным отоплением, труба печки выложена из кирпича?</h2>
                                                    <p>Да, возможен</p>
                                                </section>
                                                <section class="questions__card">
                                                    <h2>Делает ли Ваша компания слив воды?</h2>
                                                    <p>Да</p>
                                                </section>
                                                <section class="questions__card">
                                                    <h2>Возможен ли монтаж натяжного потолка в комнате с печным отоплением, труба печки выложена из кирпича?</h2>
                                                    <p>Да, возможен</p>
                                                </section>
                                                <section class="questions__card">
                                                    <h2>Делает ли Ваша компания слив воды?</h2>
                                                    <p>Да</p>
                                                </section>
                                                <section class="questions__card">
                                                    <h2>Делает ли Ваша компания слив воды?</h2>
                                                    <p>Да</p>
                                                </section>
                                                <section class="questions__card">
                                                    <h2>Возможен ли монтаж натяжного потолка в комнате с печным отоплением, труба печки выложена из кирпича?</h2>
                                                    <p>Да, возможен</p>
                                                </section>
                                                <section class="questions__card">
                                                    <h2>Делает ли Ваша компания слив воды?</h2>
                                                    <p>Да</p>
                                                </section>
                                            </div>
                                            <div class="questions__filter">
                                                <button data-type="techInfo" class="questions__filter-item questions__techInfo js-active">Техническая информация</button >
                                                    <button data-type="price" class="questions__filter-item questions__price">Стоимость, акции, скидки</button >
                                                        <button data-type="termins" class="questions__filter-item questions__termins">Основные термины</button >
                                                            <button data-type="garanty" class="questions__filter-item questions__garanty">Гарантия, договор, сертификаты</button >
                                                                <button data-type="installQuestions" class="questions__filter-item questions__installQuestions">Вопросы по установке</button >
                                                                </div>
                                                            </section>
                                                        </div>
                </div>
            </div>
        </section>


    </div>
    @include('common.gui.footer')
@endsection
