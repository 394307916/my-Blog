
<div class="content-main">
	<div class="content-search">
		@include('articles._search')
	</div>

	<div class="content-body" >
		@if(count($articles) > 0)
		<ul class="list-unstyled statuses" id="article_body">
			@foreach($articles as $article)
			@include('articles._article')
			@endforeach
		</ul>
		{!! $articles->render() !!}
		@endif
	</div>
</div>