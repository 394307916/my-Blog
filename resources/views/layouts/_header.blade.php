<!-- 
<div class="header" id="top">
  <div class="for-sticky">

	<div class="col-md-2 col-xs-6 logo">
	  <a href="{{ route('home') }}"><img alt="logo" class="logo-nav" src="/images/logo.png"></a>
	</div>
	<div class="col-md-1">
		<a href="{{ route('home') }}">主页</a>
	</div>
	<div class="col-md-1 col-xs-6">
		<a href="{{ route('articles.index') }}">文章</a>
	</div>
	<div class="col-md-1 col-xs-6">
		<a href="{{ route('moods.show') }}">说说</a>
	</div>
	<div class="col-md-1 col-xs-6">
		<a href="{{ route('link.show') }}">常用链接</a>
	</div>
	<div class="col-md-1 col-xs-6">
		<a href="{{ route('comment.show') }}">留言板</a>
	</div>

  </div>
  <div class="menu-wrap">
	<nav class="menu">
	  <div class="menu-list">
		<a href="{{ route('home') }}">
		  <span>主页</span>
		</a>
		<a href="{{ route('articles.index') }}">
		  <span>文章</span>
		</a>
		<a href="{{ route('moods.show') }}">
		  <span>说说</span>
		</a>
		<a href="{{ route('link.show') }}">
		  <span>常用链接</span>
		</a>
		<a href="{{ route('comment.show')}}">
		  <span>留言板</span>
		</a>
		
		
	  </div>
	</nav>
	
  </div>
  <button class="menu-button" id="open-button">
	<span></span>
	<span></span>
	<span></span>
  </button>
</div> -->

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('home') }}">yzloo.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ route('home') }}">主页</a></li>
      <li><a href="{{ route('articles.index') }}">文章</a></li>
      <li><a href="{{ route('moods.show') }}">说说</a></li> 
      <li><a href="{{ route('link.show') }}">常用链接</a></li> 
      <li><a href="{{ route('comment.show') }}">留言板</a></li>
    </ul>
  </div>
</nav>
