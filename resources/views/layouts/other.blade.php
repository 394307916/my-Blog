<!--  
                                                          _ooOoo_
                                                         o8888888o
                                                         88" . "88
                                                         (| -_- |)
                                                          O\ = /O
                                                      ____/`---'\____
                                                    .   ' \\| |// `.
                                                     / \\||| : |||// \
                                                   / _||||| -:- |||||- \
                                                     | | \\\ - /// | |
                                                   | \_| ''\---/'' | |
                                                    \ .-\__ `-` ___/-. /
                                                 ___`. .' /--.--\ `. . __
                                              ."" '< `.___\_<|>_/___.' >'"".
                                             | | : `- \`.;`\ _ /`;.`/ - ` : | |
                                               \ \ `-. \_ __\ /__ _/ .-` / /
                                       ======`-.____`-.___\_____/___.-`____.-'======
                                                          `=---='

                                       .............................................
                                              佛祖保佑             永无BUG
                                      佛曰:
                                              写字楼里写字间，写字间里程序员；
                                              程序人员写程序，又拿程序换酒钱。
                                              酒醒只在网上坐，酒醉还来网下眠；
                                              酒醉酒醒日复日，网上网下年复年。
                                              但愿老死电脑间，不愿鞠躬老板前；
                                              奔驰宝马贵者趣，公交自行程序员。
                                              别人笑我忒疯癫，我笑自己命太贱；
                                              不见满街漂亮妹，哪个归得程序员？
 -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ZiLong's blog</title>
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Fav-->
<link href="/images/favicon.ico" rel="shortcut icon">

<!--styles-->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">

<!--fonts google-->
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

@yield('style')

</head>
<body>

	@include('layouts._header')
	<div class="container-fluid" id="container-content">
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


<script src="/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/main.js" type="text/javascript"></script>


@yield('script')

<a id="scrollUp" href="javascript:void(0)" style="position: fixed; z-index: 2147483647;display: none">Scroll to top</a>

</body>
</html>