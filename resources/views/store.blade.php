
<!DOCTYPE html>
<html lang="zh" class="pjaxLoadding-busy">
<head>
<meta name="Generator" content="ECJIA 1.24" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>设置店铺信息 - 天天果园</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="ecjia team" />
    <meta name="_token" content="{{ csrf_token() }}"/>
	<link rel="shortcut icon" href="favicon.ico">
    @include('public.js')
    <!--[if lt IE 9]>
      <script src="http://demodaojia.ecjia.com/content/apps/merchant/statics/js/html5shiv.js"></script>
      <script src="http://demodaojia.ecjia.com/content/apps/merchant/statics/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" id="googleapis-fonts-css"  href="/static/fonts.googleapis.css" type="text/css" media="all" />
<link rel="stylesheet" id="bootstrap-css"  href="/static/bootstrap.min.css" type="text/css" media="all" />
<link rel="stylesheet" id="bootstrap-reset-css"  href="/static/bootstrap-reset.css" type="text/css" media="all" />
<link rel="stylesheet" id="ecjia-merchant-ui-css"  href="/static/ecjia-merchant.ui.css" type="text/css" media="all" />
<link rel="stylesheet" id="ecjia-mh-font-awesome-css"  href="/static/font-awesome.min.css" type="text/css" media="all" />
<link rel="stylesheet" id="ecjia-mh-owl-carousel-css"  href="/static/owl.carousel.css" type="text/css" media="all" />
<link rel="stylesheet" id="ecjia-mh-owl-theme-css"  href="/static/owl.theme.css" type="text/css" media="all" />
<link rel="stylesheet" id="ecjia-mh-owl-transitions-css"  href="/static/owl.transitions.css" type="text/css" media="all" />
<link rel="stylesheet" id="ecjia-mh-table-responsive-css"  href="/static/table-responsive.css" type="text/css" media="all" />
<link rel="stylesheet" id="ecjia-mh-jquery-easy-pie-chart-css"  href="/static/jquery.easy-pie-chart.css" type="text/css" media="all" />
<link rel="stylesheet" id="ecjia-mh-function-css"  href="/static/ecjia.function.css" type="text/css" media="all" />
<link rel="stylesheet" id="ecjia-mh-page-css"  href="/static/page.css" type="text/css" media="all" />
<link rel="stylesheet" id="ecjia-mh-chosen-css"  href="/static/chosen.css" type="text/css" media="all" />
<link rel="stylesheet" id="uniform-aristo-css"  href="/static/uniform.aristo.css" type="text/css" media="all" />
<link rel="stylesheet" id="photoswipe-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/lib/photoswipe/css/photoswipe.css" type="text/css" media="all" />
<link rel="stylesheet" id="default-skin-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/lib/photoswipe/css/default-skin/default-skin.css" type="text/css" media="all" />
<link rel="stylesheet" id="merchant-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/css/merchant.css" type="text/css" media="all" />
<link rel="stylesheet" id="bootstrap-fileupload-css"  href="/static/bootstrap-fileupload.css" type="text/css" media="all" />
<link rel="stylesheet" id="range-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/css/range.css" type="text/css" media="all" />
<link rel="stylesheet" id="bootstrap-toggle-buttons-css"  href="http://demodaojia.ecjia.com/content/system/statics/lib/toggle_buttons/bootstrap-toggle-buttons.css" type="text/css" media="all" />

    <script type="text/javascript" src="/static/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/static/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/jquery-pjax.js"></script>
<script type="text/javascript" src="/static/ecjia.js"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var admin_lang = {"display_sidebar":"\u663e\u793a\u4fa7\u8fb9\u680f","hide_sidebar":"\u9690\u85cf\u4fa7\u8fb9\u680f","search_check":"\u8bf7\u5148\u8f93\u5165\u641c\u7d22\u4fe1\u606f","search_no_message":"\u672a\u641c\u7d22\u5230\u5bfc\u822a\u4fe1\u606f","success":"\u64cd\u4f5c\u6210\u529f","fail":"\u64cd\u4f5c\u5931\u8d25","confirm_jump":"\u662f\u5426\u786e\u8ba4\u8df3\u8f6c\uff1f","ok":"\u786e\u5b9a","cancel":"\u53d6\u6d88","request_failed":"\u8bf7\u6c42\u5931\u8d25\uff0c\u9519\u8bef\u7f16\u53f7\uff1a","error_msg":"\uff0c\u9519\u8bef\u4fe1\u606f\uff1a"};
/* ]]> */
</script>
<script type="text/javascript" src="/static/ecjia-merchant.js"></script>
<script type="text/javascript" src="/static/ecjia-merchant-ui.js"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/lib/toggle_buttons/jquery.toggle.buttons.js"></script>

    
    
	
    
