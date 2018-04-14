<form action="{{ route('search')}}" method="GET">
	{{ csrf_field() }}
	<div class="search" style="text-align: center">
		<span class="glyphicon glyphicon-search"></span>&nbsp&nbsp
		<input type="text" name="sou">
		<button type="submit" class="btn btn-default">查找</button>
	</div>
</form>

<br>
