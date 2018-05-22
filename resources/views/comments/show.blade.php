@extends('layouts.other')

@section('style')
<style type="text/css">
	body{
		background-color: #f0f2f5;
	}
	.content-main{
		background-color: #ffffff;
  		border: 1px solid #eeeeee;
  		padding:22px;
  		border-radius: 4px;
    	box-shadow: 0 0px 1px #c2c2c2;
	}
	footer{
		margin-top: 22px;
	}
</style>
@stop

@section('content')

				<div class="col-sm-2">

				</div>
				<div class="col-sm-8">

						@include('shared._message')
	<div class="content-main">
	@include('comments._store')
	@include('comments._disp')
	</div>

				</div>
				<div class="col-sm-2">

				</div>



@stop