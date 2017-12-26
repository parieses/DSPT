<!DOCTYPE HTML>
<html>
<head>
<title>制品</title>
<link href="./Home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="./Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="./Home/css/owl.carousel.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Swim Wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="./Home/js/jquery.min.js"></script>
<script type="text/javascript" src="./Home/js/bootstrap-3.1.1.min.js"></script>
	<!-- cart -->
		<script src="./Home/js/simpleCart.min.js"> </script>
	<!-- cart -->
<!-- the jScrollPane script -->
<script type="text/javascript" src="./Home/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
<link href="./Home/css/form.css" rel="stylesheet" type="text/css" media="all" />
		<!-- the mousewheel plugin -->
		<script type="text/javascript" src="./Home/js/jquery.mousewheel.js"></script>
</head>
<body>
@include("home.head");
			<div class="content">
	<div class="product-model">
	 <div class="container">
		<h2>我们的产品</h2>

		 <div class="col-md-9 product-model-sec">

			 @foreach($List as $c)
			 <a href="single.html"></a><div class="product-grid"><a href="single?cid={{ $c->货号 }}&cname={{ $c->商品名称 }}">
					 <div class="more-product"><span> </span></div>
					 <div class="product-img b-link-stripe b-animate-go  thickbox">
						 <img src="/Home/images/m1.jpg" class="img-responsive" alt="{{$c->商品名称}}">
						 <div class="b-wrapper">
							 <h4 class="b-animate b-from-left  b-delay03">
								 <button><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> + </font></font></button>
							 </h4>
						 </div>
					 </div>
				 </a>
				 <div class="product-info simpleCart_shelfItem">
					 <div class="product-info-cust prt_name">
						 <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$c->商品名称}}</font></font></h4>
						 <span class="item_price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥:{{$c->价格}}</font></font></span>
						 <div class="ofr">
							 <p class="pric1"><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存{{$c->库存}}</font></font></del></p>
						 </div>
						 <input type="text" class="item_quantity" value="1">
						 <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="button" class="item_add items" value="+"></font></font>
						 <div class="clearfix"> </div>
					 </div>
				 </div>
			 </div>
			@endforeach










		 </div>






		 <div class="rsidebar span_1_of_left">
			 <section  class="sky-form">
				 <div class="product_right">
					 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>分类</h4>
					 <div class="tab1">
						 <ul class="place">
							 <li class="sort">所有服装</li>
							 <li class="by"><img src="./Home/images/do.png" alt=""></li>
							 <div class="clearfix"> </div>
						 </ul>
						 <div class="single-bottom">
							 @foreach($Cominfos as $l)
								 <a href="pucts?id={{ $l->id }}"><p>{{ $l->typename }}</p></a>
							 @endforeach
						 </div>
					 </div>
					 @foreach($Cominfo as $k=>$vv)
						 <div class="tab{{$k+2}}">
							 <ul class="place">
								 <li class="sort">所有{{ $vv->typename }}</li>
								 <li class="by"><img src="./Home/images/do.png" alt=""></li>
								 <div class="clearfix"> </div>
							 </ul>

							 <div class="single-bottom">
								 @foreach($vv->child as $lis)
									 <a href="products?id={{ $lis->id }}"><p>{{ $lis->typename }}</p></a>
								 @endforeach

							 </div>

						 </div>
				 @endforeach
				 <!--script-->
					 <script>
                         $(document).ready(function(){
                             $(".tab1 .single-bottom").hide();
                             $(".tab2 .single-bottom").hide();
                             $(".tab3 .single-bottom").hide();
                             $(".tab4 .single-bottom").hide();
                             $(".tab5 .single-bottom").hide();

                             $(".tab1 ul").click(function(){
                                 $(".tab1 .single-bottom").slideToggle(300);
                                 $(".tab2 .single-bottom").hide();
                                 $(".tab3 .single-bottom").hide();
                                 $(".tab4 .single-bottom").hide();
                                 $(".tab5 .single-bottom").hide();
                             })
                             $(".tab2 ul").click(function(){
                                 $(".tab2 .single-bottom").slideToggle(300);
                                 $(".tab1 .single-bottom").hide();
                                 $(".tab3 .single-bottom").hide();
                                 $(".tab4 .single-bottom").hide();
                                 $(".tab5 .single-bottom").hide();
                             })
                             $(".tab3 ul").click(function(){
                                 $(".tab3 .single-bottom").slideToggle(300);
                                 $(".tab4 .single-bottom").hide();
                                 $(".tab5 .single-bottom").hide();
                                 $(".tab2 .single-bottom").hide();
                                 $(".tab1 .single-bottom").hide();
                             })
                             $(".tab4 ul").click(function(){
                                 $(".tab4 .single-bottom").slideToggle(300);
                                 $(".tab5 .single-bottom").hide();
                                 $(".tab3 .single-bottom").hide();
                                 $(".tab2 .single-bottom").hide();
                                 $(".tab1 .single-bottom").hide();
                             })
                             $(".tab5 ul").click(function(){
                                 $(".tab5 .single-bottom").slideToggle(300);
                                 $(".tab4 .single-bottom").hide();
                                 $(".tab3 .single-bottom").hide();
                                 $(".tab2 .single-bottom").hide();
                                 $(".tab1 .single-bottom").hide();
                             })
                         });
					 </script>
			 </section>
			 <section  class="sky-form">
				 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>价钱</h4>
				 <ul class="dropdown-menu1">
					 <li><a href="">
							 <div id="slider-range"></div>
							 <input type="text" id="amount" style="border: 0; font-weight: NORMAL;   font-family: 'Dosis-Regular';" />
						 </a></li>
				 </ul>
			 </section>
			 <!---->
			 <script type="text/javascript" src="./Home/js/jquery-ui.min.js"></script>
			 <link rel="stylesheet" type="text/css" href="./Home/css/jquery-ui.css">
			 <script type='text/javascript'>//<![CDATA[
                 $(window).load(function(){
                     $( "#slider-range" ).slider({
                         range: true,
                         min: 0,
                         max: 100000,
                         values: [ 500, 100000 ],
                         slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                         }
                     });
                     $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

                 });//]]>
			 </script>
			 <!---->


			 <section  class="sky-form">
				 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>型号</h4>
				 <div class="row row1 scroll-pane">

					 <div class="col col-4">
						 @foreach($Type as $vT)
							 <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>{{ $vT->type }}</label>
						 @endforeach
					 </div>
				 </div>
			 </section>
			 <section  class="sky-form">

				 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true">颜色</span></h4>

				 <div class="row row1 scroll-pane">
					 <div class="col col-4">
						 @foreach($Color as $vvs)
							 <label class="checkbox"  ><input  type="checkbox" name="checkbox"><i style="background-color: {{ $vvs->rgb }}"></i>{{ $vvs->name }}</label>
						 @endforeach

					 </div>
				 </div>
			 </section>
		 </div>
	 </div>
		{{--@endforeach--}}




	      </div>
		</div>
</div>
<!---->
</div>
	<!--footer-->
	<div class="subscribe">
	</div>
	@include("home.footer");
		
</body>
</html>