@extends('layouts.default')

@section('style')
<style type="text/css">
  body{
    background-color: #f0f2f5;
  }
  .content-main{
    background-color: #ffffff;
    border: 1px solid #eeeeee;
  }
  .content-body{
    padding-left:22px;
    padding-right: 22px;
    font-weight: normal;
  }
  .content-body a{
    color: #d6514d;
    text-decoration: underline;
  }
  .content-body h1,h2,h3,h4,h5,h6{
    font-weight:600;
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
<div class="container-fluid" style="padding-top: 65px">
  <div class="row">
  	<div class="article_background" >
  		<div class="col-sm-2"></div>

  		<div class="col-sm-8">
        <div class="content-main">

          <div class="content-title">
         <h2 style="text-align: center" class="year">{{ $article->title }}</h2>
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

  		<div class="col-sm-2"></div>
  	</div>
  </div>

</div>
@stop

@section('back')
  <a id="backUp" href="javascript:history.go(-1)" style="position: fixed; z-index: 2147483647;display: black">back to behind</a>
@stop
