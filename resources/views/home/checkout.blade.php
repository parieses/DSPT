<!DOCTYPE HTML>
<html>
<head>
<title>查看</title>
<link href="./Home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="./Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="./Home/css/owl.carousel.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Swim Wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="./Home/js/jquery.min.js"></script>
<!-- cart -->
		<script src="./Home/js/simpleCart.min.js"> </script>
	<!-- cart -->
<script type="text/javascript" src="./Home/js/bootstrap-3.1.1.min.js"></script>
<script src="./Home/js/imagezoom.js"></script>

						<!-- FlexSlider -->
  <script defer src="./Home/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="./Home/css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>



</head>
<body>
@include("home.head");
<!-- checkout -->
<div class="content">
<div class="cart-items">
	<div class="container">
			 <h2>我的购物袋 (3)</h2>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			 <div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="./Home/images/c1.jpeg" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum 不是简单的 </a><span>拾取时间：</span></h3>
						<ul class="qty">
							<li><p>闵。订单价值</p></li>
							<li><p>免费送货</p></li>
						</ul>
							 <div class="delivery">
							 <p>服务费：$10.00</p>
							 <span>交付1-1:30 hours</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			 <div class="cart-header2">
				 <div class="close2"> </div>
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="./Home/images/c2.jpeg" class="img-responsive" alt="">
						</div>
					  <div class="cart-item-info">
						  <h3><a href="#"> Lorem Ipsum 不是简单的 </a><span>拾取时间：</span></h3>
						  <ul class="qty">
							  <li><p>闵。订单价值</p></li>
							  <li><p>免费送货</p></li>
						  </ul>
						  <div class="delivery">
							  <p>服务费：$10.00</p>
							  <span>交付1-1:30 hours</span>
							  <div class="clearfix"></div>
						  </div>
					  </div>
					   <div class="clearfix"></div>
											
				  </div>
			  </div>
			  <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
							$('.cart-header3').fadeOut('slow', function(c){
						$('.cart-header3').remove();
					});
					});	  
					});
			 </script>
			  <div class="cart-header3">
				 <div class="close3"> </div>
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="./Home/images/c3.jpg" class="img-responsive" alt="">
						</div>
					  <div class="cart-item-info">
						  <h3><a href="#"> Lorem Ipsum 不是简单的 </a><span>拾取时间：</span></h3>
						  <ul class="qty">
							  <li><p>闵。订单价值</p></li>
							  <li><p>免费送货</p></li>
						  </ul>
						  <div class="delivery">
							  <p>服务费：$10.00</p>
							  <span>交付1-1:30 hours</span>
							  <div class="clearfix"></div>
						  </div>
					  </div>
					   <div class="clearfix"></div>
											
				  </div>
			  </div>		
		 </div>
		 </div>
<!-- checkout -->
	<div class="subscribe">
		<div class="container">
			<div class="subscribe1">
				<h4>最新的泳衣</h4>
			</div>
			<div class="subscribe2">
				<form>
					<input type="text" class="text" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}">
					<input type="submit" value="加入">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	@include("home.footer");
</div>>
</body>
</html>