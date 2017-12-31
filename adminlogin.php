<?php 
    session_start();
    //传过来的值相等就全部销毁
   if($_GET['action'] == 'loginout'){
    session_destroy();
  }
 ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>管理员登录</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style1.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
	<div >
		<div class='row header'>
			<div class='col-md-4 log'><img src="images/huaweiLogo.png" style="margin-left: 10%;padding: 10px;"></div>
		</div>
		<div class="row pagebg" style="background: url('images/login_bg.png') no-repeat">
			<div style="width: 100%">
				<img src="images/honor-login-kv.png" alt="" class="col-md-6 col-md-push-4 visit">
			</div>
		</div>
				
		</div>
		
	</div>
   <div class="main-reserve">
        <form action="#" method="post" id="food-reserve">
            <ul>
                <li>
                    <label for="realname" style="color:#fff">账号</label>
                    <input type="text" name="realname" id="realname" value="<?=$_COOKIE['realname']?>">
					<span class="adminspan2" style="width: 150px;height: 30px;margin-left: 20%;"></span>	
                </li>
                <li>
                    <label for="passwd" style="color:#fff">密码</label>
                    <input type="password" name="passwd" id="passwd" value="<?=$_COOKIE['passwd']?>">
                    <span class="adminspan1" style="margin-left: 20%;"></span>						
                </li>
                <li>
					 <div class="login-footer">
            			<div class="remember-hint pull-left" style="color:#fff">
               			 <input type="checkbox" id="remeber" name="remeber" value="1" <?$_COOKIE['realname'] &&$_COOKIE['passwd'] ? 'checked' : '' ?>  > 记住我
           		    </div>
       			</div>
                </li>
                <li>
					 <button type="button" class="btn" id="submitbtn">登录</button>
                </li>
            </ul>
        </div>
        <div class="last1">
			<span>用户协议 &nbsp;|&nbsp;</span>
			<span>隐私政策 &nbsp;|&nbsp;</span>
			<span>常见问题</span>
		</div>
		<div class="last">
			
			Copyright &copy; 2011-2017 华为技术有限公司 版权所有 保留一切权利 苏B2-20070200号 | 苏ICP备09062682号-9
		</div>
        </form>
    </div>
    <script src="./js/jquery-1.8.3.min.js"></script>
    <script src="./js/admin.js"></script>
</body>
<!-- END BODY -->
</html>