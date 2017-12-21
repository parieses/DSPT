
<!DOCTYPE html>
<html lang="zh" class="pjaxLoadding-busy">
<head>
    <meta name="Generator" content="ECJIA 1.24" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加商品分类 - DSPT</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="ecjia team" />
    <meta name="_token" content="{{ csrf_token() }}"/>
    @include('public.js')
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

    <script src="https://hm.baidu.com/hm.js?45572e750ba4de1ede0e776212b5f6cd"></script><script type="text/javascript" src="/static/jquery.min.js"></script>
    <script type="text/javascript" src="/static/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/jquery-pjax.js"></script>
    <script type="text/javascript" src="/static/ecjia.js"></script>



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
        <div id="main" class="main_content" style="opacity: 1;">


            <ol class="breadcrumb">
                <li><a href="/Admin/index">管理主页</a></li>
                <li><a href="/Admin/commoditylist">商品管理</a></li>
                <li><a href="/Admin/commodityclassification">商品分类</a></li>
                <li class="active">添加商品分类</li>
            </ol>




            <div>
                <h2 class="page-header">
                    添加商品分类				<a class="btn btn-primary data-pjax pull-right" href="/Admin/commodityclassification" id="sticky_a"><i class="fa fa-reply"></i> 商品分类 </a>
                </h2>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="form">
                                <form id="form" class="form-horizontal cmxform"  method="post" name="form" enctype="multipart/form-data"  novalidate="novalidate">

                                    <div class="form-group">
                                        <label class="control-label col-lg-2">分类名称：</label>
                                        <div class="controls col-lg-6">
                                            <input id="cat_name" class="form-control" type="text" name="cat_name" maxlength="20" value="" size="27">
                                        </div>
                                        <span class="input-must"><span class="require-field" style="color:#FF0000,">*</span></span>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-lg-2"  style="margin-right: 15px;">上级分类：</label>

                                            <select style="width: 518px" class="parid" name="parent_id" >
                                                <option value="0">请选择分类</option>
                                            </select>

                                    </div>



                                    <div class="form-group">
                                        <label class="control-label col-lg-2">分类描述：</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" name="cat_desc" rows="6" cols="48"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div id="btn" class="col-lg-offset-2 col-lg-6">
                                            <button class="btn btn-info" type="button">确定</button>
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

    <div class="container">

    </div>

</div>
<script>
    $('#btn').click(function(){
        if ($('#cat_name').val() == ''){
            alert('分类名称不能为空!')
            return false;
        }
        $.ajax({
            type:"post",
            url:"/Admin/commodityclassificationadd",
            data:{form:$("form").serialize(),'_token':'{{  csrf_token() }}' },
            dataType:'json',
            success:function(data){
               console.log(data);
            },
        });
    })


</script>



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






<div class="pjaxLoadding"><i class="peg"></i></div>


<a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span>To Top</a></body>
</html>