</head>
<body>
    
    <div id="wrapper">
        
@include('public.html')

        

        
        <div class="container">
            <div id="main" class="main_content">
                
                        
        <ol class="breadcrumb">
            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=dashboard&a=init">管理主页</a></li>
            			<li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=init">我的店铺</a></li>
                        <li class="active">店铺设置</li>
                    </ol>
        
        
                
                
<div class="page-header">
	<div class="pull-left">
		<h2>设置店铺信息</h2>
  	</div>
  	<div class="pull-right">
  		  	</div>
  	<div class="clearfix"></div>
</div>
<style media="screen" type="text/css">
label + div.col-lg-6, label + div.col-lg-2 {
    padding-top: 3px;
    color: #333;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal" name="form" action="/Admin/storeadd"  method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                  	    <div class="form-group">
                            <label class="control-label col-lg-2">店铺名称：</label>
                            <div class="col-lg-6">
                                <h4>天天果园</h4>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">店铺导航背景图：</label>
                            <div class="col-lg-6">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <span class="btn btn-primary btn-file btn-sm">
                                        <input type="file" id="browse1" name="browse" ID="fupPhoto" style="background-color: #3498db; display: none;"/>
                                        <input id="btn1" value="浏览" style="background-color: #3498db; color: white;border: none;width: 25px;">
                                    </span>
                                </div>
                                <span class="help-block">推荐图片的尺寸为：2000x1500px，大小不超过2M</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">店铺LOGO：</label>
                            <div class="col-lg-6">
                                <div class="fileupload fileupload-exists" data-provides="fileupload">
                                                                        <div class="fileupload-exists thumbnail" style="max-width: 60px;">
                                        <img src="http://demodaojia.ecjia.com/content/uploads/merchant/62/data/shop_logo/1477683254803646447.jpg" alt="店铺LOGO" style="width:50px; height:50px;"/>
                                    </div>
                                    <span class="btn btn-primary btn-file btn-sm">
                                        <input type="file" id="browse2" name="logo" ID="fupPhoto" style="background-color: #3498db; display: none;"/>
                                        <input id="btn2" value="修改" style="background-color: #3498db; color: white;border: none;width: 25px;">
                                    </span>
                                    <a class="btn btn-danger btn-sm fileupload-exists" data-toggle="ajax_remove" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=drop_file&code=shop_logo" >删除</a>
                                	<span class="input-must"><span class="require-field" style="color:#FF0000,">*</span></span>
                                </div>
                                <span class="help-block">推荐图片的尺寸为：512x512px</span>
                            </div>
                        </div>


                      	<div class="form-group">
                            <label class="control-label col-lg-2">店铺二维码：</label>
                            <div class="col-lg-10">
                            	                                <div class="fileupload fileupload-exists" data-provides="fileupload">
                                    <div class="fileupload-exists thumbnail fileupload-store-qrcode">
                                        <img src="http://demodaojia.ecjia.com/content/uploads/data/qrcodes/merchants/merchant_62.png?1513838477" alt="店铺二维码" style="width:150px; height:150px;"/>
                                    </div>
                                    {{--<a class="btn btn-primary btn-sm fileupload-exists" data-toggle="ajax_remove" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=refresh_qrcode" style="margin-top: 120px;">刷新</a>--}}
                                </div>
                                                                {{--<span class="help-block">上传店铺logo后，点击刷新按钮可生成店铺二维码。删除店铺logo后，需手动刷新才可删除店铺二维码。</span>--}}
                            </div>
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<label class="control-label col-lg-2">营业时间：</label>--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<div class="range">--}}
                                    {{--<input class="range-slider" name="shop_trade_time" type="hidden" value="480,1260"/>--}}
                                {{--</div>--}}
                                {{--<span class="help-block">拖拽选取营业时间段</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <label class="control-label col-lg-2">客服电话：</label>
                            <div class="col-lg-6">
                                <input class="form-control" name="cstelephone" type="text" placeholder="请输入客服电话"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ccomment" class="control-label col-lg-2">店铺公告：</label>
                            <div class="col-lg-6">
                                <input class="form-control" name="shop_notice" placeholder="超过当天营业时间第二天发货。"/>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="control-label col-lg-2">店铺简介：</label>
                            <div class="col-lg-6">
                                <input class="form-control" name="shop_description" placeholder="..."/>
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <label class="control-label col-lg-2">自动派单：</label>
                            <div class="col-lg-6">
                                <input id="open" type="radio" name="express_assign_auto" value="1"   />
                                <label for="open">开启</label>
                                <input id="close" type="radio" name="express_assign_auto" value="0"  checked="true"   />
                                <label for="close">关闭</label>
                                <span class="help-block">（订单使用o2o配送方式时。当发货未选择配送员时，系统将自动优先分派配送单，再进入抢单模式，否则进入抢单模式）</span>
                            </div>
                            
                        </div>

                        <div class="form-group ">
                            <div class="col-lg-6 col-md-offset-2">
                                <input class="btn btn-info" type="submit" name="name" value="提交信息">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

                
            </div>
        </div>
        

        
         

<!-- <footer> -->
<!--     <div class="container"> -->
        
<!--     </div> -->
<!-- </footer> -->
@include('public.foot')
<script type="text/javascript">
$("[data-toggle='popover']").popover({
	trigger: 'hover',
	html: true,
	content: function() {
        var id = $(this).attr('data-id');
        return $("#content_" + id).html();
	}
});
</script>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?45572e750ba4de1ede0e776212b5f6cd";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


<div class="container">

</div>
        
    </div>
    
	
	
    <script type="text/javascript" src="/static/jquery.customSelect.min.js"></script>
<script type="text/javascript" src="/static/jquery.dcjqaccordion.2.7.min.js"></script>
<script type="text/javascript" src="/static/jquery.nicescroll.js"></script>
<script type="text/javascript" src="/static/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="/static/jquery.sparkline.js"></script>
<script type="text/javascript" src="/static/jquery.stepy.js"></script>
<script type="text/javascript" src="/static/jquery.tagsinput.js"></script>
<script type="text/javascript" src="/static/jquery.validate.min.js"></script>
<script type="text/javascript" src="/static/jquery.easy-pie-chart.js"></script>
<script type="text/javascript" src="/static/jquery-actual.min.js"></script>
<script type="text/javascript" src="/static/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/static/jquery.quicksearch.js"></script>
<script type="text/javascript" src="/static/owl.carousel.js"></script>
<script type="text/javascript" src="/static/respond.min.js"></script>
<script type="text/javascript" src="/static/sparkline-chart.js"></script>
<script type="text/javascript" src="/static/chosen.jquery.min.js"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/assets/Chart/Chart.min.js"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/js/jquery-cookie.min.js?ver=1"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/js/json2.js"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/js/ui/jquery-ui-totop.min.js"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/lib/jquery-form/jquery.form.min.js"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/lib/smoke/smoke.min.js"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/js/merchant_info.js"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/lib/photoswipe/js/photoswipe.min.js"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/lib/photoswipe/js/photoswipe-ui-default.min.js"></script>
{{--<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>--}}
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/js/jquery.range.js"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/js/migrate.js"></script>

    <script type="text/javascript">
        var browse1 = document.getElementById("browse1");
        var browse2 = document.getElementById("browse2");
        var btn1 = document.getElementById("btn1");
        var btn2 = document.getElementById("btn2");
        //通用方法
        btn1.onclick = function() {
            browse1.click();
        }
        btn2.onclick = function() {
            browse2.click();
        }
    </script>



    
    
    <div class="pjaxLoadding"><i class="peg"></i></div>
</body>
</html>
