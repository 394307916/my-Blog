<div class="effect-16">
<nav class="cl-effect-16" id="all_link">

@foreach($links as $link)

<p><a href="{{ $link->address }}" data-hover="{{$link->name}}" target="_blank">{{ $link->name }}</a></p>

@endforeach

</nav>
</div>
