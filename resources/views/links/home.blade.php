@extends('layouts.other')

@section('style')
<style type="text/css">
body{
	background-color: #f2f2f5;
}

footer{
  	margin-top: 22px;
  }

p{
	text-align: center;
}

/* Effect 16: fall down */

.cl-effect-16 a {
	font-size: 25px;
	font-weight: 500;
	color: #6f8686;
	text-shadow: 0 0 1px rgba(111,134,134,0.3);
	padding:22px;
}

.cl-effect-16 a::before {
	color: #F08080;
	content: attr(data-hover);
	position: absolute;
	opacity: 0;
	text-shadow: 0 0 1px rgba(255,255,255,0.3);
	-webkit-transform: scale(1.1) translateX(10px) translateY(-10px) rotate(4deg);
	-moz-transform: scale(1.1) translateX(10px) translateY(-10px) rotate(4deg);
	transform: scale(1.1) translateX(10px) translateY(-10px) rotate(4deg);
	-webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
	-moz-transition: -moz-transform 0.3s, opacity 0.3s;
	transition: transform 0.3s, opacity 0.3s;
	pointer-events: none;
}

.cl-effect-16 a:hover::before,
.cl-effect-16 a:focus::before {
	-webkit-transform: scale(1) translateX(0px) translateY(0px) rotate(0deg);
	-moz-transform: scale(1) translateX(0px) translateY(0px) rotate(0deg);
	transform: scale(1) translateX(0px) translateY(0px) rotate(0deg);
	opacity: 1;
}

/*搜索框1*/
  input{
  	border: none;
  	outline: none;
  }

  input {
  	width: 300px;
  	height: 42px;
  	padding-left: 13px;
  	margin-bottom: 18px;
  }
        

  .bar1 input {
  	border: 2px solid #7BA7AB;
  	border-radius: 5px;
  	background: #fff;
  	color: #9E9C9C;
  }

</style>
@stop

@section('content')

	@include('links._search')
	@include('links._link')
	
@stop

@section('script')

<script src="/js/link_search.js" type="text/javascript"></script>

@stop