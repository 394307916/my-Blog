<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ route('home') }}">yzloo.com</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="{{ route('home') }}">主页</a></li>
				<li><a href="{{ route('articles.index') }}">文章</a></li>
				<li><a href="{{ route('moods.show') }}">留言</a></li> 
				<li><a href="{{ route('link.show') }}">常用链接</a></li> 
				
			</ul>
		</div>
	</div>
</nav>
