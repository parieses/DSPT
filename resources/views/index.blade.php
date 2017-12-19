
<!DOCTYPE html>
<html lang="zh" class="pjaxLoadding-busy">
<head>
    <meta name="Generator" content="ECJIA 1.24" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>仪表盘 - DSPT</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="ecjia team" />
    <link rel="shortcut icon" href="favicon.ico">
    @include('public.js')
</head>
<body>

<div id="wrapper">

    @include('public.html')



    <div class="container">
        <div id="main" class="main_content">


            <ol class="breadcrumb">
                <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=dashboard&a=init">管理主页</a></li>
                <li class="active">仪表盘</li>
            </ol>




            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="/images/1.png"  width="200" height="200" class="thumbnail" style="margin-left: 20px;margin-bottom: 0;" />
                                        </div>
                                        <div class="col-sm-5">
                                            <h4>
                                                <strong>DSPT</strong>
                                            </h4>
                                            <hr style="margin-top: 10px;margin-bottom: 10px;">
                                            <p>服装</p>
                                        </div>

                                        <div class="col-sm-4">
                                            <h4 class="title-real-estates">
                                                <strong>小店资料</strong>
                                            </h4>
                                            <hr style="margin-top: 10px;margin-bottom: 10px;">
                                            <div><label>营业时间：</label>8:00--21:00</div>
                                            <div><label>店铺公告：</label>超过当天营业时间第二天发货。</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row" id="home-content">
                <div class="col-lg-8">
                    <div class="row state-overview">
                        <div class="col-lg-6 col-sm-6">
                            <section class="panel">
                                <div class="symbol terques">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="value">
                                    <h1 class="count">0</h1>
                                    <p><a target="__blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_order_stats&a=init&start_date=2017-12-01&end_date=2017-12-18'>本月订单总额</a></p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <section class="panel">
                                <div class="symbol red">
                                    <i class="fa fa-list-alt"></i>
                                </div>
                                <div class="value">
                                    <h1 class="count2">0</h1>
                                    <p><a target="__blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_order_stats&a=init&start_date=2017-12-01&end_date=2017-12-18'>本月订单数量</a></p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <section class="panel">
                                <div class="symbol yellow">
                                    <i class="fa fa-gavel"></i>
                                </div>
                                <div class="value">
                                    <h1 class="count3">0</h1>
                                    <p><a target="__blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=merchant&a=init&start_time=2017-12-18 00:00:00&end_time=2017-12-18 23:59:59&composite_status=0'>今日待确认订单</a></p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <section class="panel">
                                <div class="symbol purple">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <div class="value">
                                    <h1 class="count4">0</h1>
                                    <p><a target="__blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=merchant&a=init&start_time=2017-12-18 00:00:00&end_time=2017-12-18 23:59:59&composite_status=101'>今日待发货订单</a></p>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row state-overview">
                        <div class="col-lg-12 order_bar_chart">
                            <div class="border-head m_t5">
                                <h3>订单走势图</h3>
                            </div>
                            <div class="move-mod-group chart-mod1" id="widget_admin_dashboard_orderChart">
                                <canvas id="order-chart"></canvas>
                                <style type="text/css">
                                    .order_bar_chart{
                                        min-height:440px;
                                    }
                                    .chart-mod1 {
                                        padding: 0px;
                                        border-radius: 10px;
                                        margin-bottom: 0;
                                        box-sizing: border-box;
                                    }
                                    .chart-mod1 h3 {
                                        text-align: center;
                                        color: #fff;
                                        font-weight: normal;
                                    }
                                    .chart-mod1 canvas {
                                        max-width: 100%;
                                        height: 300px;
                                    }
                                    #widget_admin_dashboard_orderChart {
                                        position: relative;
                                        width: 100%;
                                    }
                                </style>
                                <script type="text/javascript">

                                    $(function(){
                                        var ctx = document.getElementById('order-chart').getContext("2d"),

                                            data = {
                                                labels : ['18','19','20','21','22','23','24','25','26','27','28','29','30','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'],
                                                datasets : [{
                                                    fillColor: "#BFC2CD",//填充色
                                                    strokeColor: "#BFC2CD",//边框色
                                                    data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
                                                }]
                                            },

                                            options = {
                                                //刻度线
                                                scaleLineColor : "#C9CDD7",

                                                //左侧刻度线是否显示
                                                scaleShowLabels : true,

                                                //刻度标签
                                                scaleLabel : "<%=value%>单",

							//底部刻度文字
							scaleFontColor : "#333",

							//刻度显示网格线
							scaleShowGridLines : false,

							//柱状条的宽度
							barStrokeWidth : 1,

							//柱状条间距
							barValueSpacing : 2,

							//响应式
							responsive : true,

		// 					tooltipEvents: ["touchstart", "touchmove"],//"mousemove",

							//是否有动画图表
							animation : true,

							//泡泡里字体
							tooltipFontSize : 10,
							//标题文字
							// tooltipTitleFontSize : 12,
							tooltipTitleFontStyle: "normal",
							//填充各地提示文本像素宽度
							// tooltipYPadding : 3,
							// tooltipXPadding : 3,

							//大小的提示插入符
							tooltipCaretSize : 4,

							//像素的工具提示边界半径
							tooltipCornerRadius : 4,

							//从像素点X偏移工具提示边缘
							// tooltipXOffset : 100,
							// tooltipYOffset : 100,
							tooltipTemplate : "<%= value %>", //"<%if (label){%><%=label%>: <%}%><%= value %>",

							//动画速度
							animationSteps : 50,

							//动画效果
							animationEasing : "easeOutQuart",//easeOutQuart、easeOutQuart

							legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
						}

					var charts = new Chart(ctx).Bar(data,options);

					$('#order-chart').parents('.move-mod').find('.move-mod-group').on('mouseup', function(e) {
						charts.update();
					});
				})

			</script>
		</div>
	</div>
