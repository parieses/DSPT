<!DOCTYPE html>
<!-- saved from url=(0078)http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init -->
<html lang="zh" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ECJIA 1.24">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品列表 - DSPT</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="ecjia team">
@include('public.js')
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

    <script src="https://hm.baidu.com/hm.js?45572e750ba4de1ede0e776212b5f6cd"></script><script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="/static/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/jquery-pjax.js"></script>
    <script type="text/javascript" src="/static/ecjia.js"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var admin_lang = {"display_sidebar":"\u663e\u793a\u4fa7\u8fb9\u680f","hide_sidebar":"\u9690\u85cf\u4fa7\u8fb9\u680f","search_check":"\u8bf7\u5148\u8f93\u5165\u641c\u7d22\u4fe1\u606f","search_no_message":"\u672a\u641c\u7d22\u5230\u5bfc\u822a\u4fe1\u606f","success":"\u64cd\u4f5c\u6210\u529f","fail":"\u64cd\u4f5c\u5931\u8d25","confirm_jump":"\u662f\u5426\u786e\u8ba4\u8df3\u8f6c\uff1f","ok":"\u786e\u5b9a","cancel":"\u53d6\u6d88","request_failed":"\u8bf7\u6c42\u5931\u8d25\uff0c\u9519\u8bef\u7f16\u53f7\uff1a","error_msg":"\uff0c\u9519\u8bef\u4fe1\u606f\uff1a"};
        /* ]]> */
    </script>
    <script type="text/javascript" src="/static/ecjia-merchant.js"></script>
    <script type="text/javascript" src="/static/ecjia-merchant-ui.js"></script>
    <script type="text/javascript" src="/static/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="/static/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/static/bootstrap-datepicker.min.js"></script>





    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}</style></head>
<body>

<div id="wrapper">

