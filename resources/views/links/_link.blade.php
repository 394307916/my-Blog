<div class="effect-16">
<nav class="cl-effect-16">

@foreach($links as $link)

<p><a href="{{ $link->address }}" data-hover="{{$link->name}}">{{ $link->name }}</a></p>

@endforeach

</nav>
</div>
