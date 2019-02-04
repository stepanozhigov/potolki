<div class="titles {{ $class ?? '' }}">
    @isset($overtitle)
        <p class="overtitle titles__overtitle">{!! $overtitle !!}</p>
    @endisset

    @isset($title)
        <h1 class="title titles__title">{!! $title !!}</h1>
    @endisset

    @isset($secondTitle)
        <h2 class="second-title titles__second-title">{!! $secondTitle !!}</h2>
    @endisset

    @empty($lineless)
        <hr class="line titles__line">
    @endempty

    @isset($intro)
        <p class="intro titles__intro">{!! $intro !!}</p>
    @endisset
    <button class="titles__arrow" type="button"></button>
</div>
