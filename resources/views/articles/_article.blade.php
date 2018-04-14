<li>
	<a href="{{ route('articles.show',$article->id) }}">
		<div>
			<h3><strong>{{ $article->title }}</strong></h3>
			<h5>
				<span class="glyphicon glyphicon-user"></span>{{ $article->author }}
				<span class="glyphicon glyphicon-time"></span>{{ $article->updated_at}}
			</h5>
			<p>{{ $article->description}}</p>
		</div>
	</a>
</li>

