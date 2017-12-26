<!--header-->
<script src="/layer/layer.js"></script>
<div class="header">
    <div class="header-top">
        <div class="container" >
            <span style="font-size: 30px; color: white">DSPT</span>
            <div class="top-right">
                <ul>
                    @if(empty(session('user')))
                    <li class="text"><a href="login">登录</a></li>
                    @else()
                        <li class="text"><a href="/information">个人信息</a></li>
                    @endif
                        @if(session('user'))
                    <li><div class="cart box_1">
                            <a href="checkout">
                                <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)
                            </a>
                            <p><a href="checkout" class="simpleCart_empty" >购物车</a></p>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                            <a style="color: white" href="/loginout">退出</a>

                        @endif

                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <!--/.content-->
            <div class="content white">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1 class="navbar-brand"><a  href="/">DSPT</a></h1>
                    </div>
                    <!--/.navbar-header-->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/">首页</a></li>
                            @foreach($Cominfo as $vv)
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $vv->typename}}<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-1">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <ul class="multi-column-dropdown">
                                                @foreach($vv->child as $lis)
                                                <li style="width: 100px"><a class="list" href="products">{{ $lis->typename }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            @endforeach
                            <li><a href="products">最佳</a></li>
                            <li><a href="products">比基尼泳装</a></li>
                        </ul>
                    </div>
                    <!--/.navbar-collapse-->
                </nav>
                <!--/.navbar-->
            </div>
            <div class="search-box">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
            </div>

            <!-- search-scripts -->
            <script src="./Home/js/classie.js"></script>
            <script src="./Home/js/uisearch.js"></script>
            <script>
                new UISearch( document.getElementById( 'sb-search' ) );
            </script>
            <!-- //search-scripts -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>