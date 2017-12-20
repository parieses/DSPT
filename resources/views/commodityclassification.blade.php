
<!DOCTYPE html>
<html lang="zh" class="pjaxLoadding-busy">
<head>
    <meta name="Generator" content="ECJIA 1.24" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品分类 - 天天果园</title>
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
    <link rel="stylesheet" id="uniform-aristo-css"  href="http://demodaojia.ecjia.com/content/system/statics/lib/uniform/Aristo/uniform.aristo.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="bootstrap-fileupload-css"  href="http://demodaojia.ecjia.com/content/apps/goods/statics/assets/bootstrap-fileupload/bootstrap-fileupload.css?ver=1.24" type="text/css" media="all" />
    <link rel="stylesheet" id="bootstrap-editable-css-css"  href="http://demodaojia.ecjia.com/content/apps/merchant/statics/assets/x-editable/bootstrap-editable/css/bootstrap-editable.css?ver=1.24" type="text/css" media="" />

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
    <script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/lib/jasny-bootstrap/js/bootstrap-placeholder.min.js?ver=1.24"></script>
    <script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/goods/statics/js/merchant_goods_category.js?ver=1.24"></script>
    <script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/merchant/statics/assets/x-editable/bootstrap-editable/js/bootstrap-editable.min.js?ver=1.24"></script>





</head>
<body>

<div id="wrapper">

