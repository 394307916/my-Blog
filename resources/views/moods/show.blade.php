@extends('layouts.other')

@section('style')
<style type="text/css">
	body{
		background-color: #f0f2f5;
	}
	.content-mood{
		border: 1px solid #eeeeee;
		background-color: #fff;
		margin: 10px;
		padding:18px;
		border-radius: 4px;
    	box-shadow: 0 0px 1px #c2c2c2;
	}
	h5{
		color:#808080;
	}
</style>
@stop

@section('content')

				<div class="col-sm-2">

				</div>
				<div class="col-sm-8">

					@include('moods._disp')

				</div>
				<div class="col-sm-2">

				</div>
  

@stop