@include('public.html')



    <div class="container">
        <div id="main" class="main_content" style="opacity: 1;">


            <ol class="breadcrumb">
                <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&amp;c=dashboard&amp;a=init">管理主页</a></li>
                <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=init">商品管理</a></li>
                <li class="active">商品列表</li>
            </ol>
            <div class="modal fade" id="movetype">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body h400">
                            <form class="form-horizontal" method="post" name="batchForm">
                                <div class="form-group ecjiaf-tac">
                                    <div>
                                        <select class="noselect w200 ecjiaf-ib form-control" size="15" name="target_cat">
                                            <option value="2">国产水果</option>
                                            <option value="11" style="padding-left:20px">梨</option>
                                            <option value="13" style="padding-left:20px">猕猴桃</option>
                                            <option value="65" style="padding-left:20px">李</option>
                                            <option value="10" style="padding-left:20px">苹果</option>
                                            <option value="14" style="padding-left:20px">柑桔橙柚</option>
                                            <option value="8">进口水果</option>
                                            <option value="64" style="padding-left:20px">葡萄</option>
                                            <option value="63">礼品果篮</option>
                                            <option value="4">热带水果</option>
                                            <option value="12">时令水果</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group t_c">
                                    <a class="btn btn-primary m_l5 disabled" data-toggle="ecjiabatch" data-idclass=".checkbox:checked" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=batch&amp;type=move_to&amp;" data-msg="是否将选中商品转移至分类？" data-noselectmsg="请选择要转移的商品" href="javascript:;" name="move_cat_ture">开始转移</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-header">
                <div class="pull-left">
                    <h2>商品列表</h2>
                </div>
                <div class="pull-right">
                    <a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=add" class="btn btn-primary data-pjax">
                        <i class="fa fa-plus"></i> 添加新商品
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-body panel-body-small">
                            <div class="clearfix"></div>
                        </div>

                        <div class="panel-body panel-body-small">
                            <div class="btn-group f_l">
                                <button type="button" id="delete" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i> 批量删除 <span class="caret"></span></button>
                            </div>


                            <form class="form-inline f_r" action="/Admin/commodityinquire" method="post" name="search_form">
                                {{ csrf_field() }}
                                <div class="screen f_r">
                                    <div class="form-group">
                                        <select class="" name="cat_id" id="selLZ6">
                                            <option value="">所有分类</option>
                                            @foreach($comtypes as $comtype)
                                                @if($comtype->pid !== 0)
                                                    <option value="{{$comtype->id}}" name="select">{{$comtype->typename}}</option>
                                                @endif
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="keywords" value="" placeholder="请输入商品关键字">
                                    </div>
                                    <button id="btn" class="btn btn-primary screen-btn" type="submit"><i class="fa fa-search"></i> 搜索 </button>
                                </div>
                            </form>
                        </div>

                        <div class="panel-body panel-body-small">
                            <section class="panel">
                                <table class="table table-striped table-hover table-hide-edit ecjiaf-tlf">
                                    <thead>
                                    <tr data-sorthref="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=init">
                                        <th class="table_checkbox check-list w30">
                                            <div class="check-item">
                                                <input id="checkall" type="checkbox" name="select_rows" data-toggle="selectall" data-children=".checkbox">
                                                <label for="checkall"></label>
                                            </div>
                                        </th>
                                        <th class="w100 text-center">缩略图</th>
                                        <th data-toggle="sortby" data-sortby="goods_id">商品名称</th>
                                        <th class="w110 sorting " data-toggle="sortby" data-sortby="goods_sn">货号</th>
                                        <th class="w100 sorting text-center" data-toggle="sortby" data-sortby="shop_price">价格</th>
                                        <th class="w70 text-center"> 上架 </th>
                                        <th class="w70 text-center"> 精品 </th>
                                        <th class="w70 text-center"> 新品 </th>
                                        <th class="w70 text-center"> 热销 </th>
                                        <th class="w70 text-center" data-toggle="sortby" data-sortby="goods_number"> 库存 </th>

                                        <th class="w70 sorting text-center" data-toggle="sortby" data-sortby="store_sort_order">排序</th>
                                    </tr>
                                    </thead>
                                    <tbody id="parent">
                                    @foreach($results as $result)
                                    <tr>
                                        <td class="check-list">
                                            <div class="check-item">
                                                <input id="check_{{$result->id}}" class="checkbox" type="checkbox" name="checkboxs" value="{{$result->id}}">
                                                <label for="check_{{$result->id}}"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=edit&amp;goods_id=617">
                                                <img class="w80 h80" alt="{{$result->商品名称}}" src={{$result->图片地址}}>
                                            </a>
                                        </td>
                                        <td class="hide-edit-area ecjiafc-red">
                                            <span class="cursor_pointer ecjiaf-pre ecjiaf-wsn editable editable-pre-wrapped editable-click" data-text="textarea" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=edit_goods_name" data-name="goods_edit_name" data-pk="617" data-title="请输入商品名称">{{$result->商品名称}}</span>
                                            <br>
                                            <div class="edit-list">
                                                <a class="data-pjax" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=edit&amp;goods_id=617">编辑</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=edit_goods_desc&amp;goods_id=617">商品描述</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=edit_goods_attr&amp;goods_id=617">商品属性</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=mh_gallery&amp;a=init&amp;goods_id=617">商品相册</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=edit_link_goods&amp;goods_id=617">关联商品</a>&nbsp;|&nbsp;
                                                <!-- 										<a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_parts&goods_id=617'>关联配件</a>&nbsp;|&nbsp; -->
                                                <a class="data-pjax" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=edit_link_article&amp;goods_id=617">关联文章</a>&nbsp;|&nbsp;
                                                <a target="_blank" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=preview&amp;id=617">预览</a>&nbsp;|&nbsp;
                                                <a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="您确定要把该商品放入回收站吗？" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=remove&amp;id=617">删除</a>
                                            </div>
                                        </td>

                                        <td>
									<span class="cursor_pointer editable editable-click" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=edit_goods_sn" data-name="goods_edit_goods_sn" data-pk="617" data-title="请输入商品货号">
										{{$result->货号}}
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer editable editable-click" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=edit_goods_price" data-name="goods_price" data-pk="617" data-title="请输入商品价格">
										{{$result->价格}}
									</span>
                                        </td>
                                        <td align="center">
                                            @if($result->上架 === 1)
                                            <i title="上架" id="{{$result->id}}" name="one" class="cursor_pointer fa fa-check" data-id="617"></i>
                                            @elseif($result->上架 === 0)
                                                <i title="上架" id="{{$result->id}}" name="zero" class="cursor_pointer fa fa-times" data-id="617"></i>
                                            @endif
                                        </td>
                                        <td align="center">
                                            @if($result->精品 === 1)
                                                <i title="精品" id="{{$result->id}}" name="one"  class="cursor_pointer fa fa-check" data-id="617"></i>
                                            @elseif($result->精品 === 0)
                                                <i title="精品" id="{{$result->id}}" name="zero" class="cursor_pointer fa fa-times" data-id="617"></i>
                                            @endif
                                        </td>
                                        <td align="center">
                                            @if($result->新品 === 1)
                                                <i title="新品" id="{{$result->id}}" name="one" class="cursor_pointer fa fa-check" data-id="617"></i>
                                            @elseif($result->新品 === 0)
                                                <i title="新品" id="{{$result->id}}" name="zero" class="cursor_pointer fa fa-times" data-id="617"></i>
                                            @endif
                                        </td>
                                        <td align="center">
                                            @if($result->热销 === 1)
                                                <i title="热销" id="{{$result->id}}" name="one" class="cursor_pointer fa fa-check" data-id="617"></i>
                                            @elseif($result->热销 === 0)
                                                <i title="热销" id="{{$result->id}}" name="zero"  class="cursor_pointer fa fa-times" data-id="617"></i>
                                            @endif
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer editable editable-click" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=edit_goods_number" data-name="goods_number" data-pk="617" data-title="请输入库存数量">
										{{$result->库存}}
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer editable editable-click" data-trigger="editable" data-placement="left" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=edit_sort_order" data-name="sort_order" data-pk="617" data-title="请输入排序序号">
										0
									</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </section>
                            <div class="page">
                                <div class="pull-left">
                                    总计  <span id="totalRecords">12</span>
                                    条记录，分为 <span id="totalPages">2 页</span>
                                </div>
                                <div class="pull-right">

                                    {{--<div class="input-append input-group">--}}
                                        {{--<input id="pagekeydown" type="text" name="page" value="1" class="pageinput form-control" onkeydown="javascript:--}}
        {{--if(event.keyCode==13){--}}
        {{--location.href=&#39;http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=init&amp;page=&#39;+this.value+&#39;&#39;;--}}
        {{--}--}}
        {{--">--}}
                                        {{--<span class="input-group-btn">--}}
        {{--<button class="btn btn-primary" onclick="javascript:--}}
        {{--var input = document.getElementById(&#39;pagekeydown&#39;);--}}
        {{--location.href=&#39;http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=init&amp;page=&#39;+input.value+&#39;&#39;;--}}
        {{--">GO</button></span>--}}
                                    </div>
                                    <div id="pull_right">
                                        <div class="pull-right">
                                            {!! $results->render() !!}
                                        </div>
                                    </div>
                                    {{--<ul class="pagination"><li class="active"><a>上一页</a></li><li></li><li class="active"><a>1</a></li><li><a class="a1 data-pjax external_link" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=init&amp;page=2">2</a></li><li><a class="a1 data-pjax external_link" href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=init&amp;page=2">下一页</a></li></ul>--}}
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
    <script>

        $("[name='one']").click(function () {
            var title = $("[name='one']").attr('title');
            var id = $("[name='one']").attr('id');
            $.ajax({
                type:"post",
                url:"/Admin/commodityupdate",
                data:{title:title,id:id,status:1,'_token':'{{  csrf_token() }}'                },
                dataType:'json',
                success:function(data){

                    layer.msg('更新成功!',{icon:1},function () {
                        window.location.reload();
                    });

                },
                error:function (data) {
                    layer.msg('更新失败!')
                }
            });
            return false;
        });
        $("[name='zero']").click(function () {
            var title = $("[name='zero']").attr('title');
            var id = $("[name='zero']").attr('id');
            $.ajax({
                type:"post",
                url:"/Admin/commodityupdate",
                data:{title:title,id:id,status:0,'_token':'{{  csrf_token() }}'                },
                dataType:'json',
                success:function(data){

                    layer.msg('更新成功!',{icon:1},function () {
                        window.location.reload();
                    });

                },
                error:function (data) {
                    layer.msg('更新失败!')
                }
            });
            return false;
        });

        $('#delete').click(function () {
            var arr = $(':checked'), ids='', obj=[];
            var i = 0;
            arr.each(function (obj,v) {
                if ($(v).val()){
                    if ($(v).val() !== 'on'){
                        ids += $(v).val() + ',';
                    }

                }

            });
            if(ids == ''){
                layer.msg('请选择要删除的角色!',{icon:2})
                return false;
            }
            $.ajax({
                type: 'POST',
                url: "/Admin/commoditydelete",
                dataType: 'json',
                data:{id:ids,'_token':'{{  csrf_token() }}'},
                success: function(data){
                    layer.msg('删除成功!',{icon:1},function () {
                        window.location.reload();
                    });
                },
                error:function(data) {
                    layer.msg('删除失败!')
                },
            })
        });





    </script>
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
<script type="text/javascript" src="/static/Chart.min.js"></script>
<script type="text/javascript" src="/static/jquery-cookie.min.js"></script>
<script type="text/javascript" src="/static/json2.js"></script>
<script type="text/javascript" src="/static/jquery-ui-totop.min.js"></script>
<script type="text/javascript" src="/static/jquery-imagesloaded.min.js"></script>
<script type="text/javascript" src="/static/jquery.fs.dropper.js"></script>
<script type="text/javascript" src="/static/jquery.quicksearch(1).js"></script>
<script type="text/javascript" src="/static/ecjia.region.js"></script>
<script type="text/javascript" src="/static/smoke.min.js"></script>
<script type="text/javascript" src="/static/jquery.form.min.js"></script>
<script type="text/javascript" src="/static/jquery.colorbox.min.js"></script>
<script type="text/javascript" src="/static/bootstrap-editable.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var js_lang = {"cat_name_required":"\u8bf7\u8f93\u5165\u7c7b\u578b\u540d\u79f0","attr_name_required":"\u8bf7\u8f93\u5165\u5c5e\u6027\u540d\u79f0","cat_id_select":"\u8bf7\u9009\u62e9\u6240\u5c5e\u5546\u54c1\u7c7b\u578b","old_key_required":"\u8bf7\u8f93\u5165\u539f\u52a0\u5bc6\u4e32\uff01","new_key_required":"\u8bf7\u8f93\u5165\u65b0\u52a0\u5bc6\u4e32\uff01","separator_required":"\u5206\u9694\u7b26\u4e0d\u80fd\u4e3a\u7a7a\uff01","brand_name_required":"\u8bf7\u8f93\u5165\u54c1\u724c\u540d\u79f0","select_goods_attr":"\u8bf7\u9009\u62e9\u7b5b\u9009\u5c5e\u6027","category_name_required":"\u8bf7\u8f93\u5165\u5206\u7c7b\u540d\u79f0","add_new_mate":"\u6dfb\u52a0\u65b0\u680f\u76ee","back_select_mate":"\u8fd4\u56de\u9009\u62e9\u680f\u76ee","transfer_confirm":"\u60a8\u786e\u5b9a\u8f6c\u79fb\u5206\u7c7b\u4e0b\u7684\u5546\u54c1\u5417\uff1f","ok":"\u786e\u5b9a","cancel":"\u53d6\u6d88","choose_select_goods":"\u8bf7\u9009\u62e9\u9700\u8981\u8f6c\u79fb\u7684\u5546\u54c1","give_up_confirm":"\u60a8\u786e\u5b9a\u653e\u5f03\u5f53\u524d\u9875\u9762\u7f16\u8f91\u7684\u5185\u5bb9\u5417\uff1f","not_calculate":"\u672a\u8ba1\u7b97","goods_name_required":"\u8bf7\u8f93\u5165\u5546\u54c1\u540d\u79f0\uff01","shop_price_required":"\u8bf7\u8f93\u5165\u5546\u54c1\u4ef7\u683c\uff01","shop_price_limit":"\u8bf7\u8f93\u5165\u6b63\u786e\u4ef7\u683c\u683c\u5f0f\uff01","goods_number_required":"\u8bf7\u8f93\u5165\u5546\u54c1\u5e93\u5b58\uff01","goods_number_limit":"\u5546\u54c1\u5e93\u5b58\u6700\u5c0f\u53ea\u80fd\u4e3a0\uff01","category_id_select":"\u8bf7\u9009\u62e9\u5546\u54c1\u5206\u7c7b\uff01","product_sn_required":"\u8bf7\u8f93\u5165\u8d27\u53f7","product_number_required":"\u8bf7\u8f93\u5165\u5e93\u5b58","select_goods_empty":"\u672a\u641c\u7d22\u5230\u5546\u54c1\u4fe1\u606f","change_connect":"\u5207\u6362\u5173\u8054","single":"\u5355\u5411\u5173\u8054","double":"\u53cc\u5411\u5173\u8054","modify_price":"\u4fee\u6539\u4ef7\u683c","save":"\u4fdd\u5b58","price":"\u4ef7\u683c","select_article_empty":"\u672a\u641c\u7d22\u5230\u6587\u7ae0\u4fe1\u606f","drag_here_upload":"\u5c06\u56fe\u7247\u62d6\u52a8\u81f3\u6b64\u5904\u4e0a\u4f20","select_operate_info":"\u8bf7\u5148\u9009\u62e9\u9700\u8981\u64cd\u4f5c\u7684\u9009\u9879","card_sn_required":"\u8bf7\u8f93\u5165\u5361\u7247\u5e8f\u53f7","card_password_required":"\u8bf7\u8f93\u5165\u5361\u7247\u5bc6\u7801","pls_upload_file":"\u8bf7\u4e0a\u4f20\u6587\u4ef6","pls_select":"\u8bf7\u9009\u62e9...","brand_name_empty":"\u54c1\u724c\u540d\u79f0\u4e0d\u80fd\u4e3a\u7a7a","cat_name_empty":"\u5206\u7c7b\u540d\u79f0\u4e0d\u80fd\u4e3a\u7a7a","add_goods_ok":"\u6dfb\u52a0\u5546\u54c1\u6210\u529f","spec_name_required":"\u8bf7\u8f93\u5165\u89c4\u683c\u540d\u79f0"};
    var admin_goodsList_lang = {"user_rank_list":[{"rank_id":"5","rank_name":"\u6ce8\u518c\u7528\u6237","min_points":"0","max_points":"10000","discount":"100","show_price":"1","special_rank":"0"}],"marketPriceRate":"1.2","integralPercent":"1"};
    /* ]]> */
</script>
<script type="text/javascript" src="/static/merchant_goods_list.js"></script><script type="text/javascript" src="/layer/layer.js"></script>
<script type="text/javascript" src="/static/merchant_product.js"></script>




<script type="text/javascript">
    ecjia.merchant.goods_list.init();
</script>



<div class="pjaxLoadding"><i class="peg"></i></div>


<a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&amp;c=merchant&amp;a=init#" id="toTop" style="display: none;"><span id="toTopHover"></span>To Top</a><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><div id="cboxNext" style="float: left;"></div><div id="cboxPrevious" style="float: left;"></div><div id="cboxSlideshow" style="float: left;"></div><div id="cboxClose" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>