</div>
    </div>
    <div class="col-lg-4">
    	<div class="panel panel-default">
    <div class="panel-heading">
        <header class="panel-title">
            <div class="text-center">
                <strong>个人信息</strong>
            </div>
        </header>
    </div>
    <div class="panel-body">
        <div class="text-center" id="author">
			<a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=staff&c=mh_profile&a=init">
					                <img src="http://demodaojia.ecjia.com/content/apps/merchant/statics/img/ecjia_avatar.jpg" /><br>
	            	   		</a>
			<h3>{{ $user->nickname }}</h3>
                        <small class="label label-warning">店长</small>
                       	<p>好品质，好店铺！</p>
            <div class="pull-left">
                 <label class="">上次登录IP：</label>
                 {{$user->Ip}}
            </div>
            <div class="pull-left">
                 <label class="">上次登录时间：</label>
                 {{$user->time}}
            </div>

        </div>
    </div>

</div>


<section class="panel">
    <div class="task-thumb-details">
        <h1>平台联系方式</h1>
    </div>
    <table class="table table-hover personal-task">
        <tbody>
            <tr>
                <td>
                    <i class="fa fa-phone"></i>
                </td>
                <td>4001-021-758</td>
            </tr>
            <tr>
                <td>
                    <i class="fa fa-envelope"></i>
                </td>
                <td>ecjia@ecjia.com </td>
            </tr>
        </tbody>
    </table>
</section>
<section class="panel">
    <div class="task-thumb-details">
        <h1>公告通知</h1>
    </div>
    <table class="table">
        <tbody>
        	        	<tr>
        		<td><a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=shop_notice&id=105'>ECJia到家火热招商中</a></td>
        		<td class="w70">10-25</td>
        	</tr>
        	        </tbody>
    </table>
</section>
<section class="panel">
    <div class="task-thumb-details">
          <h1>操作日志</h1>
    </div>
    <table class="table personal-task ">
        <tbody>
						<tr>
				<td style="text-align:left;">2017-12-18 13:50:27 管理员张三, 在湖北省武汉市IP下编辑 商品: 红富士。</td>
			</tr>
						<tr>
				<td style="text-align:left;">2017-12-18 13:50:14 管理员张三, 在湖北省武汉市IP下添加 商品: 红富士。</td>
			</tr>
						<tr>
				<td style="text-align:left;">2017-12-18 10:32:36 管理员张三, 在河南省IP下批量标记 通知: 您有一笔新订单，订单号为：2017121828459。</td>
			</tr>
						<tr>
				<td style="text-align:left;">2017-12-18 10:32:36 管理员张三, 在河南省IP下批量标记 通知: 您有一笔新订单，订单号为：2017121828459。</td>
			</tr>
						<tr>
				<td style="text-align:left;">2017-12-18 09:47:34 管理员张三, 在湖北省武汉市IP下添加 商品: hhhh。</td>
			</tr>
					</tbody>
    </table>
    <div class="ecjiaf-tar" style="margin-right:15px;padding-bottom:15px;"><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=staff&c=mh_log&a=init" title="查看更多">查看更多</a></div>
</section>


    </div>
</div>

<div class="row">
    <div class="col-lg-4">

    </div>
    <div class="col-lg-8">

    </div>
</div>

<div class="row">
    <div class="col-lg-12">

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










    <div class="pjaxLoadding"><i class="peg"></i></div>
</body>
</html>
