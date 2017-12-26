<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<link href="./Home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="./Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="./Home/css/owl.carousel.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Swim Wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="./Home/js/jquery.min.js"></script>
<script type="text/javascript" src="./Home/js/bootstrap-3.1.1.min.js"></script>
	<!-- cart -->
		<script src="./Home/js/simpleCart.min.js"> </script>
	<!-- cart -->
</head>
<body>
@include("home.head");
			<!--header-->
		<div class="banner-section">
			<div class="container">
				<div class="banner-grids">
					<div class="col-md-6 banner-grid">
						<h2>最新的收藏</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="products" class="button"> 现在去购物 </a>
					</div>
				<div class="col-md-6 banner-grid1">
						<img src="./Home/images/p2.png" class="img-responsive" alt=""/>
				</div>
				<div class="clearfix"></div>
			</div>
		</div><div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
		</div>
		<div class="banner-bottom">
		<div class="gallery-cursual">
		<!--requried-jsfiles-for owl-->
		<script src="./Home/js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : true,
						pagination : false,
					});
				});
			</script>
		<!--requried-jsfiles-for owl -->
		<!--start content-slider-->
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">
				<img class="lazyOwl" data-src="./Home/images/b1.jpg" alt="name">
				<div class="item-info">
					<h5>Lorem ipsum</h5>
				</div>
			</div>
			<div class="item">
				<img class="lazyOwl" data-src="./Home/images/b2.jpg" alt="name">
			<div class="item-info">
					<h5>Lorem ipsum</h5>
				</div>
			</div>
			<div class="item">
				<img class="lazyOwl" data-src="./Home/images/b3.jpg" alt="name">
			<div class="item-info">
					<h5>Lorem ipsum</h5>
				</div>
			</div>
			<div class="item">
				<img class="lazyOwl" data-src="./Home/images/b4.jpg" alt="name">
			<div class="item-info">
					<h5>Lorem ipsum</h5>
				</div>
			</div>
			<div class="item">
				<img class="lazyOwl" data-src="./Home/images/b1.jpg" alt="name">
			<div class="item-info">
					<h5>Lorem ipsum</h5>
				</div>
			</div>
			<div class="item">
				<img class="lazyOwl" data-src="./Home/images/b6.jpg" alt="name">
			<div class="item-info">
					<h5>Lorem ipsum</h5>
				</div>
			</div>
			<div class="item">
				<img class="lazyOwl" data-src="./Home/images/b7.jpg" alt="name">
			<div class="item-info">
					<h5>Lorem ipsum</h5>
				</div>
			</div>
			<div class="item">
				<img class="lazyOwl" data-src="./Home/images/b1.jpg" alt="name">
			<div class="item-info">
					<h5>Lorem ipsum</h5>
				</div>
			</div>
			<div class="item">
				<img class="lazyOwl" data-src="./Home/images/b2.jpg" alt="name">
			<div class="item-info">
					<h5>Lorem ipsum</h5>
				</div>
			</div>
			<div class="item">
				<img class="lazyOwl" data-src="./Home/images/b3.jpg" alt="name">
			<div class="item-info">
					<h5>Lorem ipsum</h5>
				</div>
			</div>
		</div>
		<!--sreen-gallery-cursual-->
		</div>
		</div>
		<div class="gallery">
			<div class="container">
			<h3>特色产品</h3>
			<div class="gallery-grids">
				@foreach($List as $xxx)
				<div class="col-md-3 gallery-grid ">

					<a href="products"><img src="{{$xxx->图片地址}}" class="img-responsive" alt=""/>
					<div class="gallery-info">
					<div class="quick">
					<p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 视图</p>
					</div>
					</div></a>
					<div class="galy-info">
						<p>{{$xxx->商品名称}}</p>
						<div class="galry">
						<div class="prices">
						<h5 class="item_price">{{$xxx->价格}}</h5>
						</div>
					<div class="rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>

					<div class="clearfix"></div>
					</div>
					</div>

				</div>
				@endforeach
			</div>
		</div>
		</div>
		<div class="subscribe">
	 <div class="container">
	 <div class="subscribe1">
		 </div>
		 <div class="subscribe2">

	 </div>
	 <div class="clearfix"></div>
	 </div>
</div>
	@include("home.footer");
		
</body>
</html>