<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ZiLong's blog</title>
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1" name="viewport">
<!--Fav-->
<link href="/images/favicon.ico" rel="shortcut icon">

<!--styles-->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/owl.carousel.css" rel="stylesheet">
<link href="/css/owl.theme.css" rel="stylesheet">
<link href="/css/magnific-popup.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">

<!--fonts google-->
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

@yield('style')

<!--[if lt IE 9]>
   <script type="text/javascript" src="js/html5shiv.min.js"></script>
<![endif]-->
</head>
<body>
	<!--CONTENT WRAP-->
<div class="content-wrap">
  <!--CONTENT-->
  <div class="content">

	@include('texiao.zhairu')

	@include('layouts._header')
	<div class="container-fluid" style="padding-top: 70px">
		<div class="row">
			<div class="article_background" >
				<div class="col-sm-3">

				</div>
				<div class="col-sm-6">

					@yield('content')

				</div>
				<div class="col-sm-3">

				</div>
			</div>
		</div>

	</div>

	@include('layouts._footer')

	<!--/.CONTENT END-->
  </div>
<!--/.CONTENT-WRAP END-->
</div>

<script src="/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/js/jquery.appear.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/classie.js" type="text/javascript"></script>
<script src="/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="/js/masonry.pkgd.min.js" type="text/javascript"></script>
<script src="/js/masonry.js" type="text/javascript"></script>
<script src="/js/smooth-scroll.min.js" type="text/javascript"></script>
<script src="/js/typed.js" type="text/javascript"></script>
<script src="/js/main.js" type="text/javascript"></script>

</body>
</html>