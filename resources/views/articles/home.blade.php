@extends('layouts.other')

@section('style')
<style type="text/css">
  body{
    background-color: #f0f2f5;
  }
  .content-main{
  	background-color: #ffffff;
  	border: 1px solid #eeeeee;
    border-radius: 4px;
    box-shadow: 0 0px 1px #c2c2c2;
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
    padding-left: 22px;
  }
  .content-article p{
  	font-size: 14px;
  	color:#a9a7a7;
  }
  .article_author{
  	color:#8FBC8F;
    font-size: 16px;
    float: right;
    padding-right: 10px;
  }
  .article_title{
    font-size: 16px;
    color: #808080;
  }
  .content-article a:hover{
    text-shadow:0 0 0.2em #FA8072, 0 0 0.2em #FA8072;
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
 
        <div class="col-sm-8">

        @include('articles._disp')

        </div>
        <div class="col-sm-2">

        </div>
 	

@stop

@section('script')

<script src="/js/article_search.js" type="text/javascript"></script>

@stop
