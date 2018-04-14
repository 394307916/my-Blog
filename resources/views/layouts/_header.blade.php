<!--HEADER -->
<div class="header" >
  <div class="for-sticky">
	<!--LOGO-->
	<div class="col-md-2 col-xs-6 logo">
	  <a href="{{ route('home') }}"><img alt="logo" class="logo-nav" src="/images/logo.png"></a>
	</div>
	<!--/.LOGO END-->
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
  </button><!--/.for-sticky-->
</div>
<!--/.HEADER END-->