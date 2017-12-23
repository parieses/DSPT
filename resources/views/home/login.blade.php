<!DOCTYPE HTML>
<html>
<head>
<title>登录</title>
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
			<!--contact-->
			<div class="content">
 <div class="main-1">
		<div class="container">
<div class="login-page">
			   <div class="account_grid">
			   <div class="col-md-6 login-left">
			  	 <h3>新客户</h3>
				 <p>通过在我们的商店中创建帐户，您将能够更快地完成结帐流程，存储多个送货地址，在您的帐户中查看和跟踪您的订单等等。</p>
				 <a class="acount-btn" href="account">创建一个账户</a>
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>注册客户</h3>
				<p>如果您有我们的帐户，请登录。</p>
				<form method="POST" action="user_login">
					{{ csrf_field() }}
				  <div>
					<span>账号<label>*</label></span>
					<input type="text" style="width: 520px;height: 30px;border: 1px black solid" name="account">
				  </div>
				  <div>
					<span>密码<label>*</label></span>
					<input type="password" name="password" style="width: 520px;height: 30px;border: 1px black solid">
				  </div>
				  <a class="forgot" href="#">忘记密码了吗?</a>
				  <input type="submit" id="dl" value="登录">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
		   </div>
	</div>
	</div>
@include("home.footer");
	<script>
	var dl = document.getElementById('dl');
	dl.onclick = function(){
	    if($("*[name='account']").val() == ""){
	       layer.msg("请输入账号");
	        return false;
		};
	    if($("*[name='password']").val() == ""){
            layer.msg("请输入密码");
	        return false;
		};
	}
	</script>
</body>
</html>