@if(count($comments) > 0)
<ul class="list-unstyled statuses">
	@foreach($comments as $comment)
	@include('comments._comment')
	@endforeach
</ul>
{!! $comments->render() !!}
@endif