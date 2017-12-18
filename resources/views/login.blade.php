<!DOCTYPE html>
<html>
<head>
    <title>ds</title>
    <!-- For-Mobile-Apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //For-Mobile-Apps -->
    <!-- Style --> <link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
</head>
<body>
<div class="container">
    <h1>DS</h1>
    <div class="contact-form">
        <div class="profile-pic">
            <img src="/images/1.png" alt="User Icon"/>
        </div>
        <div class="signin">
            <form method="post" action="/Admin/login" id="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="text" id="user" class="user" name="username"  placeholder="用户名" />
                <input id="pwd" type="password" name="pwd" class="pass" value="pwd"   />
                <p><a href="#">忘记密码?</a></p>
            </form>
        </div>
        <input id="submit" type="submit" value="登录" />
    </div>
</div>
<div class="footer">
    <p>Copyright &copy; 2015 User Icon Login Form. All Rights Reserved | Design by <a href="http://www.moke8.com/" target="_blank">moke8</a></p>
</div>
</body>
</html>
<script src="http://cdn.bootcss.com/jquery/1.12.3/jquery.min.js"></script>
<script src="/layer/layer.js"></script>
<script>
    var submits = document.getElementById('submit');
    var form = document.getElementById('form');

    submits.onclick = function () {
        var user = document.getElementById('user').value;
        var pwd = document.getElementById('pwd').value;
        if (user == "" ) {
            layer.msg('用户名不能为空!', {icon: 2});
            return false;
        }
        if (pwd == "" ) {
            layer.msg('密码不能为空!', {icon: 2});
            return false;
        }
        form.submit();
    }

</script>