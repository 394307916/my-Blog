<div class="panel panel-default">
	<div class="panel-heading">
		<h5>
			<span class="glyphicon glyphicon-user"></span>{{ $comment->name }}
			<span class="glyphicon glyphicon-time"></span>
			{{ $comment->created_at->diffForHumans()}}
		</h5>
	</div>
	<div class="panel-body">
		<p>{{ $comment->content }}</p>
	</div>
</div>
