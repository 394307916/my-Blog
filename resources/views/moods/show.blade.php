@extends('layouts.default')

@section('style')
<style type="text/css">
body{
	background-color: #f0f2f5;
}
.content-mood{
	color: #fff;
	border: 1px solid #eeeeee;
	background-color: 	#E9967A;
	margin: 10px;
	padding:18px;
	margin-top: 18px;
	border-radius: 4px;
	box-shadow: 0 0px 1px #c2c2c2;
}

.content-comment{
	border: 1px solid #eeeeee;
	background-color: 	#fff;
	margin: 10px;
	padding:18px;
	margin-top: 18px;
	border-radius: 4px;
	box-shadow: 0 0px 1px #c2c2c2;
}

.content-main{
	background-color: #6495ED;
	border: 1px solid #eeeeee;
	padding:22px;
	margin-top: 18px;
	border-radius: 4px;
	box-shadow: 0 0px 1px #c2c2c2;
}

h5{
	color:#808080;
}

footer{
	padding-top: 22px;
}
</style>
@stop

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-5">
			@include('moods._disp')
		</div>

		<div class="col-sm-5">
			
			<div class="content-main">
				@include('shared._message')
				@include('moods._store')
				@include('moods._disp_c')
			</div>
		</div>

		<div class="col-sm-1"></div>
	</div>
</div>

@stop

@section('back')
<a id="scrollUp" href="javascript:void(0)" style="position: fixed; z-index: 2147483647;display: block">Scroll to top</a>
@stop