@extends('layouts.other')

@section('style')
<style type="text/css">
  body{
    background-color: #f0f2f5;
  }
  .content-main{
  	background-color: #ffffff;
  	border: 1px solid #eeeeee;
  }

  footer{
  	margin-top: 22px;
  }
  .content-search{
  	border-bottom: 1px solid #eeeeee;
  	padding:15px;
  }
  .content-article{
  	border-bottom: 1px solid #eeeeee;
  	padding: 18px;
  }
  .content-article p{
  	font-size: 14px;
  	color:#a9a7a7;
  }
  .content-article h5{
  	color:#a9a7a7;
  }

  /*搜索框1*/
  form {
  	position: relative;
  	width: 300px;
  	margin: 0 auto;
  }

  input, button {
  	border: none;
  	outline: none;
  }

  input {
  	width: 100%;
  	height: 42px;
  	padding-left: 13px;
  }

  button {
  	height: 42px;
  	width: 42px;
  	cursor: pointer;
  	position: absolute;
  }
        
  .bar1 {background: #fff;}
  .bar1 input {
  	border: 2px solid #7BA7AB;
  	border-radius: 5px;
  	background: #fff;
  	color: #9E9C9C;
  }
  .bar1 button {
  	top: 0;
  	right: 0;
  	background: #7BA7AB;
  	border-radius: 0 5px 5px 0;
  }
  .bar1 button:before {
  	content: "\f002";
  	font-family: FontAwesome;
  	font-size: 16px;
  	color: #F9F0DA;
  }
</style>
@stop

@section('content')

 	@include('articles._disp')

@stop