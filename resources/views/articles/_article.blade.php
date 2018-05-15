<div class="content-article">
<li>
	<a href="{{ route('articles.show',$article->id) }}">
		<div>
			<div class="article_title" title="{{ $article->description}}">
				{{ $article->title }}
				<span class="article_author">
				<span class="glyphicon glyphicon-user"></span>{{ $article->author }}
				<span class="glyphicon glyphicon-time"></span>{{ $article->updated_at}}
				</span>
			</div>
<!-- 			<p>{{ $article->description}}</p> -->
		</div>
	</a>
</li>
</div>

