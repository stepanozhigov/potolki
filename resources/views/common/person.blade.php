<a href="{{ !empty($link) ? $link:'' }}" class="person {{ !empty($class) ? $class:'' }}">
    <img src="{{ $img }}" alt="" class="person__photo">
    <p class="person__name">{{ $name }}</p> 
</a>