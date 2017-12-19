
<!DOCTYPE html>
<html lang="zh" class="pjaxLoadding-busy">
<head>
    <meta name="Generator" content="ECJIA 1.24" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品列表 - DSPT</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="ecjia team" />
    @include('public.js')






</head>
<body>

<div id="wrapper">
    @include('public.html')

    <div class="container">
        <div id="main" class="main_content">


            <ol class="breadcrumb">
                <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=merchant&c=dashboard&a=init">管理主页</a></li>
                <li><a href="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init">商品管理</a></li>
                <li class="active">商品列表</li>
            </ol>





            <div class="modal fade" id="movetype">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                            <h4 class="modal-title">转移商品至分类</h4>
                        </div>
                        <div class="modal-body h400">
                            <form class="form-horizontal" method="post" name="batchForm">
                                <div class="form-group ecjiaf-tac">
                                    <div>
                                        <select class="noselect w200 ecjiaf-ib form-control" size="15" name="target_cat">
                                            <option value="4" >热带水果</option>
                                            <option value="12" >时令水果</option>
                                            <option value="2" >国产水果</option>
                                            <option value="10" style="padding-left:20px">苹果</option>
                                            <option value="14" style="padding-left:20px">柑桔橙柚</option>
                                            <option value="11" style="padding-left:20px">梨</option>
                                            <option value="13" style="padding-left:20px">猕猴桃</option>
                                            <option value="65" style="padding-left:20px">李</option>
                                            <option value="8" >进口水果</option>
                                            <option value="64" style="padding-left:20px">葡萄</option>
                                            <option value="63" >礼品果篮</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group t_c">
                                    <a class="btn btn-primary m_l5 disabled" data-toggle="ecjiabatch" data-idClass=".checkbox:checked" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=batch&type=move_to&" data-msg="是否将选中商品转移至分类？" data-noSelectMsg="请选择要转移的商品" href="javascript:;" name="move_cat_ture">开始转移</a>
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
                    <a href="/Admin/commodityadd" class="btn btn-primary data-pjax">
                        <i class="fa fa-plus"></i> 添加新商品
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-body panel-body-small">
                            <ul class="nav nav-pills pull-left">
                                <li class="active">
                                    <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&type='>全部
                                    <span class="badge badge-info">13</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&type=1'>已上架
                                        <span class="badge badge-info use-plugins-num">3</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&type=2'>未上架
                                        <span class="badge badge-info unuse-plugins-num">10</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="panel-body panel-body-small">
                            <div class="btn-group f_l">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i> 批量操作 <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="batch-trash-btn" data-toggle="ecjiabatch" data-idClass=".checkbox:checked" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=batch&type=trash&is_on_sale=&page=" data-msg="您确定要把选中的商品放入回收站吗？" data-noSelectMsg="请选择要移至回收站的商品" href="javascript:;"><i class="fa fa-archive"></i> 移至回收站</a></li>
                                    <li><a class="batch-sale-btn" data-toggle="ecjiabatch" data-idClass=".checkbox:checked" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=batch&type=on_sale&is_on_sale=&page=" data-msg="您确定要把选中的商品上架吗？" data-noSelectMsg="请选择要上架的商品" href="javascript:;"><i class="fa fa-arrow-circle-o-up"></i> 上架</a></li>
                                    <li><a class="batch-notsale-btn" data-toggle="ecjiabatch" data-idClass=".checkbox:checked" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=batch&type=not_on_sale&is_on_sale=&page=" data-msg="您确定要把选中的商品下架吗？" data-noSelectMsg="请选择要下架的商品" href="javascript:;"><i class="fa fa-arrow-circle-o-down"></i> 下架</a></li>
                                    <li><a class="batch-best-btn" data-toggle="ecjiabatch" data-idClass=".checkbox:checked" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=batch&type=best&is_on_sale=&page=" data-msg="您确定要把选中的商品设为精品吗？" data-noSelectMsg="请选择设为精品的商品" href="javascript:;"><i class="fa fa-star"></i> 精品 </a></li>
                                    <li><a class="batch-notbest-btn" data-toggle="ecjiabatch" data-idClass=".checkbox:checked" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=batch&type=not_best&is_on_sale=&page=" data-msg="您确定要把选中的商品取消精品吗？" data-noSelectMsg="请选择取消精品的商品" href="javascript:;"><i class="fa fa-star-o"></i> 取消精品</a></li>
                                    <li><a class="batch-new-btn" data-toggle="ecjiabatch" data-idClass=".checkbox:checked" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=batch&type=new&is_on_sale=&page=" data-msg="您确定要把选中的商品设为新品吗？" data-noSelectMsg="请选择要设为新品的商品" href="javascript:;"><i class="fa fa-flag"></i> 新品</a></li>
                                    <li><a class="batch-notnew-btn" data-toggle="ecjiabatch" data-idClass=".checkbox:checked" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=batch&type=not_new&is_on_sale=&page=" data-msg="您确定要把选中的商品取消新品吗？" data-noSelectMsg="请选择要取消新品的商品" href="javascript:;"><i class="fa fa-flag-o"></i> 取消新品</a></li>
                                    <li><a class="batch-hot-btn" data-toggle="ecjiabatch" data-idClass=".checkbox:checked" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=batch&type=hot&is_on_sale=&page=" data-msg="您确定要把选中的商品设为热销吗？" data-noSelectMsg="请选择要设为热销的商品" href="javascript:;"><i class="fa fa-thumbs-up"></i> 热销</a></li>
                                    <li><a class="batch-nothot-btn" data-toggle="ecjiabatch" data-idClass=".checkbox:checked" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=batch&type=not_hot&is_on_sale=&page=" data-msg="您确定要把选中的商品取消热销吗？" data-noSelectMsg="请选择要取消热销的商品" href="javascript:;"><i class="fa fa-thumbs-o-up"></i> 取消热销</a></li>
                                    <li><a class="batch-move-btn" data-name="move_cat" data-move="data-operatetype" href="javascript:;"><i class="fa fa-mail-forward"></i> 转移到分类</a></li>
                                </ul>
                            </div>

                            <form class="form-inline f_l m_l5" action="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init" method="post" name="filter_form">
                                <div class="screen f_l">
                                    <div class="form-group">
                                        <select class="w130" name="review_status">
                                            <option value="-1">请选择...</option>
                                            <option value="1" >未审核</option>
                                            <option value="2" >审核未通过</option>
                                            <option value="3" >已审核</option>
                                            <option value="5" >无需审核</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary filter-btn" type="button"><i class="fa fa-search"></i> 筛选 </button>
                                </div>
                            </form>

                            <form class="form-inline f_r" action="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init" method="post" name="search_form">
                                <div class="screen f_r">
                                    <div class="form-group">
                                        <select class="w130" name="cat_id">
                                            <option value="0">所有分类</option>
                                            <option value="4"  >热带水果</option>
                                            <option value="12"  >时令水果</option>
                                            <option value="2"  >国产水果</option>
                                            <option value="10"  style="padding-left:20px">苹果</option>
                                            <option value="14"  style="padding-left:20px">柑桔橙柚</option>
                                            <option value="11"  style="padding-left:20px">梨</option>
                                            <option value="13"  style="padding-left:20px">猕猴桃</option>
                                            <option value="65"  style="padding-left:20px">李</option>
                                            <option value="8"  >进口水果</option>
                                            <option value="64"  style="padding-left:20px">葡萄</option>
                                            <option value="63"  >礼品果篮</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="w130" name="intro_type">
                                            <option value="0">全部</option>
                                            <option value="is_best" >精品</option>
                                            <option value="is_new" >新品</option>
                                            <option value="is_hot" >热销</option>
                                            <option value="is_promote" >特价</option>
                                            <option value="all_type" >全部推荐</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="keywords" value="" placeholder="请输入商品关键字">
                                    </div>
                                    <button class="btn btn-primary screen-btn" type="button"><i class="fa fa-search"></i> 搜索 </button>
                                </div>
                            </form>
                        </div>

                        <div class="panel-body panel-body-small">
                            <section class="panel">
                                <table class="table table-striped table-hover table-hide-edit ecjiaf-tlf">
                                    <thead>
                                    <tr data-sorthref="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init">
                                        <th class="table_checkbox check-list w30">
                                            <div class="check-item">
                                                <input id="checkall" type="checkbox" name="select_rows" data-toggle="selectall" data-children=".checkbox"/>
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
                                    <tbody>
                                    <tr>
                                        <td class="check-list">
                                            <div class="check-item">
                                                <input id="check_617" class="checkbox" type="checkbox" name="checkboxes[]" value="617"/>
                                                <label for="check_617"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=617'>
                                                <img class="w80 h80" alt="精选菜薹300g" src="http://demodaojia.ecjia.com/content/uploads/images/201610/goods_img/617_G_1459128638678.jpg">
                                            </a>
                                        </td>
                                        <td class="hide-edit-area ecjiafc-red">
                                            <span class="cursor_pointer ecjiaf-pre ecjiaf-wsn" data-text="textarea" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_name" data-name="goods_edit_name" data-pk="617" data-title="请输入商品名称">精选菜薹300g</span>
                                            <br/>
                                            <div class="edit-list">
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=617'>编辑</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_desc&goods_id=617'>商品描述</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_attr&goods_id=617'>商品属性</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_gallery&a=init&goods_id=617'>商品相册</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_goods&goods_id=617'>关联商品</a>&nbsp;|&nbsp;
                                                <!-- 										<a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_parts&goods_id=617'>关联配件</a>&nbsp;|&nbsp; -->
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_article&goods_id=617'>关联文章</a>&nbsp;|&nbsp;
                                                <a target="_blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=preview&id=617'>预览</a>&nbsp;|&nbsp;
                                                <a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="您确定要把该商品放入回收站吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=remove&id=617'>删除</a>
                                            </div>
                                        </td>

                                        <td>
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_sn" data-name="goods_edit_goods_sn" data-pk="617" data-title="请输入商品货号">
										ECS000617
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_price" data-name="goods_price" data-pk="617" data-title="请输入商品价格">
										7.90
									</span>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggle_on_sale" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_on_sale" refresh-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init" data-id="617"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_best" data-id="617"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_new" data-id="617"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_hot" data-id="617"></i>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_number" data-name="goods_number" data-pk="617" data-title="请输入库存数量">
										996
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-placement="left" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_sort_order" data-name="sort_order" data-pk="617" data-title="请输入排序序号">
										0
									</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="check-list">
                                            <div class="check-item">
                                                <input id="check_468" class="checkbox" type="checkbox" name="checkboxes[]" value="468"/>
                                                <label for="check_468"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=468'>
                                                <img class="w80 h80" alt="法国青蛇果20个约190g/个" src="http://demodaojia.ecjia.com/content/uploads/images/201610/goods_img/468_G_1459127208058.jpg">
                                            </a>
                                        </td>
                                        <td class="hide-edit-area ">
                                            <span class="cursor_pointer ecjiaf-pre ecjiaf-wsn" data-text="textarea" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_name" data-name="goods_edit_name" data-pk="468" data-title="请输入商品名称">法国青蛇果20个约190g/个</span>
                                            <br/>
                                            <div class="edit-list">
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=468'>编辑</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_desc&goods_id=468'>商品描述</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_attr&goods_id=468'>商品属性</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_gallery&a=init&goods_id=468'>商品相册</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_goods&goods_id=468'>关联商品</a>&nbsp;|&nbsp;
                                                <!-- 										<a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_parts&goods_id=468'>关联配件</a>&nbsp;|&nbsp; -->
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_article&goods_id=468'>关联文章</a>&nbsp;|&nbsp;
                                                <a target="_blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=preview&id=468'>预览</a>&nbsp;|&nbsp;
                                                <a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="您确定要把该商品放入回收站吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=remove&id=468'>删除</a>
                                            </div>
                                        </td>

                                        <td>
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_sn" data-name="goods_edit_goods_sn" data-pk="468" data-title="请输入商品货号">
										ECS000468
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_price" data-name="goods_price" data-pk="468" data-title="请输入商品价格">
										79.00
									</span>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggle_on_sale" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_on_sale" refresh-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init" data-id="468"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_best" data-id="468"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_new" data-id="468"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_hot" data-id="468"></i>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_number" data-name="goods_number" data-pk="468" data-title="请输入库存数量">
										906
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-placement="left" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_sort_order" data-name="sort_order" data-pk="468" data-title="请输入排序序号">
										0
									</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="check-list">
                                            <div class="check-item">
                                                <input id="check_466" class="checkbox" type="checkbox" name="checkboxes[]" value="466"/>
                                                <label for="check_466"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=466'>
                                                <img class="w80 h80" alt="智利蜜甜珍珠无籽红提1kg" src="http://demodaojia.ecjia.com/content/uploads/images/201610/goods_img/466_G_1459125813221.jpg">
                                            </a>
                                        </td>
                                        <td class="hide-edit-area ">
                                            <span class="cursor_pointer ecjiaf-pre ecjiaf-wsn" data-text="textarea" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_name" data-name="goods_edit_name" data-pk="466" data-title="请输入商品名称">智利蜜甜珍珠无籽红提1kg</span>
                                            <br/>
                                            <div class="edit-list">
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=466'>编辑</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_desc&goods_id=466'>商品描述</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_attr&goods_id=466'>商品属性</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_gallery&a=init&goods_id=466'>商品相册</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_goods&goods_id=466'>关联商品</a>&nbsp;|&nbsp;
                                                <!-- 										<a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_parts&goods_id=466'>关联配件</a>&nbsp;|&nbsp; -->
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_article&goods_id=466'>关联文章</a>&nbsp;|&nbsp;
                                                <a target="_blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=preview&id=466'>预览</a>&nbsp;|&nbsp;
                                                <a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="您确定要把该商品放入回收站吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=remove&id=466'>删除</a>
                                            </div>
                                        </td>

                                        <td>
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_sn" data-name="goods_edit_goods_sn" data-pk="466" data-title="请输入商品货号">
										ECS000466
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_price" data-name="goods_price" data-pk="466" data-title="请输入商品价格">
										59.00
									</span>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggle_on_sale" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_on_sale" refresh-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init" data-id="466"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_best" data-id="466"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_new" data-id="466"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_hot" data-id="466"></i>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_number" data-name="goods_number" data-pk="466" data-title="请输入库存数量">
										888
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-placement="left" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_sort_order" data-name="sort_order" data-pk="466" data-title="请输入排序序号">
										0
									</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="check-list">
                                            <div class="check-item">
                                                <input id="check_461" class="checkbox" type="checkbox" name="checkboxes[]" value="461"/>
                                                <label for="check_461"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=461'>
                                                <img class="w80 h80" alt="泰国龙眼2KG装" src="http://demodaojia.ecjia.com/content/uploads/images/201610/goods_img/461_G_1459127072318.jpg">
                                            </a>
                                        </td>
                                        <td class="hide-edit-area ecjiafc-red">
                                            <span class="cursor_pointer ecjiaf-pre ecjiaf-wsn" data-text="textarea" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_name" data-name="goods_edit_name" data-pk="461" data-title="请输入商品名称">泰国龙眼2KG装</span>
                                            <br/>
                                            <div class="edit-list">
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=461'>编辑</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_desc&goods_id=461'>商品描述</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_attr&goods_id=461'>商品属性</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_gallery&a=init&goods_id=461'>商品相册</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_goods&goods_id=461'>关联商品</a>&nbsp;|&nbsp;
                                                <!-- 										<a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_parts&goods_id=461'>关联配件</a>&nbsp;|&nbsp; -->
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_article&goods_id=461'>关联文章</a>&nbsp;|&nbsp;
                                                <a target="_blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=preview&id=461'>预览</a>&nbsp;|&nbsp;
                                                <a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="您确定要把该商品放入回收站吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=remove&id=461'>删除</a>
                                            </div>
                                        </td>

                                        <td>
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_sn" data-name="goods_edit_goods_sn" data-pk="461" data-title="请输入商品货号">
										ECS000461
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_price" data-name="goods_price" data-pk="461" data-title="请输入商品价格">
										55.00
									</span>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggle_on_sale" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_on_sale" refresh-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init" data-id="461"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_best" data-id="461"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_new" data-id="461"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_hot" data-id="461"></i>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_number" data-name="goods_number" data-pk="461" data-title="请输入库存数量">
										895
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-placement="left" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_sort_order" data-name="sort_order" data-pk="461" data-title="请输入排序序号">
										0
									</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="check-list">
                                            <div class="check-item">
                                                <input id="check_460" class="checkbox" type="checkbox" name="checkboxes[]" value="460"/>
                                                <label for="check_460"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=460'>
                                                <img class="w80 h80" alt="菲律宾香蕉约1.5kg" src="http://demodaojia.ecjia.com/content/uploads/images/201610/goods_img/460_G_1459126720606.jpg">
                                            </a>
                                        </td>
                                        <td class="hide-edit-area ">
                                            <span class="cursor_pointer ecjiaf-pre ecjiaf-wsn" data-text="textarea" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_name" data-name="goods_edit_name" data-pk="460" data-title="请输入商品名称">菲律宾香蕉约1.5kg</span>
                                            <br/>
                                            <div class="edit-list">
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=460'>编辑</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_desc&goods_id=460'>商品描述</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_attr&goods_id=460'>商品属性</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_gallery&a=init&goods_id=460'>商品相册</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_goods&goods_id=460'>关联商品</a>&nbsp;|&nbsp;
                                                <!-- 										<a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_parts&goods_id=460'>关联配件</a>&nbsp;|&nbsp; -->
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_article&goods_id=460'>关联文章</a>&nbsp;|&nbsp;
                                                <a target="_blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=preview&id=460'>预览</a>&nbsp;|&nbsp;
                                                <a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="您确定要把该商品放入回收站吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=remove&id=460'>删除</a>
                                            </div>
                                        </td>

                                        <td>
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_sn" data-name="goods_edit_goods_sn" data-pk="460" data-title="请输入商品货号">
										ECS000460
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_price" data-name="goods_price" data-pk="460" data-title="请输入商品价格">
										29.90
									</span>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggle_on_sale" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_on_sale" refresh-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init" data-id="460"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_best" data-id="460"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_new" data-id="460"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_hot" data-id="460"></i>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_number" data-name="goods_number" data-pk="460" data-title="请输入库存数量">
										982
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-placement="left" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_sort_order" data-name="sort_order" data-pk="460" data-title="请输入排序序号">
										0
									</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="check-list">
                                            <div class="check-item">
                                                <input id="check_433" class="checkbox" type="checkbox" name="checkboxes[]" value="433"/>
                                                <label for="check_433"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=433'>
                                                <img class="w80 h80" alt="菲律宾凤梨2个" src="http://demodaojia.ecjia.com/content/uploads/images/201610/goods_img/433_G_1459127377813.jpg">
                                            </a>
                                        </td>
                                        <td class="hide-edit-area ">
                                            <span class="cursor_pointer ecjiaf-pre ecjiaf-wsn" data-text="textarea" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_name" data-name="goods_edit_name" data-pk="433" data-title="请输入商品名称">菲律宾凤梨2个</span>
                                            <br/>
                                            <div class="edit-list">
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=433'>编辑</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_desc&goods_id=433'>商品描述</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_attr&goods_id=433'>商品属性</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_gallery&a=init&goods_id=433'>商品相册</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_goods&goods_id=433'>关联商品</a>&nbsp;|&nbsp;
                                                <!-- 										<a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_parts&goods_id=433'>关联配件</a>&nbsp;|&nbsp; -->
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_article&goods_id=433'>关联文章</a>&nbsp;|&nbsp;
                                                <a target="_blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=preview&id=433'>预览</a>&nbsp;|&nbsp;
                                                <a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="您确定要把该商品放入回收站吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=remove&id=433'>删除</a>
                                            </div>
                                        </td>

                                        <td>
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_sn" data-name="goods_edit_goods_sn" data-pk="433" data-title="请输入商品货号">
										ECS000433
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_price" data-name="goods_price" data-pk="433" data-title="请输入商品价格">
										29.00
									</span>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggle_on_sale" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_on_sale" refresh-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init" data-id="433"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_best" data-id="433"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_new" data-id="433"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_hot" data-id="433"></i>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_number" data-name="goods_number" data-pk="433" data-title="请输入库存数量">
										962
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-placement="left" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_sort_order" data-name="sort_order" data-pk="433" data-title="请输入排序序号">
										0
									</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="check-list">
                                            <div class="check-item">
                                                <input id="check_430" class="checkbox" type="checkbox" name="checkboxes[]" value="430"/>
                                                <label for="check_430"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=430'>
                                                <img class="w80 h80" alt="以色列葡萄柚4个约250g/个" src="http://demodaojia.ecjia.com/content/uploads/images/201610/goods_img/430_G_1459971655294.jpg">
                                            </a>
                                        </td>
                                        <td class="hide-edit-area ecjiafc-red">
                                            <span class="cursor_pointer ecjiaf-pre ecjiaf-wsn" data-text="textarea" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_name" data-name="goods_edit_name" data-pk="430" data-title="请输入商品名称">以色列葡萄柚4个约250g/个</span>
                                            <br/>
                                            <div class="edit-list">
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=430'>编辑</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_desc&goods_id=430'>商品描述</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_attr&goods_id=430'>商品属性</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_gallery&a=init&goods_id=430'>商品相册</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_goods&goods_id=430'>关联商品</a>&nbsp;|&nbsp;
                                                <!-- 										<a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_parts&goods_id=430'>关联配件</a>&nbsp;|&nbsp; -->
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_article&goods_id=430'>关联文章</a>&nbsp;|&nbsp;
                                                <a target="_blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=preview&id=430'>预览</a>&nbsp;|&nbsp;
                                                <a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="您确定要把该商品放入回收站吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=remove&id=430'>删除</a>
                                            </div>
                                        </td>

                                        <td>
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_sn" data-name="goods_edit_goods_sn" data-pk="430" data-title="请输入商品货号">
										ECS000430
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_price" data-name="goods_price" data-pk="430" data-title="请输入商品价格">
										40.00
									</span>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggle_on_sale" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_on_sale" refresh-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init" data-id="430"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_best" data-id="430"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_new" data-id="430"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_hot" data-id="430"></i>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_number" data-name="goods_number" data-pk="430" data-title="请输入库存数量">
										772
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-placement="left" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_sort_order" data-name="sort_order" data-pk="430" data-title="请输入排序序号">
										0
									</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="check-list">
                                            <div class="check-item">
                                                <input id="check_395" class="checkbox" type="checkbox" name="checkboxes[]" value="395"/>
                                                <label for="check_395"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=395'>
                                                <img class="w80 h80" alt="精品红霞草莓32粒约30g/个" src="http://demodaojia.ecjia.com/content/uploads/images/201610/goods_img/395_G_1459127479481.jpg">
                                            </a>
                                        </td>
                                        <td class="hide-edit-area ">
                                            <span class="cursor_pointer ecjiaf-pre ecjiaf-wsn" data-text="textarea" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_name" data-name="goods_edit_name" data-pk="395" data-title="请输入商品名称">精品红霞草莓32粒约30g/个</span>
                                            <br/>
                                            <div class="edit-list">
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=395'>编辑</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_desc&goods_id=395'>商品描述</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_attr&goods_id=395'>商品属性</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_gallery&a=init&goods_id=395'>商品相册</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_goods&goods_id=395'>关联商品</a>&nbsp;|&nbsp;
                                                <!-- 										<a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_parts&goods_id=395'>关联配件</a>&nbsp;|&nbsp; -->
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_article&goods_id=395'>关联文章</a>&nbsp;|&nbsp;
                                                <a target="_blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=preview&id=395'>预览</a>&nbsp;|&nbsp;
                                                <a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="您确定要把该商品放入回收站吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=remove&id=395'>删除</a>
                                            </div>
                                        </td>

                                        <td>
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_sn" data-name="goods_edit_goods_sn" data-pk="395" data-title="请输入商品货号">
										ECS000395
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_price" data-name="goods_price" data-pk="395" data-title="请输入商品价格">
										78.00
									</span>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggle_on_sale" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_on_sale" refresh-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init" data-id="395"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_best" data-id="395"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_new" data-id="395"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_hot" data-id="395"></i>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_number" data-name="goods_number" data-pk="395" data-title="请输入库存数量">
										985
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-placement="left" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_sort_order" data-name="sort_order" data-pk="395" data-title="请输入排序序号">
										0
									</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="check-list">
                                            <div class="check-item">
                                                <input id="check_393" class="checkbox" type="checkbox" name="checkboxes[]" value="393"/>
                                                <label for="check_393"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=393'>
                                                <img class="w80 h80" alt="越南红心火龙果2.5kg" src="http://demodaojia.ecjia.com/content/uploads/images/201610/goods_img/393_G_1459126348866.jpg">
                                            </a>
                                        </td>
                                        <td class="hide-edit-area ">
                                            <span class="cursor_pointer ecjiaf-pre ecjiaf-wsn" data-text="textarea" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_name" data-name="goods_edit_name" data-pk="393" data-title="请输入商品名称">越南红心火龙果2.5kg</span>
                                            <br/>
                                            <div class="edit-list">
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=393'>编辑</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_desc&goods_id=393'>商品描述</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_attr&goods_id=393'>商品属性</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_gallery&a=init&goods_id=393'>商品相册</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_goods&goods_id=393'>关联商品</a>&nbsp;|&nbsp;
                                                <!-- 										<a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_parts&goods_id=393'>关联配件</a>&nbsp;|&nbsp; -->
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_article&goods_id=393'>关联文章</a>&nbsp;|&nbsp;
                                                <a target="_blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=preview&id=393'>预览</a>&nbsp;|&nbsp;
                                                <a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="您确定要把该商品放入回收站吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=remove&id=393'>删除</a>
                                            </div>
                                        </td>

                                        <td>
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_sn" data-name="goods_edit_goods_sn" data-pk="393" data-title="请输入商品货号">
										ECS000393
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_price" data-name="goods_price" data-pk="393" data-title="请输入商品价格">
										69.00
									</span>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-check " data-trigger="toggle_on_sale" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_on_sale" refresh-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init" data-id="393"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_best" data-id="393"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_new" data-id="393"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_hot" data-id="393"></i>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_number" data-name="goods_number" data-pk="393" data-title="请输入库存数量">
										969
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-placement="left" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_sort_order" data-name="sort_order" data-pk="393" data-title="请输入排序序号">
										0
									</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="check-list">
                                            <div class="check-item">
                                                <input id="check_1104" class="checkbox" type="checkbox" name="checkboxes[]" value="1104"/>
                                                <label for="check_1104"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=1104'>
                                                <img class="w80 h80" alt="fsdfsdf" src="http://demodaojia.ecjia.com/content/system/statics/images/nopic.png">
                                            </a>
                                        </td>
                                        <td class="hide-edit-area ">
                                            <span class="cursor_pointer ecjiaf-pre ecjiaf-wsn" data-text="textarea" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_name" data-name="goods_edit_name" data-pk="1104" data-title="请输入商品名称">fsdfsdf</span>
                                            <br/>
                                            <div class="edit-list">
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit&goods_id=1104'>编辑</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_desc&goods_id=1104'>商品描述</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_attr&goods_id=1104'>商品属性</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=mh_gallery&a=init&goods_id=1104'>商品相册</a>&nbsp;|&nbsp;
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_goods&goods_id=1104'>关联商品</a>&nbsp;|&nbsp;
                                                <!-- 										<a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_parts&goods_id=1104'>关联配件</a>&nbsp;|&nbsp; -->
                                                <a class="data-pjax" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_link_article&goods_id=1104'>关联文章</a>&nbsp;|&nbsp;
                                                <a target="_blank" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=preview&id=1104'>预览</a>&nbsp;|&nbsp;
                                                <a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="您确定要把该商品放入回收站吗？" href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=remove&id=1104'>删除</a>
                                            </div>
                                        </td>

                                        <td>
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_sn" data-name="goods_edit_goods_sn" data-pk="1104" data-title="请输入商品货号">
										ECS001104
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_price" data-name="goods_price" data-pk="1104" data-title="请输入商品价格">
										0.00
									</span>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggle_on_sale" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_on_sale" refresh-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init" data-id="1104"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_best" data-id="1104"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_new" data-id="1104"></i>
                                        </td>
                                        <td align="center">
                                            <i class="cursor_pointer fa fa-times" data-trigger="toggleState" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=toggle_hot" data-id="1104"></i>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_goods_number" data-name="goods_number" data-pk="1104" data-title="请输入库存数量">
										1000
									</span>
                                        </td>
                                        <td align="center">
									<span class="cursor_pointer" data-trigger="editable" data-placement="left" data-url="http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=edit_sort_order" data-name="sort_order" data-pk="1104" data-title="请输入排序序号">
										100
									</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </section>
                            <div class="page">
                                <div class="pull-left">
                                    总计  <span id="totalRecords">13</span>
                                    条记录，分为 <span id="totalPages">2 页</span>
                                </div>
                                <div class="pull-right">

                                    <div class='input-append input-group'>
                                        <input id='pagekeydown' type='text' name='page' value='1' class='pageinput form-control' onkeydown = "javascript:
        if(event.keyCode==13){
        location.href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&page='+this.value+'';
        }
        "/>
                                        <span class='input-group-btn'>
        <button class='btn btn-primary' onclick = "javascript:
        var input = document.getElementById('pagekeydown');
        location.href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&page='+input.value+'';
        ">GO</button></span>
                                    </div>
                                    <ul class='pagination'><li class='active'><a>上一页</a><li><li class='active'><a>1</a></li><li><a class='a1 data-pjax external_link' href=http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&page=2>2</a></li><li><a class='a1 data-pjax external_link' href='http://demodaojia.ecjia.com/sites/merchant/index.php?m=goods&c=merchant&a=init&page=2'>下一页</a></li></ul>
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




