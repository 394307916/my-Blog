<div class="content-mood">
<h5>
	<span class="glyphicon glyphicon-time"></span>
	{{ $mood->created_at->diffForHumans()}}
</h5>
<p>{{ $mood->content }}</p>
</div>
