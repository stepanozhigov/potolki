@extends('common.layout')
    @section('content')
        @include('common.gui.header')
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'ОБРАТНАЯ СВЯЗЬ',
            'title' =>  "Отзывы о компании \"Твой стиль\" {{ $city->name_formatted }}",
            'intro' =>  "Сюда нужно добавить какой-нибудь текст про страницу. А так же о том, что пользователь может оставить отзыв и получить что-нибудь хорошее (например средство за уходом, скидку или другой подарок)."
        ])
        <section class="reviews container">
            @foreach ($reviews as $review)
                @include('common.gui.review', $review)    
            @endforeach
            <div class="overlay overlay_active"></div>
            <div class="popup popup_review popup_active">
                <img src="/img/gui/close.svg" alt="" class="popup__close js-close">
                <div class="review review_popup">
                    <div class="review__body b-card">
                        @include('common.gui.person', ['class' => 'review__person', 'name' => $review->fio, 'img' => Storage::url($review->avatar), 'text' => null ])
                        <hr class="line review__line">
                        <p class="subtext review__date">{{ $review->created_at}}</p>
                        <p class="subtext review__text review__text_full">
                                {{ $review->text }}
                        </p>
                        <div class="review__media review__media_popup">
                            @foreach ($review->photos() as $photo)
                                <img class="review__img" src="{{ Storage::url($photo) }}" alt="">    
                            @endforeach
                        </div>
                        
                        <video class="review__video" controls src="{{ Storage::url($review->video()) }}"></video>
                    </div>
                </div>
                @isset($review->comments)
                    <div class="review__comments">
                        @foreach ($review->comments as $comment)
                            <div class="comment comment_{{ $comment->type }}">
                                <p class="third-title comment__title">{{ $comment->type == 'manager' ? 'Ответ менеджера':'Комментарий клиента' }}</p>
                                <hr class="line comment__line">
                                <p class="text comment__text">
                                    {{ $comment->text }}
                                </p>

                                <div class="comment__user comment__user_{{ $comment->type }} user">
                                    @if ($comment->type == 'manager')
                                        <div class="user__left">
                                            <p class="text user__name">{{ $comment->user->name }}</p>
                                            <p class="text user__position">{{ $comment->user->position }}</p>
                                        </div>
                                        <div class="user__right">
                                            <img src="{{ Storage::url($comment->user->avatar) }}" alt="" class="user__avatar">
                                        </div>                                    
                                    @else
                                        <div class="user__left">
                                            <img src="{{ Storage::url($comment->avatar) }}" alt="" class="user__avatar">
                                        </div>
                                        <div class="user__right">
                                            <p class="text user__name">{{ $comment->fio }}</p>
                                        </div> 
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        <div class="js-add-comment" id="add-comment-12">
                            <add-comment :review="1"></add-comment>
                        </div>
                    </div>
                @endisset
            </div>
            <div class="paginator reviews__paginator">
                <a href="" class="paginator__item paginator__item_active">1</a>
                <a href="" class="paginator__item">2</a>
                <a href="" class="paginator__item">3</a>
            </div>
        </section>
        @include('common.gui.footer')
        <script src="https://vk.com/js/api/openapi.js?146" type="text/javascript"></script>
    @endsection