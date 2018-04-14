@foreach($links as $link)

<a href="{{ $link->address }}"><p>{{ $link->name }}</p></a>

@endforeach