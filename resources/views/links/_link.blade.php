<div class="effect-7">
<nav class="cl-effect-7">

@foreach($links as $link)

<a href="{{ $link->address }}" target="_blank">{{ $link->name }}</a>

@endforeach

</nav>
</div>
