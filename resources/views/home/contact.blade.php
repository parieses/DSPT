<!DOCTYPE HTML>
<html>
<head>
<title>联系</title>
<link href="./Home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="./Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="./Home/css/owl.carousel.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Swim Wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="./Home/js/jquery.min.js"></script>
<link href="./Home/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="./Home/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- cart -->
		<script src="./Home/js/simpleCart.min.js"> </script>
	<!-- cart -->
<script type="text/javascript" src="./Home/js/bootstrap-3.1.1.min.js"></script>
<script src="./Home/js/zoom.js"></script>

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
<div class="content">
	<!--start-contact-->
	<!--contact-->
	<div class="content">
		<div class="contact">
			<div class="container">
				<h2>联系我们</h2>
				<div class="google-map">

				</div>
				<div class="contact-grids">
					<div class="col-md-6 contact-left">
						<p></p>
						<address>
							<p>商城</p>
							<p>PHP1705</p>
							<p>格拉斯哥，PR 45 99。</p>
							<p>电话：1 000 600 6000</p>
							<p>传真：1 000 9000 800</p>
							<p>电子邮件 <a href="mailto:example@mail.com">example”的就要数163邮箱</a></p>
						</address>
					</div>
					<div class="col-md-6 contact-right">
						<form  action="/advise" method="post">
							{{ csrf_field() }}
							<h5>姓名</h5>
							<input type="text" name= "name" id ="name">
							<h5>电子邮件地址</h5>
							<input type="text" name= "email" id = "email">
							<h5>消息</h5>
							<textarea name ="advise" id="advise"></textarea>
							<input type="submit" value="发送" id="submit">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
	<script>
        var submit = document.getElementById('submit');
        submit.onclick=function () {

            if($('#name').val() ==''){
                layer.msg('请输入您的姓名');
                return false;
            }
            if($('#email').val() == ''){
                layer.msg('请输入您的邮箱');
                return false;
            }
            if($('#advise').val() == ''){
                layer.msg('请输入您的建议');
                return false;
            }
        }
	</script>
	<!--footer-->
	@include("home.footer");


</body>
</html>