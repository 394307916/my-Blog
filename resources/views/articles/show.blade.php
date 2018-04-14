@extends('layouts.default')

@section('content')
<div class="container-fluid" style="padding-top: 65px">
  <div class="row">
  	<div class="article_background" >
  		<div class="col-sm-2">

  		</div>
  		<div class="col-sm-8">

  			<h2 style="text-align: center">{{ $article->title }}</h2>
        <h4 style="text-align: center">
          <span class="glyphicon glyphicon-user"></span>{{ $article->author }}
          <span class="glyphicon glyphicon-time"></span>{{ $article->updated_at}}
        </h4>

        <div class="main_content" style="border-top: 1px solid #e8e8e8;">
          {{ $article->content }}
        </div>
  		</div>
  		<div class="col-sm-2">

  		</div>
  	</div>
  </div>

</div>
@stop