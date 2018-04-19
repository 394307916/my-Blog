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

  input {
  	border: none;
  	outline: none;
  	width: 300px;
  	height: 42px;
  	padding-left: 13px;
  	margin-bottom: 12px;
  	margin-top: 10px;
  }
        
  .bar1 {background: #fff;}
  .bar1 input {
  	border: 2px solid #7BA7AB;
  	border-radius: 5px;
  	background: #fff;
  	color: #9E9C9C;
  }
</style>
@stop

@section('content')

 	@include('articles._disp')

@stop

@section('script')

<script src="/js/article_search.js" type="text/javascript"></script>

@stop