@include('public.html')




    <div class="container">
        <div id="main" class="main_content">


            <ol class="breadcrumb">
                <li><a href="/">管理主页</a></li>
                <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init">商品管理</a></li>
                <li class="active">商品分类</li>
            </ol>





            <div class="page-header">
                <div class="pull-left">
                    <h2>
                        商品分类		</h2>
                </div>
                <div class="pull-right">
                    <a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=add" class="btn btn-primary data-pjax"><i class="fa fa-plus"></i> 添加商品分类 </a>

                    <a class="btn btn-primary data-pjax" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=move" id="sticky_a"><i class="fa fa-exchange"></i> 转移商品 </a>

                </div>
                <div class="clearfix"></div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-body panel-body-small">
                            <section class="panel">
                                <table class="table table-striped table-advance table-hover" id="list-table">
                                    <thead>
                                    <tr>
                                        <th>分类名称</th>
                                        <th class="w200">排序</th>
                                        <th class="w200">是否显示</th>
                                        <th class="w100">操作</th>
                                    </tr>
                                    </thead>
                                    <tr class="0" id="0_4">
                                        <td class="first-cell" align="left">
                                            <i class="fa fa-minus-square-o cursor_pointer ecjiafc-blue" id="icon_0_4" style="margin-left:0em" onclick="rowClicked(this)" /></i>
                                            <span><a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&cat_id=4'>热带水果</a></span>
                                        </td>
                                        <td>
								<span class="cursor_pointer" data-trigger="editable" data-placement="top" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit_sort_order" data-name="sort_order" data-pk="4" data-title="请输入排序序号">
									50
								</span>
                                        </td>
                                        <td>
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=toggle_is_show" data-id="4"></i>
                                        </td>
                                        <td>
                                            <a class="data-pjax no-underline" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit&cat_id=4' title="编辑"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                            <a class="ajaxremove no-underline" data-toggle="ajaxremove" data-msg="您确定要删除该分类吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=remove&id=4'><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                    </tr>
                                    <tr class="0" id="0_12">
                                        <td class="first-cell" align="left">
                                            <i class="fa fa-minus-square-o cursor_pointer ecjiafc-blue" id="icon_0_12" style="margin-left:0em" onclick="rowClicked(this)" /></i>
                                            <span><a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&cat_id=12'>时令水果</a></span>
                                        </td>
                                        <td>
								<span class="cursor_pointer" data-trigger="editable" data-placement="top" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit_sort_order" data-name="sort_order" data-pk="12" data-title="请输入排序序号">
									50
								</span>
                                        </td>
                                        <td>
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=toggle_is_show" data-id="12"></i>
                                        </td>
                                        <td>
                                            <a class="data-pjax no-underline" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit&cat_id=12' title="编辑"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                            <a class="ajaxremove no-underline" data-toggle="ajaxremove" data-msg="您确定要删除该分类吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=remove&id=12'><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                    </tr>
                                    <tr class="0" id="0_2">
                                        <td class="first-cell" align="left">
                                            <i class="fa fa-minus-square-o cursor_pointer ecjiafc-blue" id="icon_0_2" style="margin-left:0em" onclick="rowClicked(this)" /></i>
                                            <span><a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&cat_id=2'>国产水果</a></span>
                                        </td>
                                        <td>
								<span class="cursor_pointer" data-trigger="editable" data-placement="top" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit_sort_order" data-name="sort_order" data-pk="2" data-title="请输入排序序号">
									50
								</span>
                                        </td>
                                        <td>
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=toggle_is_show" data-id="2"></i>
                                        </td>
                                        <td>
                                            <a class="data-pjax no-underline" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit&cat_id=2' title="编辑"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                            <a class="ajaxremove no-underline" data-toggle="ajaxremove" data-msg="您确定要删除该分类吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=remove&id=2'><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                    </tr>
                                    <tr class="1" id="1_10">
                                        <td class="first-cell" align="left">
                                            <i class="fa fa-minus-square-o cursor_pointer ecjiafc-blue" id="icon_1_10" style="margin-left:1em" onclick="rowClicked(this)" /></i>
                                            <span><a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&cat_id=10'>苹果</a></span>
                                        </td>
                                        <td>
								<span class="cursor_pointer" data-trigger="editable" data-placement="top" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit_sort_order" data-name="sort_order" data-pk="10" data-title="请输入排序序号">
									50
								</span>
                                        </td>
                                        <td>
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=toggle_is_show" data-id="10"></i>
                                        </td>
                                        <td>
                                            <a class="data-pjax no-underline" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit&cat_id=10' title="编辑"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                            <a class="ajaxremove no-underline" data-toggle="ajaxremove" data-msg="您确定要删除该分类吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=remove&id=10'><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                    </tr>
                                    <tr class="1" id="1_14">
                                        <td class="first-cell" align="left">
                                            <i class="fa fa-minus-square-o cursor_pointer ecjiafc-blue" id="icon_1_14" style="margin-left:1em" onclick="rowClicked(this)" /></i>
                                            <span><a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&cat_id=14'>柑桔橙柚</a></span>
                                        </td>
                                        <td>
								<span class="cursor_pointer" data-trigger="editable" data-placement="top" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit_sort_order" data-name="sort_order" data-pk="14" data-title="请输入排序序号">
									50
								</span>
                                        </td>
                                        <td>
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=toggle_is_show" data-id="14"></i>
                                        </td>
                                        <td>
                                            <a class="data-pjax no-underline" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit&cat_id=14' title="编辑"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                            <a class="ajaxremove no-underline" data-toggle="ajaxremove" data-msg="您确定要删除该分类吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=remove&id=14'><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                    </tr>
                                    <tr class="1" id="1_11">
                                        <td class="first-cell" align="left">
                                            <i class="fa fa-minus-square-o cursor_pointer ecjiafc-blue" id="icon_1_11" style="margin-left:1em" onclick="rowClicked(this)" /></i>
                                            <span><a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&cat_id=11'>梨</a></span>
                                        </td>
                                        <td>
								<span class="cursor_pointer" data-trigger="editable" data-placement="top" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit_sort_order" data-name="sort_order" data-pk="11" data-title="请输入排序序号">
									50
								</span>
                                        </td>
                                        <td>
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=toggle_is_show" data-id="11"></i>
                                        </td>
                                        <td>
                                            <a class="data-pjax no-underline" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit&cat_id=11' title="编辑"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                            <a class="ajaxremove no-underline" data-toggle="ajaxremove" data-msg="您确定要删除该分类吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=remove&id=11'><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                    </tr>
                                    <tr class="1" id="1_13">
                                        <td class="first-cell" align="left">
                                            <i class="fa fa-minus-square-o cursor_pointer ecjiafc-blue" id="icon_1_13" style="margin-left:1em" onclick="rowClicked(this)" /></i>
                                            <span><a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&cat_id=13'>猕猴桃</a></span>
                                        </td>
                                        <td>
								<span class="cursor_pointer" data-trigger="editable" data-placement="top" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit_sort_order" data-name="sort_order" data-pk="13" data-title="请输入排序序号">
									50
								</span>
                                        </td>
                                        <td>
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=toggle_is_show" data-id="13"></i>
                                        </td>
                                        <td>
                                            <a class="data-pjax no-underline" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit&cat_id=13' title="编辑"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                            <a class="ajaxremove no-underline" data-toggle="ajaxremove" data-msg="您确定要删除该分类吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=remove&id=13'><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                    </tr>
                                    <tr class="1" id="1_65">
                                        <td class="first-cell" align="left">
                                            <i class="fa fa-minus-square-o cursor_pointer ecjiafc-blue" id="icon_1_65" style="margin-left:1em" onclick="rowClicked(this)" /></i>
                                            <span><a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&cat_id=65'>李</a></span>
                                        </td>
                                        <td>
								<span class="cursor_pointer" data-trigger="editable" data-placement="top" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit_sort_order" data-name="sort_order" data-pk="65" data-title="请输入排序序号">
									50
								</span>
                                        </td>
                                        <td>
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=toggle_is_show" data-id="65"></i>
                                        </td>
                                        <td>
                                            <a class="data-pjax no-underline" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit&cat_id=65' title="编辑"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                            <a class="ajaxremove no-underline" data-toggle="ajaxremove" data-msg="您确定要删除该分类吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=remove&id=65'><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                    </tr>
                                    <tr class="0" id="0_8">
                                        <td class="first-cell" align="left">
                                            <i class="fa fa-minus-square-o cursor_pointer ecjiafc-blue" id="icon_0_8" style="margin-left:0em" onclick="rowClicked(this)" /></i>
                                            <span><a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&cat_id=8'>进口水果</a></span>
                                        </td>
                                        <td>
								<span class="cursor_pointer" data-trigger="editable" data-placement="top" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit_sort_order" data-name="sort_order" data-pk="8" data-title="请输入排序序号">
									50
								</span>
                                        </td>
                                        <td>
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=toggle_is_show" data-id="8"></i>
                                        </td>
                                        <td>
                                            <a class="data-pjax no-underline" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit&cat_id=8' title="编辑"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                            <a class="ajaxremove no-underline" data-toggle="ajaxremove" data-msg="您确定要删除该分类吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=remove&id=8'><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                    </tr>
                                    <tr class="1" id="1_64">
                                        <td class="first-cell" align="left">
                                            <i class="fa fa-minus-square-o cursor_pointer ecjiafc-blue" id="icon_1_64" style="margin-left:1em" onclick="rowClicked(this)" /></i>
                                            <span><a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&cat_id=64'>葡萄</a></span>
                                        </td>
                                        <td>
								<span class="cursor_pointer" data-trigger="editable" data-placement="top" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit_sort_order" data-name="sort_order" data-pk="64" data-title="请输入排序序号">
									50
								</span>
                                        </td>
                                        <td>
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=toggle_is_show" data-id="64"></i>
                                        </td>
                                        <td>
                                            <a class="data-pjax no-underline" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit&cat_id=64' title="编辑"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                            <a class="ajaxremove no-underline" data-toggle="ajaxremove" data-msg="您确定要删除该分类吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=remove&id=64'><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                    </tr>
                                    <tr class="0" id="0_63">
                                        <td class="first-cell" align="left">
                                            <i class="fa fa-minus-square-o cursor_pointer ecjiafc-blue" id="icon_0_63" style="margin-left:0em" onclick="rowClicked(this)" /></i>
                                            <span><a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&cat_id=63'>礼品果篮</a></span>
                                        </td>
                                        <td>
								<span class="cursor_pointer" data-trigger="editable" data-placement="top" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit_sort_order" data-name="sort_order" data-pk="63" data-title="请输入排序序号">
									50
								</span>
                                        </td>
                                        <td>
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=toggle_is_show" data-id="63"></i>
                                        </td>
                                        <td>
                                            <a class="data-pjax no-underline" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=edit&cat_id=63' title="编辑"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                            <a class="ajaxremove no-underline" data-toggle="ajaxremove" data-msg="您确定要删除该分类吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_category&a=remove&id=63'><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                                        </td>
                                    </tr>
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
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/lib/validation/jquery.validate.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/lib/jquery-form/jquery.form.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/system/statics/lib/smoke/smoke.min.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/goods/statics/assets/bootstrap-fileupload/bootstrap-fileupload.js?ver=1.24"></script>






<div class="pjaxLoadding"><i class="peg"></i></div>
</body>
</html>
