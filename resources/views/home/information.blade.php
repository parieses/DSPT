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


	<link rel="stylesheet" type="text/css" href="Home/css/css/style.css" />
	<link rel="stylesheet" type="text/css" href="Home/css/css/shopping-mall-index.css" />
	<script type="text/javascript" src="Home/css/js/jquery.js"></script>
	<script type="text/javascript" src="Home/css/js/zhonglin.js"></script>
	<script type="text/javascript" src="Home/css/js/zhongling2.js"></script>


</head>
<body>
<div class="content">
	@include("home.head")
	<div class="personal w1200">
		<div class="personal-left f-l">
			<div class="personal-l-tit">
				<h3>个人中心</h3>
			</div>
			<ul>
				<li id="news" class="current-li per-li1"><a href="#">消息中心<span>></span></a></li>
				<li id="person" class="per-li2" ><a href="#">个人资料<span>></span></a></li>
				<li class="per-li3"><a href="#">我的订单<span>></span></a></li>
				<li class="per-li5"><a href="#">购物车<span>></span></a></li>
				<li id="address" class="per-li6"><a href="#">管理收货地址<span>></span></a></li>
				<li class="per-li8"><a href="#">购买记录<span>></span></a></li>
				<li class="per-li9"><a href="#">浏览记录<span>></span></a></li>
			</ul>
		</div>
		<div class="personal-r f-r">
			{{--个人资料--}}
			<div id = "1c" class="personal-right" style="display: block">
				<div class="personal-r-tit">
					<h3>个人资料</h3>
				</div>
				<div class="data-con">
					<div class="dt1">
						<p class="f-l">当前头像：</p>
						<div class="touxiang f-l">
							<div class="tu f-l">
								<a href="#">
									<img src="home/css/images/data-tu.gif" />
									<input type="file" name="" id="" class="img1" />
								</a>
							</div>
							<a href="JavaScript:;" class="sc f-l" shangchuang="">上传头像</a>
							<div style="clear:both;"></div>
						</div>
						<div style="clear:both;"></div>
					</div>
					<div class="dt1">
						<p class="dt-p f-l">昵称：</p>
						<input type="text" placeholder="{{$session->nickname}}" name="nickname" />
						<div style="clear:both;"></div>
					</div>
					<div class="dt1">
						<p class="dt-p f-l">用户名：</p>
						<input type="text" placeholder="{{$session->account}}" name="account"/>
						<div style="clear:both;"></div>
					</div>
					<div class="dt1">
						<p class="dt-p f-l">身份证号：</p>
						<input type="text" placeholder="{{$session->id_number}}" name="id_number"/>
						<div style="clear:both;"></div>
					</div>
					<div class="dt1 dt2">
						<p class="dt-p f-l">性别：</p>
						<input type="radio" name="hobby" value="0"></input><span>男</span>
						<input type="radio" name="hobby" value="1"></input><span>女</span>
						<div style="clear:both;"></div>
					</div>
					<div class="dt1">
						<p class="dt-p f-l">年龄：</p>
						<input type="text" placeholder="{{$session->age}}"  name="age"/>
						<div style="clear:both;"></div>
					</div>
					<div class="dt1 dt3">
						<p class="dt-p f-l">手机号：</p>
						<input type="text" placeholder="{{$session->tel}}" name="tel"/>
						<button>获取短信验证码</button>
						<div style="clear:both;"></div>
					</div>
					<div class="dt1">
						<p class="dt-p f-l">验证码：</p>
						<input type="text" value="" />
						<div style="clear:both;"></div>
					</div>
					<div class="dt1">
						<p class="dt-p f-l">邮箱：</p>
						<input type="text" placeholder="{{$session->email}}" name="email"/>
						<div style="clear:both;"></div>
					</div>
					<div class="dt1 dt4">
						<p class="dt-p f-l" >密码：</p>
						<input type="text" readonly unselectable="on" placeholder="***********" name="password" />
						<button id="change_pwd">修改密码</button>
						<div style="clear:both;"></div>
					</div>
					<button class="btn-pst">保存</button>
				</div>
			</div>
			{{--消息--}}
			<div id = "2c" class="personal-right">
				<div class="personal-r-tit">
					<h3>消息中心列表  <  "三只松鼠"与一颗坚果</h3>
				</div>
				<div class="pcm-con">
					<div class="pcm-top">
						<h2>"三只T松鼠"与一颗坚果</h2>
						<p class="time">2008-08-08 08:08:08</p>
						<p class="rq">
							<span>2008年08月08日</span>
							<span>08:08:08</span>
							<span>来源： 新华网</span>
						</p>
					</div>
					<div class="pcm-info">
						<p>新华网合肥５月１５日电（记者陈诺）"松鼠老爹"章燎原和他的创客团队，在２０１４年"双十一"网购狂欢节上，以１．０２亿元的单日销售额，刷新中国电商食品销售纪录。</p>
						<p>位于安徽省芜湖市的食品电商——"三只松鼠"从零起步，短短几年时间，用小小的坚果敲开了无数"吃货"的胃，更敲响了平凡人的"创业梦"。</p>
						<img src="/home/css/images/pcm-con-tu.gif" />
						<strong>>>>民房里走出"草根"团队</strong>
						<p>２０１２年，分散在街头巷尾的炒货店、零食铺子等实体店面依然是主要销售渠道。已在安徽一传统坚果企业任职近１０年的章燎原却敏锐地嗅到了坚果的电子"商机"</p>
						<p>"网络世界那么大，我想去看看。"放弃原有的营销总监职位，３６岁的章燎原离开老东家，重新创业。</p>
						<p>当年２月，食品电商"三只松鼠"在芜湖市一座百余平方米的小区民房里成立，５位合伙人中，有做厨师的发小、老东家的下属，还有在网上发帖吐槽的离职少年。共同的"创业梦"，让他们集结于此。</p>
						<p>创业初期，员工垒起硬纸板来代替办公桌，应聘者误以为走进传销公司匆忙逃离……</p>
						<p>创新成为突破的关键。利用ＥＲＰ云数据处理，团队砍掉了累赘的加工环节，原产地订单式半成品直接运至芜湖总部的封装工厂进行质检和分装。</p>
						<p>"因为不用在门店积压库存，周转期只有１５天，所以更新鲜，成本也相应减少。"食品安全品质部副经理李世艳告诉记者。</p>
						<p>"瘦身"的"三只松鼠"跑得快，在天猫上线６５天后，便冲上了坚果类销量第一的宝座。</p>
					</div>
				</div>
			</div>
			{{--添加收获地址--}}
			<div id = "3c" class="personal-right" >
				<div class="shade_content" style="display: none; border: 2px solid black;">
					<div class="col-xs-12 shade_colse">
						<button id ="close_add_address">x</button>
					</div>

					{{--添加页面--}}
					<div class="nav shade_content_div">
						<div class="col-xs-12 shade_title">
							新增收货地址
						</div>
						<div class="col-xs-12 shade_from">
							<form action="/address" method="post">
								{{ csrf_field() }}

								<div class="info">

									<div>

										<select id="s_province" name="s_province" style="border: solid 1px #000;appearance:none;-moz-appearance:none;-webkit-appearance:none;padding-right: 14px;background: url('/home/images/arrow.png') no-repeat scroll right center transparent;"></select>  

										<select id="s_city" name="s_city" style="border: solid 1px #000;appearance:none;-moz-appearance:none;-webkit-appearance:none;padding-right: 14px;background: url('/home/images/arrow.png') no-repeat scroll right center transparent;"></select>  

										<select id="s_county" name="s_county" style="border: solid 1px #000;appearance:none;-moz-appearance:none;-webkit-appearance:none;padding-right: 14px;background: url('/home/images/arrow.png') no-repeat scroll right center transparent;"></select>

										<script class="resources library" src="/home/js/area.js" type="text/javascript"></script>



										<script type="text/javascript">_init_area();</script>

									</div>

									<div id="show"></div>

								</div>

								<div class="col-xs-12">
									<span class="span_style" id="">详细地址</span>
									<input class="input_style" type="text" name="address" id="address" value="" placeholder="&nbsp;&nbsp;请输入您的详细地址">
								</div>
								<div class="col-xs-12">
									<span class="span_style" id="">邮政编号</span>
									<input class="input_style" type="text" name="number_this" id="number_this" value="" placeholder="&nbsp;&nbsp;请输入您的邮政编号">
								</div>
								<div class="col-xs-12">
									<span class="span_style" id="">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span>
									<input class="input_style" type="text" name="name_" id="name_" value="" placeholder="&nbsp;&nbsp;请输入您的姓名">
								</div>
								<div class="col-xs-12">
									<span class="span_style" id="">手机号码</span>
									<input class="input_style" type="text" name="phone" id="phone" value="" placeholder="&nbsp;&nbsp;请输入您的手机号码">
								</div>
								<div class="col-xs-12">

									<input type="submit" class="sub_set" id="sub_setID" value="提交">

								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="personal-r-tit">
					<h3>添加收获地址</h3>
				</div>
				<div class="pcm-con">
					<div class="open_new">
						<button class="open_btn" id="add_address">添加新地址</button>
					</div>
					<div class="Caddress">
						@foreach($Address as $k=>$v)

						<div class="add_mi" >
								<div>x</div>

							<p style="border-bottom:1px dashed #ccc;line-height:28px;">{{$v->region}}</p>
							<p>{{$v->address}}  {{$v->number_this}}  {{$v->name_}}  {{$v->phone}}</p>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>




	@include("home.footer");
