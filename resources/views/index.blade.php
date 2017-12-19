
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

    <!--[if lt IE 9]>
    <script src="http://demodaojia.ecjia.com/content/apps/merchant/statics/js/html5shiv.js"></script>
    <script src="http://demodaojia.ecjia.com/content/apps/merchant/statics/js/respond.min.js"></script>
    <![endif]-->
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





</head>
<body>

<div id="wrapper">

    <div class="header-top">

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="container">

                <div class="navbar-header">
                    <a class="navbar-brand" href="#"></i> <strong>DSPT</strong></a>
                </div>

                <ul class="nav navbar-nav navbar-left top-menu">

                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                            <i class="fa fa-bell-o"></i>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">您有 0 条新通知</p>
                            </li>
                            <div class="mh300 ecjiaf-oa">
                                <li>
                                    <a href='javascript:;'>
                                <span class="label label-info">
                                	<i class="fa fa-bullhorn"></i>
                                </span>
                                        <span class="m_l5">暂无新通知</span>
                                        <span class="small italic"></span>
                                    </a>
                                </li>
                            </div>
                            <li >
                                <a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=notification&c=mh_notification&a=init">查看所有通知</a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right top-menu">
                    <li class="dropdown">
                        <input type="text" class="form-control input-sm search_query" placeholder="搜索导航" data-toggle="dropdown">
                        <ul class="dropdown-menu search-nav">
                            <li class="search_query_none"><a href="javascript:;">请先输入搜索信息</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init"><i class="fa fa-list-alt"></i> 商品列表</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=add"><i class="fa fa-plus-square-o"></i> 添加新商品</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_spec&a=init"><i class="fa fa-navicon"></i> 商品规格</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=init"><i class="fa fa-th-list"></i> 商品分类</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=trash"><i class="fa fa-recycle"></i> 商品回收站</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=merchant&a=init&date=today"><i class="fa fa-list-alt"></i> 当天订单</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=merchant&a=init"><i class="fa fa-list-alt"></i> 订单列表</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=merchant&a=order_query"><i class="fa fa-list-ul"></i> 订单查询</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=merchant&a=merge"><i class="fa fa-columns"></i> 合并订单</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_delivery&a=init"><i class="fa fa-check-square"></i> 发货单列表</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_reminder&a=init"><i class="fa fa-file-o"></i> 催单提醒</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_back&a=init"><i class="fa fa-undo"></i> 退货单列表</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_validate_order&a=init"><i class="fa fa-check-circle"></i> 验单查询</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=comment&c=mh_comment&a=init"><i class="fa fa-comment"></i> 评论列表</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=comment&c=mh_appeal&a=init"><i class="fa fa-exclamation-circle"></i> 申诉列表</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=promotion&c=merchant&a=init"><i class="fa fa-table"></i> 促销商品</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=bonus&c=merchant&a=init"><i class="fa fa-table"></i> 红包类型</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=favourable&c=merchant&a=init"><i class="fa fa-table"></i> 优惠活动</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=quickpay&c=merchant&a=init"><i class="fa fa-cogs"></i> 优惠买单规则</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=quickpay&c=mh_order&a=init"><i class="fa fa fa-list-ul"></i> 订单列表</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=quickpay&c=mh_order&a=search_order"><i class="fa fa-search"></i> 买单订单查询</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=quickpay&c=mh_sale_general&a=init"><i class="fa fa-bar-chart-o"></i> 买单订单统计</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=quickpay&c=mh_sale_list&a=init"><i class="fa fa fa-list"></i> 买单销售明细</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=stats&c=mh_keywords_stats&a=init"><i class="fa fa-search"></i> 搜索关键字</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_order_stats&a=init"><i class="fa fa-bar-chart-o"></i> 订单统计</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_sale_general&a=init"><i class="fa fa-bar-chart-o"></i> 销售概况</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_sale_list&a=init"><i class="fa fa-list"></i> 销售明细</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_sale_order&a=init"><i class="fa fa-trophy"></i> 销售排行</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=article&c=merchant&a=init"><i class="fa fa-list"></i> 文章列表</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=article&c=merchant&a=add"><i class="fa fa-indent"></i> 我要投稿</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=article&c=merchant&a=article_comment"><i class="fa fa-comments"></i> 文章评论</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=staff&c=mh_group&a=init"><i class="fa fa-share-alt"></i> 员工管理</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=staff&c=mh_log&a=init"><i class="fa fa-list-alt"></i> 员工日志</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=commission&c=merchant&a=init"><i class="fa fa-money"></i> 结算账单</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=commission&c=merchant&a=day"><i class="fa fa-money"></i> 每日账单</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=commission&c=merchant&a=record"><i class="fa fa-list-alt"></i> 订单分成</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=commission&c=merchant&a=count"><i class="fa fa-bar-chart-o"></i> 结算统计</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=shipping&c=mh_shipping&a=shipping_template"><i class="fa fa-inbox"></i> 配送管理</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=adsense&c=mh_cycleimage&a=init"><i class="fa fa-picture-o"></i> 轮播图</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=adsense&c=mh_shortcut&a=init"><i class="fa fa-th-list"></i> 快捷菜单</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=adsense&c=mh_group&a=init"><i class="fa fa-th-large"></i> 广告组编排</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=adsense&c=mh_position&a=init"><i class="fa fa-volume-up"></i> 广告位管理</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=init"><i class="fa fa-gears"></i> 店铺设置</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=mh_franchisee&a=init"><i class="fa fa-info-circle"></i> 入驻信息</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=mh_franchisee&a=receipt"><i class="fa fa-credit-card"></i> 收款账号</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=mh_switch"><i class="fa fa-power-off"></i> 店铺上下线</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=template"><i class="fa fa-navicon"></i> 店铺模版</a></li>
                            <li class="divider"></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=shopguide&c=merchant&a=init"><i class="fa fa-paper-plane"></i> 店铺向导</a></li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <img alt="" width="30" height="30" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/img/ecjia_avatar.jpg">
                            <span class="username">张三</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <div class="log-arrow-up"></div>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=staff&c=mh_profile&a=init"><i class="fa fa-cog"></i> 个人设置</a></li>
                            <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=notification&c=mh_notification&a=init"><i class="fa fa-bell-o"></i> 通知</a></li>
                            <li class="divider"></li>
                            <li><a href="/Admin/logout"><i class="fa fa-key"></i> 退出登录</a></li>
                        </ul>
                li>
                </ul>
            </div>
        </nav>

    </div>

    <div id="header"
    >
        <div class="overlay">
            <nav class="navbar" role="navigation">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <strong>MENU</strong>
                        </button>
                    </div>


                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav"><li class="active">
                                <a href="/Admin/index" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-dashboard fa-3x"></i><br>仪表盘
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-gift fa-3x"></i><br>商品 <span class="caret"></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init"><i class="fa fa-list-alt"></i> 商品列表</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=add"><i class="fa fa-plus-square-o"></i> 添加新商品</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_spec&a=init"><i class="fa fa-navicon"></i> 商品规格</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=init"><i class="fa fa-th-list"></i> 商品分类</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=trash"><i class="fa fa-recycle"></i> 商品回收站</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-list fa-3x"></i><br>订单 <span class="caret"></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=merchant&a=init&date=today"><i class="fa fa-list-alt"></i> 当天订单</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=merchant&a=init"><i class="fa fa-list-alt"></i> 订单列表</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=merchant&a=order_query"><i class="fa fa-list-ul"></i> 订单查询</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=merchant&a=merge"><i class="fa fa-columns"></i> 合并订单</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_delivery&a=init"><i class="fa fa-check-square"></i> 发货单列表</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_reminder&a=init"><i class="fa fa-file-o"></i> 催单提醒</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_back&a=init"><i class="fa fa-undo"></i> 退货单列表</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_validate_order&a=init"><i class="fa fa-check-circle"></i> 验单查询</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-comments fa-3x"></i><br>评论 <span class="caret"></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=comment&c=mh_comment&a=init"><i class="fa fa-comment"></i> 评论列表</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=comment&c=mh_appeal&a=init"><i class="fa fa-exclamation-circle"></i> 申诉列表</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-heart fa-3x"></i><br>促销 <span class="caret"></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=promotion&c=merchant&a=init"><i class="fa fa-table"></i> 促销商品</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=bonus&c=merchant&a=init"><i class="fa fa-table"></i> 红包类型</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=favourable&c=merchant&a=init"><i class="fa fa-table"></i> 优惠活动</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-flash fa-3x"></i><br>买单 <span class="caret"></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=quickpay&c=merchant&a=init"><i class="fa fa-cogs"></i> 优惠买单规则</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=quickpay&c=mh_order&a=init"><i class="fa fa fa-list-ul"></i> 订单列表</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=quickpay&c=mh_order&a=search_order"><i class="fa fa-search"></i> 买单订单查询</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=quickpay&c=mh_sale_general&a=init"><i class="fa fa-bar-chart-o"></i> 买单订单统计</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=quickpay&c=mh_sale_list&a=init"><i class="fa fa fa-list"></i> 买单销售明细</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-bar-chart-o fa-3x"></i><br>报表 <span class="caret"></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=stats&c=mh_keywords_stats&a=init"><i class="fa fa-search"></i> 搜索关键字</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_order_stats&a=init"><i class="fa fa-bar-chart-o"></i> 订单统计</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_sale_general&a=init"><i class="fa fa-bar-chart-o"></i> 销售概况</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_sale_list&a=init"><i class="fa fa-list"></i> 销售明细</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=orders&c=mh_sale_order&a=init"><i class="fa fa-trophy"></i> 销售排行</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-copy fa-3x"></i><br>文章 <span class="caret"></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=article&c=merchant&a=init"><i class="fa fa-list"></i> 文章列表</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=article&c=merchant&a=add"><i class="fa fa-indent"></i> 我要投稿</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=article&c=merchant&a=article_comment"><i class="fa fa-comments"></i> 文章评论</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-group fa-3x"></i><br>员工 <span class="caret"></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=staff&c=mh_group&a=init"><i class="fa fa-share-alt"></i> 员工管理</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=staff&c=mh_log&a=init"><i class="fa fa-list-alt"></i> 员工日志</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-money fa-3x"></i><br>结算 <span class="caret"></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=commission&c=merchant&a=init"><i class="fa fa-money"></i> 结算账单</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=commission&c=merchant&a=day"><i class="fa fa-money"></i> 每日账单</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=commission&c=merchant&a=record"><i class="fa fa-list-alt"></i> 订单分成</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=commission&c=merchant&a=count"><i class="fa fa-bar-chart-o"></i> 结算统计</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-truck fa-3x"></i><br>配送 <span class="caret"></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=shipping&c=mh_shipping&a=shipping_template"><i class="fa fa-inbox"></i> 配送管理</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-bullhorn fa-3x"></i><br>广告 <span class="caret"></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=adsense&c=mh_cycleimage&a=init"><i class="fa fa-picture-o"></i> 轮播图</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=adsense&c=mh_shortcut&a=init"><i class="fa fa-th-list"></i> 快捷菜单</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=adsense&c=mh_group&a=init"><i class="fa fa-th-large"></i> 广告组编排</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=adsense&c=mh_position&a=init"><i class="fa fa-volume-up"></i> 广告位管理</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" target="_self">
                                    <div class="text-center">
                                        <i class="fa fa-home fa-3x"></i><br>店铺 <span class="caret"></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=init"><i class="fa fa-gears"></i> 店铺设置</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=mh_franchisee&a=init"><i class="fa fa-info-circle"></i> 入驻信息</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=mh_franchisee&a=receipt"><i class="fa fa-credit-card"></i> 收款账号</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=mh_switch"><i class="fa fa-power-off"></i> 店铺上下线</a></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=template"><i class="fa fa-navicon"></i> 店铺模版</a></li>
                                    <li class="divider"></li>
                                    <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=shopguide&c=merchant&a=init"><i class="fa fa-paper-plane"></i> 店铺向导</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>




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
                                            <img src="http://demodaojia.ecjia.com/content/uploads/merchant/62/data/shop_logo/1477683254803646447.jpg" width="200" height="200" class="thumbnail" style="margin-left: 20px;margin-bottom: 0;" />
                                        </div>
                                        <div class="col-sm-5">
                                            <h4>
                                                <strong>天天果园</strong>
                                            </h4>
                                            <hr style="margin-top: 10px;margin-bottom: 10px;">
                                            <p>水果生鲜</p>
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
			<h3>张三</h3>
                        <small class="label label-warning">店长</small>
                       	<p>好品质，好店铺！</p>
            <div class="pull-left">
                 <label class="">上次登录IP：</label>
                 218.62.24.171
            </div>
            <div class="pull-left">
                 <label class="">上次登录时间：</label>
                 2017-12-18 14:49
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
<div class="footer-bottom">
    <div class="container">
        <div class="footer-bottom-widget">
            <div class="row">
                <div class="col-sm-6">
                    <p>
	                    <span class="sosmed-footer">
	                    		                        <a target="__blank" href="http://weibo.com/ECMBT"><i class="fa fa-weibo" title="新浪微博"></i></a>


	                        	                        <a href="javascript:;" style="color:#333333;"><i class="fa fa-weixin" data-toggle="popover" data-placement="top" data-id="shop_wechat_qrcode" title="打开手机微信扫一扫"></i></a>


	                        	                        <a href="javascript:;" style="color:#333333;"><i class="fa fa-apple" data-toggle="popover" data-placement="top" data-id="mobile_iphone_qrcode" title="打开手机扫描二维码下载"></i></a>

	                        	                        <a href="javascript:;" style="color:#333333;"><i class="fa fa-android" data-toggle="popover" data-placement="top" data-id="mobile_android_qrcode" title="打开手机扫描二维码下载"></i></a>
	                    		                    </span>

	                    	                    <div class="hide" id="content_shop_wechat_qrcode">
                        	<div class="t_c"><img class="w100 h100" src="http://demodaojia.ecjia.com/content/uploads/data/assets/ecjia-intro/shop_wechat_qrcode.jpg"></div>
                        </div>

                                                <div class="hide" id="content_mobile_iphone_qrcode">
                        	<div class="t_c"><img class="w100 h100" src="http://demodaojia.ecjia.com/content/uploads/data/assets/qrcode.png"></div>
                        </div>

                                                <div class="hide" id="content_mobile_android_qrcode">
                        	<div class="t_c"><img class="w100 h100" src="http://demodaojia.ecjia.com/content/uploads/data/assets/qrcode.png"></div>
                        </div>
                                            </p>
                </div>
                <div class="col-sm-6">
                    <p class="footer-bottom-links">
                    Copyright &copy; 2017 ECJia到家 <a href="http://www.miibeian.gov.cn" target="_blank">沪ICP备20170120号</a>                    </p>
                    <p class="footer-bottom-links">
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=shopinfo&id=101'>公司简介</a>
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=shopinfo&id=104'>联系我们</a>
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=shopinfo&id=107'>使用条款</a>
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=merchant&a=shopinfo&id=108'>隐私协议</a>
                                            </p>
                </div>
            </div>
        </div>
    </div>
</div>
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






    <div class="pjaxLoadding"><i class="peg"></i></div>
</body>
</html>
