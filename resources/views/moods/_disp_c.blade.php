@if(count($comments) > 0)

	@foreach($comments as $comment)
	@include('moods._comment')
	@endforeach

{!! $comments->render() !!}
@endif