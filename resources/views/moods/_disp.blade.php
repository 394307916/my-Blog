@if(count($moods) > 0)
<ul class="list-unstyled statuses">
	@foreach($moods as $mood)
	@include('moods._mood')
	@endforeach
</ul>
{!! $moods->render() !!}
@endif