</div>

{{--修改资料--}}
<script>
            $(".btn-pst").click(function() {
                if($("input[name='account']").val()==''){
                    layer.msg('用户名不能为空')
				}
                if($("input[name='nickname']").val()==''){
                    layer.msg('昵称不能为空')
                }
                if($("input[name='id_number']").val()==''){
                    layer.msg('身份证不能为空')
                }
                if($("input[name='age']").val()==''){
                    layer.msg('年龄不能为空')
                }
                if($("input[name='tel']").val()==''){
                    layer.msg('电话不能为空')
                }
                if($("input[name='email']").val()==''){
                    layer.msg('邮箱不能为空')
                }

                $.post('new_User',
                    {
                        _token: '{{ csrf_token() }}',
                        account: $("input[name='account']").val(),
                        nickname: $("input[name='nickname']").val(),
                        id_number: $("input[name='id_number']").val(),
                        age: $("input[name='age']").val(),
                        tel: $("input[name='tel']").val(),
                        email: $("input[name='email']").val()
                    }),
                    function (data) {
                        if (data.code == -1) {
                            layer.msg(data.msg);
                        } else {
                            location.href = '/login'
                        }
                    }
            })
</script>

{{-- 分类Js--}}
<script>
		var person = document.getElementById('person');
        var news = document.getElementById('news');
        var address = document.getElementById('address');
        var add_address =document.getElementById('add_address');
        var close_add_address =document.getElementById('close_add_address');
		person.onclick = function (){
            $(".personal-right").css("display","none");
            $("#1c").css("display","block");
		};
        news.onclick = function (){
            $(".personal-right").css("display","none");
            $("#2c").css("display","block");

        };
        address.onclick = function (){
            $(".personal-right").css("display","none");
            $("#3c").css("display","block");

        };
        add_address.onclick = function () {
            $(".shade_content").css("display","block");
		};
        close_add_address.onclick = function(){
            $(".shade_content").css("display","none");
		}

