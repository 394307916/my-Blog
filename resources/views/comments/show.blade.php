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
	}
	footer{
		margin-top: 22px;
	}
</style>
@stop

@section('content')
	@include('shared._message')
	<div class="content-main">
	@include('comments._store')
	@include('comments._disp')
	</div>
@stop