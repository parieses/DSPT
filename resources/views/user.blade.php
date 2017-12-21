
<!DOCTYPE html>
<html lang="zh" class="pjaxLoadding-busy">
<head>
    <meta name="Generator" content="ECJIA 1.24" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>个人资料 - DSPT</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="ecjia team" />
@include('public.js')
    <link rel="stylesheet" id="googleapis-fonts-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-css/fonts/fonts.googleapis.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="bootstrap-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-css/bootstrap.min.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="bootstrap-reset-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-css/bootstrap-reset.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="ecjia-merchant-ui-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-css/ecjia-merchant.ui.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="ecjia-mh-font-awesome-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-css/font-awesome.min.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="ecjia-mh-owl-carousel-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-css/owl.carousel.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="ecjia-mh-owl-theme-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-css/owl.theme.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="ecjia-mh-owl-transitions-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-css/owl.transitions.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="ecjia-mh-table-responsive-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-css/table-responsive.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="ecjia-mh-jquery-easy-pie-chart-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="ecjia-mh-function-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-css/ecjia.function.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="ecjia-mh-page-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-css/page.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="ecjia-mh-chosen-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/assets/chosen/chosen.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="bootstrap-fileupload-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/assets/bootstrap-fileupload/bootstrap-fileupload.css?ver=1.24" type="text/css" media="" />
    <link rel="stylesheet" id="style-css"  href="http://demodaojia.ecjia.com/content/apps/staff/statics/css/style.css?ver=1.24" type="text/css" media="all" />

    <script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/jquery-1.11.1.min.js?ver=1.24"></script>
    <script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/bootstrap.min.js?ver=1.24"></script>
    <script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/js/jquery-pjax.js?ver=1.24"></script>
    <script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/lib/ecjia-js/ecjia.js?ver=1.24"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var admin_lang = {"display_sidebar":"\u663e\u793a\u4fa7\u8fb9\u680f","hide_sidebar":"\u9690\u85cf\u4fa7\u8fb9\u680f","search_check":"\u8bf7\u5148\u8f93\u5165\u641c\u7d22\u4fe1\u606f","search_no_message":"\u672a\u641c\u7d22\u5230\u5bfc\u822a\u4fe1\u606f","success":"\u64cd\u4f5c\u6210\u529f","fail":"\u64cd\u4f5c\u5931\u8d25","confirm_jump":"\u662f\u5426\u786e\u8ba4\u8df3\u8f6c\uff1f","ok":"\u786e\u5b9a","cancel":"\u53d6\u6d88","request_failed":"\u8bf7\u6c42\u5931\u8d25\uff0c\u9519\u8bef\u7f16\u53f7\uff1a","error_msg":"\uff0c\u9519\u8bef\u4fe1\u606f\uff1a"};
        /* ]]> */
    </script>
    <script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/ecjia/ecjia-merchant.js?ver=1.24"></script>
    <script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/ecjia/ecjia-merchant-ui.js?ver=1.24"></script>
    <script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/assets/bootstrap-fileupload/bootstrap-fileupload.js?ver=1.24"></script>
    <script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/staff/statics/js/profile.js?ver=1.24"></script>
    <script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/staff/statics/js/cropbox.js?ver=1.24"></script>





</head>
<body>

<div id="wrapper">

@include('public.html')



    <div class="container">
        <div id="main" class="main_content">


            <ol class="breadcrumb">
                <li><a href="/">管理主页</a></li>
                <li class="active">个人资料</li>
            </ol>




            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">
                        个人资料				</h2>
                </div>
            </div>

            <div class="row" id="real-estates-detail">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center" id="author">
                                <img src="http://demodaojia.ecjia.com/content/apps/merchant/statics/img/ecjia_avatar.jpg" /><br>
                                <h3>{{$user->nickname}}</h3>
                                <small class="label label-warning">{{$user->position}}</small>
                                <p>{{$user->introduce}}</p>
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
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="panel">
                        <div class="panel-body">
                            <ul id="myTab" class="nav nav-pills">
                                <li class="active"><a href="#photos">个人资料</a></li>
                                <li class=""><a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=staff&c=mh_profile&a=setting'>账户设置</a></li>
                                <li class=""><a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=staff&c=mh_profile&a=avatar'>头像设置</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="photos">
                                    <form method="post" name="profileForm" id="profileForm" action="/Admin/user">
                                        {{ csrf_field() }}
                                        <br>
                                        <div class="form-group controls">
                                            <input class="form-control" id="user_ident" name="user_ident" type="hidden" value="{{$user->number}}"  />
                                        </div>

                                        <div class="form-group controls">
                                            <label>用户姓名</label>
                                            <input class="form-control" id="name" name="name" type="text" value="{{$user->name}}" />
                                        </div>

                                        <div class="form-group controls">
                                            <label>用户昵称</label>
                                            <input class="form-control" id="nick_name" name="nick_name" type="text" value="{{$user->nickname}}"/>
                                        </div>

                                        <div class="form-group controls">
                                            <label>自我介绍</label>
                                            <textarea class="form-control" id="introduction" name="introduction">{{$user->introduce}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">提交</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

    <div class="container">

    </div>

</div>



<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/jquery.customSelect.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/jquery.dcjqaccordion.2.7.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/jquery.nicescroll.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/jquery.scrollTo.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/jquery.sparkline.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/jquery.stepy.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/jquery.tagsinput.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/jquery.validate.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/jquery-actual.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/jquery-migrate.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/jquery.quicksearch.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/owl.carousel.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/respond.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/mh-js/sparkline-chart.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/assets/chosen/chosen.jquery.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/assets/Chart/Chart.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/js/jquery-cookie.min.js?ver=1"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/js/json2.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/js/ui/jquery-ui-totop.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/lib/smoke/smoke.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/lib/validation/jquery.validate.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/lib/jquery-form/jquery.form.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/staff/statics/js/migrate.js?ver=1.24"></script>







<div class="pjaxLoadding"><i class="peg"></i></div>
</body>
</html>
