@extends('layouts.default')

@section('style')
<style type="text/css">

* {
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

body{
	background-color: #f0f2f5;
}

.box {
	background-color: #fff;
	padding: 10px;
	margin: 0 0 20px 0;
	-webkit-box-shadow: 0 0.2em 0 0 #ddd, 0 0 0 1px #ddd;
	box-shadow: 0 0.2em 0 0 #ddd, 0 0 0 1px #ddd;
}

.padding-sm{
	padding: 10px;
}

.media:first-child {
	margin-top: 0;
}

.media, .media-body {
	zoom: 1;
	overflow: hidden;
}

.media-left, .media-right, .media-body {
	display: table-cell;
	vertical-align: top;
}

.media-left, .media > .pull-left {
	padding-right: 10px;
}

.topic-author-box {
    position: relative;
}

.text-center {
    text-align: center;
}

.topic-author-box .list-inline {
    margin-bottom: 10px;
}
.list-inline {
    padding-left: 0;
    list-style: none;
    margin-left: -5px;
}

.topic-author-box .list-inline li {
    padding-left: 5px;
    padding-right: 5px;
    border: 1px solid #ccc;
    border-radius: 12px;
    padding: 2px 6px;
    margin-left: 6px;
    font-size: 0.9em;
    color: #606060;
    margin-top: 8px;
}

.list-inline > li {
    display: inline-block;
    padding-left: 5px;
    padding-right: 5px;
}

#innerBg{
	background:#fff;
	margin:0 auto;
	border-radius:4px;
	-moz-border-radius:4px;
	-o-border-radius:4px;
	-webkit-border-radius:4px;
	padding:20px 25px 35px 25px;
}

#about{
	font-size:16px;
}

#about hgroup, p{
	padding:0;
	margin:0;
}

#about h1{
	font-family: "Signika";
	font-weight:400;
	font-size:22px;
	color:#CD5353;
	margin:0 0 10px 0;
	padding:0;

}


#about h4{
	font-size:16px;
	color:#666;
	font-weight:bold;

}

#about h6{
	font-size:14px;
	color:#333;
	font-weight:bold;
	font-style:italic;
}

#skills, #introduction, #experience{
	padding-bottom:10px;
	margin-bottom:10px;
	border-bottom:1px dotted #e3e2e2;
}

li {list-style-type:none;}
ul {padding: 0px}

#introduction ul li {
	background:#efefef;
    border-radius: 4px;
	-moz-border-radius:4px;
	-o-border-radius:4px;
	-webkit-border-radius:4px;
    color: #666666;
    font-size: 11px;
  	margin-bottom: 10px;
	margin-top: 9px;
	padding: 6px 44px 5px 10px;
	border-left:3px solid #cccccc;
}

#introduction ul li span{
	font-weight:bold;
}

.clearfix:before,
.clearfix:after{
	content:"";
	display:table;
}

.clearfix:after{
	clear:both;
}
</style>
@stop

@section('content')

<div class="container-fluid" id="container-content">
	<div class="row">

		<div class="col-md-3">
			<div class="box">
				<div class="padding-sm">
					<div style>
						<div class="media">
							<div class="media-left">
								<div class="image">
									<img src="/images/cxy.jpg" style="border-radius: 50%;">
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="topic-author-box text-center">
					<ul class="list-inline">
						<li>
							<a href="https://github.com/394307916" target="_blank">Github</a>
						</li>
						<li>
							<a href="https://www.zhihu.com/people/bai-yun-jian-46/activities" target="_blank">知乎</a>
						</li>
						<li>
							<a href="https://laravel-china.org/users/23607" target="_blank">Laravel</a>
						</li>
					</ul>
				</div>
				<hr>
				<div class="box text-center" style="box-shadow: 0 0 0 0 #ddd, 0 0 0 1px #ddd;">
					一个永远的菜鸟.
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="box">
				@include('static_pages.introduce')
			</div>
		</div>


	</div>

</div>
@stop