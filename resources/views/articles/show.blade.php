@extends('layouts.default')

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
  .content-body{
    padding-left:22px;
    padding-right:22px;
    padding-top:5px;
    font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;
  }
  .content-body a{
    color: #d6514d;
    text-decoration: underline;
  }

  footer{
    margin-top: 22px;
  }
  .content-title{
    border-bottom: 1px solid #eeeeee;
    padding:15px;
  }

  .content-title h4{
    color:#a9a7a7;
  }

</style>
@stop

@section('content')
<div class="container-fluid" id="container-content">
  <div class="row">
  	<div class="article_background" >
  		<div class="col-sm-1"></div>

  		<div class="col-sm-10">
        <div class="content-main">

          <div class="content-title">
         <h2 style="text-align: center">{{ $article->title }}</h2>
         <h4 style="text-align: center">
          <span class="glyphicon glyphicon-user"></span>{{ $article->author }}
          <span class="glyphicon glyphicon-time"></span>{{ $article->updated_at}}
        </h4>
      </div>
        <div class="content-body">
    
          {!! $article->content !!}
          
        </div>
      </div>
    </div>

  		<div class="col-sm-1"></div>
  	</div>
  </div>

</div>
@stop

