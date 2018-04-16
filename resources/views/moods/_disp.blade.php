
@if(count($moods) > 0)

	@foreach($moods as $mood)
	@include('moods._mood')
	@endforeach


@endif