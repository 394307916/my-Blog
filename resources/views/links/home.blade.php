@extends('layouts.other')

@section('style')
<style type="text/css">
body{
	background-color: #ecf0f1;
}

.effect-7 nav a {
	position: relative;
	display: inline-block;
	margin: 15px 25px;
	outline: none;
	color: #566473;
	text-decoration: none;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 400;
	text-shadow: 0 0 1px rgba(255,255,255,0.3);
	font-size: 1.35em;
}

.effect-7 nav a:hover,
nav a:focus {
	outline: none;
}

/* Effect 7: second border slides up */
.cl-effect-7 a {
	padding: 12px 10px 10px;
	color: #566473;
	text-shadow: none;
	font-weight: 700;
}

.cl-effect-7 a::before,
.cl-effect-7 a::after {
	position: absolute;
	top: 100%;
	left: 0;
	width: 100%;
	height: 3px;
	background: #566473;
	content: '';
	-webkit-transition: -webkit-transform 0.3s;
	-moz-transition: -moz-transform 0.3s;
	transition: transform 0.3s;
	-webkit-transform: scale(0.85);
	-moz-transform: scale(0.85);
	transform: scale(0.85);
}

.cl-effect-7 a::after {
	opacity: 0;
	-webkit-transition: top 0.3s, opacity 0.3s, -webkit-transform 0.3s;
	-moz-transition: top 0.3s, opacity 0.3s, -moz-transform 0.3s;
	transition: top 0.3s, opacity 0.3s, transform 0.3s;
}

.cl-effect-7 a:hover::before,
.cl-effect-7 a:hover::after,
.cl-effect-7 a:focus::before,
.cl-effect-7 a:focus::after {
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	transform: scale(1);
}

.cl-effect-7 a:hover::after,
.cl-effect-7 a:focus::after {
	top: 0%;
	opacity: 1;
}
</style>
@stop

@section('content')

	@include('links._link')
	
@stop