
<!DOCTYPE html>
<html lang="zh" class="pjaxLoadding-busy">
<head>
<meta name="Generator" content="ECJIA 1.24" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>评论列表 - 天天果园</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="ecjia team" />
    <meta name="_token" content="{{ csrf_token() }}"/>
	<link rel="shortcut icon" href="favicon.ico">
    @include('public.js')
    <!--[if lt IE 9]>
    <![endif]-->
    <link rel="stylesheet" id="googleapis-fonts-css" href="/static/fonts.googleapis.css" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-css" href="/static/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-reset-css" href="/static/bootstrap-reset.css" type="text/css" media="all">
    <link rel="stylesheet" id="ecjia-merchant-ui-css" href="/static/ecjia-merchant.ui.css" type="text/css" media="all">
    <link rel="stylesheet" id="ecjia-mh-font-awesome-css" href="/static/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="ecjia-mh-owl-carousel-css" href="/static/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" id="ecjia-mh-owl-theme-css" href="/static/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" id="ecjia-mh-owl-transitions-css" href="/static/owl.transitions.css" type="text/css" media="all">
    <link rel="stylesheet" id="ecjia-mh-table-responsive-css" href="/static/table-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" id="ecjia-mh-jquery-easy-pie-chart-css" href="/static/jquery.easy-pie-chart.css" type="text/css" media="all">
    <link rel="stylesheet" id="ecjia-mh-function-css" href="/static/ecjia.function.css" type="text/css" media="all">
    <link rel="stylesheet" id="ecjia-mh-page-css" href="/static/page.css" type="text/css" media="all">
    <link rel="stylesheet" id="ecjia-mh-chosen-css" href="/static/chosen.css" type="text/css" media="all">
    <link rel="stylesheet" id="goods-colorpicker-style-css" href="/static/colorpicker.css" type="text/css" media="all">
    <link rel="stylesheet" id="uniform-aristo-css" href="/static/uniform.aristo.css" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-colorbox-css" href="/static/colorbox.css" type="text/css" media="all">
    <link rel="stylesheet" id="ecjia-mh-editable-css-css" href="/static/bootstrap-editable.css" type="text/css" media="all">
    <link rel="stylesheet" id="datepicker-css" href="/static/datepicker.css" type="text/css" media="all">
    <link rel="stylesheet" id="goods-css" href="/static/goods.css" type="text/css" media="all">

    <script src="https://hm.baidu.com/hm.js?45572e750ba4de1ede0e776212b5f6cd"></script><script type="text/javascript" src="/static/jquery-1.11.1.min.js"></script>
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
    <script type="text/javascript" src="/static/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="/static/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/static/bootstrap-datepicker.min.js"></script>

    
    
	
    
</head>
<body>
    
    <div id="wrapper">
        
@include('public.html')
        

        
        <div class="container">
            <div id="main" class="main_content">
                
                        
        <ol class="breadcrumb">
            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=dashboard&a=init">管理主页</a></li>
            			<li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=comment&c=mh_comment&a=init">评论管理</a></li>
                        <li class="active">评论列表</li>
                    </ol>
        
        
                
                
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">
			评论列表			<div class="pull-right">
							</div>
		</h2>
	</div>
</div>

<div class="mh-comment-list row">
	<div class="col-lg-12">
		<div class="panel">
			<div class="panel-body">
				{{--<div class="nav-heading filter">--}}
				    {{--<ul class="nav-status">--}}
                		{{--<li><span>全部</span></li>--}}
                    {{--</ul>--}}
				{{--</div>--}}
                {{--<table class="table table-th-block">--}}
                    {{--<tbody>--}}
                        {{--<tr>--}}
                            {{--<td class="active w150">评分级别：</td>--}}
                            {{--<td>--}}
								{{--@foreach($comment as $v)--}}
                                    {{--@if (count($v->grade) === 1)--}}
                                        {{--<div class="status-distance">好评</div>--}}
                                    {{--@endif--}}
                                {{--@endforeach--}}
							{{--</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td class="active">有无晒图：</td>--}}
                            {{--<td>--}}
                                    {{--@foreach ($comment as $v)--}}
                                        {{--@if (count($v->image) === 1)--}}
                                            {{--<div class="status-distance">有</div>--}}
                                        {{--@endif--}}
                                    {{--@endforeach--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            </div>
			<div class="panel-body panel-body-small">
				<form class="form-inline pull-right" name="searchForm" id="form" method="post" action="/Admin/search" enctype="multipart/form-data">
                    {{ csrf_field() }}
					<div class="screen f_r">
						<div class="form-group">
							<input type="text" class="form-control" id=" user" name="user" value="" placeholder="输入用户名称">
						</div>
						<button  class="btn btn-primary screen-btn" id="button" type="submit"><i class="fa fa-search"></i>搜索 </button>
					</div>
				</form>
			</div>
            {{--@if($result['result'] == '1')--}}
                {{--{{ alert('用户名不存在!','','2') }}--}}
            {{--@endif--}}
			<div class="panel-body panel-body-small">
				<section class="panel">
					<table class="table table-striped table-hover table-hide-edit">
						<thead>
							<tr>
                                <th class="w150">用户id</th>
                                <th class="w150">用户名</th>
                                <th class="w150">购买衣物</th>
                                <th class="w150">评分级别</th>
								<th>评论详情</th>
								<th class="w150">星级</th>
							</tr>
						</thead>
						<tbody>
                                @foreach ($comment as $v)
                                <tr>
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->user}}</td>
                                    @if (($v->cloth) === 1)
                                        <td>大衣</td>
                                    @elseif(($v->cloth) === 2)
                                        <td>内裤</td>
                                    @endif
                                    @if (($v->grade) === 1)
                                        <td>好评</td>
                                    @elseif(($v->grade) === 2)
                                        <td>中评</td>
                                    @elseif(($v->grade) === 3)
                                        <td>差评</td>
                                    @endif
                                    <td>{{$v->comment}}</td>
                                    <td>{{$v->star}}</td>
                                </tr>
                                @endforeach

                        </tbody>
					</table>
				</section>
				
			</div>
		</div>
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
    
	
	

    
    
    
<script type="text/javascript">
//    $('button').click(function () {
//        $.ajax({
//            type:"POST",
//            url:"/Admin/search",
//            data:{user:'admin'},
//            dataType:'json',
//            headers: {
//
//                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
//
//            },
//            success:function (data) {
//                if(data['status'] === 1){
//                    alert('用户名不存在!','/Admin/comment','2');
//                }
//            },
//            error:function () {
//                alert(222);
//            }
//
//        });
//        return;
//    })
//	ecjia.merchant.mh_comment.comment_list();
</script>

    
    
    <div class="pjaxLoadding"><i class="peg"></i></div>
</body>
</html>
