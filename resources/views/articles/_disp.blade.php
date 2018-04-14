@include('articles._search')

@if(count($articles) > 0)
<ul class="list-unstyled statuses">
	@foreach($articles as $article)
	@include('articles._article')
	@endforeach
</ul>
{!! $articles->render() !!}
@endif