</script>
{{--三级联动分类--}}
<script type="text/javascript">

    var Gid  = document.getElementById ;

    var showArea = function(){

        Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +

            Gid('s_city').value + " - 县/区" +

            Gid('s_county').value + "</h3>"

    }

//    Gid('s_county').setAttribute('onchange','showArea()');

</script>

{{--layer弹框--}}
<script>
    var change_pwd = document.getElementById('change_pwd');
    change_pwd.onclick=function () {
		layer.open({
                type: 1,
                skin: 'layui-layer-rim', //加上边框
                area: ['600px', '400px'], //宽高
                content: "<div style='width:350px;'>" +
				"<div style='width:320px;margin-left: 39%;' class='form-group has-feedback'>" +
					"<p>原始密码</p>" +
					"<input id='awardName' class='form-control' type='text' name='awardName' value=''/>" +
				"</div>"
						+
				"<div style='width:320px;margin-left: 39%;' class='form-group has-feedback'>" +
					"<p>新的密码</p>" +
					"<input id='awardDescription' class='form-control' type='text' name='awardDescription' value=''/>" +
				"</div>"+
                "<div style='width:320px;margin-left: 39%;' class='form-group has-feedback'>" +
                "<p>确认密码</p>" +
                "<input id='awardDescription1' class='form-control' type='text' name='awardDescription' value=''/>" +
                "</div>"+
				"<button style='margin-top:5%;margin-left:35%;' type='button' class='btn btn-block btn-success btn-lg' onclick='add()'>提交</button>" +
				"</div>"
            });

    };

    $("input[name='password']").on('focus', function() {
        $(this).trigger('blur');
    });

</script>
{{--修改密码--}}
<script>
		function add(){
		    var awardName = $('#awardName').val();
        	var awardDescription = $('#awardDescription').val();
            var awardDescription1 = $('#awardDescription1').val();
            if(awardName ==''){
                layer.msg('原始密码不能为空');return false;
            }
            if(awardDescription ==''){
				layer.msg('新密码不能为空');return false;
			}
            if(awardDescription1 ==''){
                layer.msg('确认密码不能为空');return false;
            }
            if(awardDescription !=awardDescription1){
                layer.msg('两次密码不一样');return false;
			}

            id ={{$session->id}}
            $.post("changpwd",
				{
				    awardName:awardName,
					awardDescription:awardDescription,
					awardDescription1:awardDescription1,
					_token:'{{ csrf_token() }}',
					uid:id,
				},
				function(data)
				{
               		if(data.code == -1){
                   layer.msg(data.msg);
			 		  }else {

				   location.href='/login'
			   	}
            });
	 	}


</script>
</body>
</html>