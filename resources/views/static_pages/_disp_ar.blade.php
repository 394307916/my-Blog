<a href="{{ route('articles.show',$article->id) }}">
	<li>
		<div class="col-md-6 col-sm-6">
			<div class="wrap-card">
				<div class="card">
					<h2 class="year">
						{{ $article->title }}
					</h2>
					<p class="job">
						<span class="glyphicon glyphicon-user"></span>
						{{ $article->author }}
					</p>
					<p class="job">
						<span class="glyphicon glyphicon-time"></span>
						{{ $article->updated_at }}
					</p>
					<hr>
					<div class="text-detail">
						<p>
							{{ $article->description }}
						</p>
					</div>
				</div>
			</div>
		</div>
	</li>
</a>