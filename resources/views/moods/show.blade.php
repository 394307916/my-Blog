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
	}
</style>
@stop

@section('content')

  @include('moods._disp')

@stop