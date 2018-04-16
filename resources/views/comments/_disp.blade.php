@if(count($comments) > 0)

	@foreach($comments as $comment)
	@include('comments._comment')
	@endforeach

{!! $comments->render() !!}
@endif