<script type='text/javascript'>
    /* <![CDATA[ */
    var js_lang = {"cat_name_required":"\u8bf7\u8f93\u5165\u7c7b\u578b\u540d\u79f0","attr_name_required":"\u8bf7\u8f93\u5165\u5c5e\u6027\u540d\u79f0","cat_id_select":"\u8bf7\u9009\u62e9\u6240\u5c5e\u5546\u54c1\u7c7b\u578b","old_key_required":"\u8bf7\u8f93\u5165\u539f\u52a0\u5bc6\u4e32\uff01","new_key_required":"\u8bf7\u8f93\u5165\u65b0\u52a0\u5bc6\u4e32\uff01","separator_required":"\u5206\u9694\u7b26\u4e0d\u80fd\u4e3a\u7a7a\uff01","brand_name_required":"\u8bf7\u8f93\u5165\u54c1\u724c\u540d\u79f0","select_goods_attr":"\u8bf7\u9009\u62e9\u7b5b\u9009\u5c5e\u6027","category_name_required":"\u8bf7\u8f93\u5165\u5206\u7c7b\u540d\u79f0","add_new_mate":"\u6dfb\u52a0\u65b0\u680f\u76ee","back_select_mate":"\u8fd4\u56de\u9009\u62e9\u680f\u76ee","transfer_confirm":"\u60a8\u786e\u5b9a\u8f6c\u79fb\u5206\u7c7b\u4e0b\u7684\u5546\u54c1\u5417\uff1f","ok":"\u786e\u5b9a","cancel":"\u53d6\u6d88","choose_select_goods":"\u8bf7\u9009\u62e9\u9700\u8981\u8f6c\u79fb\u7684\u5546\u54c1","give_up_confirm":"\u60a8\u786e\u5b9a\u653e\u5f03\u5f53\u524d\u9875\u9762\u7f16\u8f91\u7684\u5185\u5bb9\u5417\uff1f","not_calculate":"\u672a\u8ba1\u7b97","goods_name_required":"\u8bf7\u8f93\u5165\u5546\u54c1\u540d\u79f0\uff01","shop_price_required":"\u8bf7\u8f93\u5165\u5546\u54c1\u4ef7\u683c\uff01","shop_price_limit":"\u8bf7\u8f93\u5165\u6b63\u786e\u4ef7\u683c\u683c\u5f0f\uff01","goods_number_required":"\u8bf7\u8f93\u5165\u5546\u54c1\u5e93\u5b58\uff01","goods_number_limit":"\u5546\u54c1\u5e93\u5b58\u6700\u5c0f\u53ea\u80fd\u4e3a0\uff01","category_id_select":"\u8bf7\u9009\u62e9\u5546\u54c1\u5206\u7c7b\uff01","product_sn_required":"\u8bf7\u8f93\u5165\u8d27\u53f7","product_number_required":"\u8bf7\u8f93\u5165\u5e93\u5b58","select_goods_empty":"\u672a\u641c\u7d22\u5230\u5546\u54c1\u4fe1\u606f","change_connect":"\u5207\u6362\u5173\u8054","single":"\u5355\u5411\u5173\u8054","double":"\u53cc\u5411\u5173\u8054","modify_price":"\u4fee\u6539\u4ef7\u683c","save":"\u4fdd\u5b58","price":"\u4ef7\u683c","select_article_empty":"\u672a\u641c\u7d22\u5230\u6587\u7ae0\u4fe1\u606f","drag_here_upload":"\u5c06\u56fe\u7247\u62d6\u52a8\u81f3\u6b64\u5904\u4e0a\u4f20","select_operate_info":"\u8bf7\u5148\u9009\u62e9\u9700\u8981\u64cd\u4f5c\u7684\u9009\u9879","card_sn_required":"\u8bf7\u8f93\u5165\u5361\u7247\u5e8f\u53f7","card_password_required":"\u8bf7\u8f93\u5165\u5361\u7247\u5bc6\u7801","pls_upload_file":"\u8bf7\u4e0a\u4f20\u6587\u4ef6","pls_select":"\u8bf7\u9009\u62e9...","brand_name_empty":"\u54c1\u724c\u540d\u79f0\u4e0d\u80fd\u4e3a\u7a7a","cat_name_empty":"\u5206\u7c7b\u540d\u79f0\u4e0d\u80fd\u4e3a\u7a7a","add_goods_ok":"\u6dfb\u52a0\u5546\u54c1\u6210\u529f","spec_name_required":"\u8bf7\u8f93\u5165\u89c4\u683c\u540d\u79f0"};
    var admin_goodsList_lang = {"user_rank_list":[{"rank_id":"5","rank_name":"\u6ce8\u518c\u7528\u6237","min_points":"0","max_points":"10000","discount":"100","show_price":"1","special_rank":"0"}],"marketPriceRate":"1.2","integralPercent":"1"};
    /* ]]> */
</script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/goods/statics/js/merchant_goods_list.js?ver=1.24"></script>
<script type="text/javascript" src="http://demodaojia.ecjia.com/content/apps/goods/statics/js/merchant_product.js?ver=1.24"></script>




<script type="text/javascript">
    ecjia.merchant.goods_list.init();
</script>
<div class="pjaxLoadding"><i class="peg"></i></div>
</body>
</html>
