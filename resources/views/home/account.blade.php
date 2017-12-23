<!DOCTYPE HTML>
<html>
<head>
<title>账户</title>
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





</head>
<body>
@include("home.head");
			<div class="content">
 <!-- registration -->
				<div class="main-1">
					<div class="container">
						<div class="register">
							<form method="post" action="/submit" id="form">
								{{ csrf_field() }}
								<div class="register-top-grid">
									<h3>个人信息</h3>
									<div class="wow fadeInLeft" data-wow-delay="0.4s">
										<span>账号<label>*</label></span>
										<input type="text" name="account" id="number">
									</div>
									<div class="wow fadeInRight" data-wow-delay="0.4s">
										<span>电话<label>*</label></span>
										<input type="text" id="tel" name = "tel">
									</div>
									<div class="wow fadeInRight" data-wow-delay="0.4s">
										<span>邮箱<label>*</label></span>
										<input type="text"  id="email" name = "email">
									</div>
									<div class="wow fadeInRight" data-wow-delay="0.4s">
										<span>身份证号<label>*</label></span>
										<input type="text"  id="id_number" name = "id_number">
									</div>
									<div class="clearfix"> </div>
									<a class="news-letter" href="#">
										<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>注册通讯</label>
									</a>
								</div>
								<div class="register-bottom-grid">
									<h3>登录信息</h3>
									<div class="wow fadeInLeft" data-wow-delay="0.4s">
										<span>密码<label>*</label></span>
										<input type="password" id="pwd" name="pwd" style="width: 530px;height: 35px;border: 1px black solid">
									</div>
									<div class="wow fadeInRight" data-wow-delay="0.4s">
										<span>确认密码<label>*</label></span>
										<input type="password" id="pwd1" style="width: 530px;height: 35px;border: 1px black solid">
									</div>
								</div>
							</form>
							<div class="clearfix"> </div>
							<div class="register-but">
								<form>
									<input id="submit" type="submit" value="提交">
									<div class="clearfix"> </div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<script>
                    var submit = document.getElementById('submit');
                    submit.onclick = function(){
                        if($('#number').val()==''){
                            layer.msg('账号不能为空');return false
                        };

                        if( ($('#number').val().length) < 5 ){
                            layer.msg('账号太短');return false
                        }

                        if($('#tel').val()==''){
                            layer.msg('电话号码不能为空');return false
                        }
                        if( ($('#tel').val().length) != 11){
                            layer.msg('手机号不正确');return false
                        }

                        if($('#email').val()==''){
                            layer.msg('邮箱不能为空');return false
                        }

                        if( ($('#email').val().length) < 8){
                            layer.msg('邮箱不正确');return false
                        }

                        if($('#id_number').val()==''){
                            layer.msg('请填入身份证号');return false
                        }
                        if( ($('#id_number').val().length) < 8){
                            layer.msg('身份证不正确');return false
                        }

                        if($('#pwd').val()==''){
                            layer.msg('密码不能为空');return false
                        }

                        if( ($('#pwd').val().length) < 8){
                            layer.msg('密码太短');return false
                        }

                        if($('#pwd1').val()==''){
                            layer.msg('请确认密码');return false
                        }

                        if($('#pwd1').val()!==$('#pwd').val()){
                            layer.msg('两次密码不一样');return false
                        }
                        $('#form').submit();
                        return false;

                    }
				</script>

@include("home.footer");
</div>

 </body>
</html>