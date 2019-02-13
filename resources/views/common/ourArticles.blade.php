<section class="ourArticles" id="articles">
    @include('common.gui.titles', ['secondTitle' => 'Наши посты с социальных сетей '])
    <p class="intro titles__intro">
        Вы&nbsp;можете посмотреть все посты в&nbsp;удобной для вас социальной сети , либо нажмите кнопку &laquo;Все посты&raquo; и&nbsp;на&nbsp;новой странице вы&nbsp;можете отфильтровать и&nbsp;посмотреть интересную информацию.
    </p>
    <div class="socials titles__socials container">
        <a href="" class="socials__item red-hoverable">
            <div class="socials__icon socials__icon_inst"></div>
        </a>
        <a href="" class="socials__item red-hoverable">
            <div class="socials__icon socials__icon_fb"></div>
        </a>
        <a href="" class="socials__item red-hoverable">
            <div class="socials__icon socials__icon_vk"></div>
        </a>
        <a href="" class="socials__item red-hoverable">
            <div class="socials__icon socials__icon_ok"></div>
        </a>
        <a href="" class="socials__item red-hoverable">
            <div class="socials__icon socials__icon_youtube"></div>
        </a>
    </div>
    <div class="ourArticles__list">
        <posts :posts="{{ $articles }}"></posts>
    </div>
   
   <a href="http://89.108.103.224/sochi/articles" class="ourArticles__button">Все посты</a>

</section>
