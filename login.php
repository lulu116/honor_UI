<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录</title>
    <!-- 上述3个meta标签必须放在最前面-->
   <!-- 新 Bootstrap 核心 CSS 文件 -->
<link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
 
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/login.css">
<script src="js/userlogin.js"></script>
<script src="js/user.js"></script>
</head>
<body>
	<div class='container-fluid'>
		<div class='row  header'>
			<div class='col-md-4  log'><img src="images/huaweiLogo.png" alt=""  class='slog'></div>
			<div class='col-md-8  honor'><b class="line">|</b><span  class='col-md-8  col-md-push-0 fhonor'>华为荣耀</span> </div>
		</div>
		<div class="row pagebg" style="background: url('images/login_bg.png') no-repeat;">
				<div class='col-md-7'><img src="images/honor-login-kv.png" alt="" class="col-md-6 col-md-push-4 visit"></div>
				<div class='col-md-5'  style="width:346px;height: 643px">
					<form class='myform' method='post' action='xxx'>
						<div class="h">
							<span class="user current">账号登录</span>
							<span class="extral_login">扫码登录</span>
						</div>
						<!-- 账号登录 -->
						<div class="contain">
							<div class='form-group'>
								<label for='username'>账号</label>
								<input id='username' name="username" type='text' placeholder="账号" class='form-control' value="<?=$_COOKIE['username']?>">
								<span class="userlogin"></span>
							</div>
							<div class='form-group'>
								<label for='userpwd'>密码</label>
								<input id='userpwd' name="userpwd" type='password'  placeholder='密码' class='form-control' value="<?=$_COOKIE['userpwd']?>">
								<span class="userlogin"></span>
							</div>
							<div class='form-group'>
								<label for='usercode'>验证码</label>
								<input id='usercode' name="usercode" type='text' placeholder="请输入验证码" class='form-control' name="usercode" id="usercode">
								<img src="./coder1.html" id="mycoder1" alt="验证码" class='coder' style="cursor: pointer;">
							</div>
							
							<div class='checkbox rem'>
								<label for='remember'>
									<input id='remember' type='checkbox' name='remember' <?$_COOKIE['userpwd'] &&$_COOKIE['username']? 'checked' : '' ?> >记住华为账号
								</label>
							</div>
						<input type='button' class='btn btn-default btn-info loginin' value='登录' id="userloginsubmit">
						<div class="jump">
							<a  href="./regist.php" id="getuserid">注册账号</a>
							<span id="getpsd">忘记密码?</span>
						</div>
				</div> 
				<!-- 扫码登录 -->
				<div class="contain2">
					<div id="slide">
						<img src="images/getqrWeb.png" alt="" class="ewm">
					</div>
					<img src='images/qrCode-help.png'  id="mdiv">	
					<p class="app">使用<a href="#">华为移动服务APP</a>扫一扫<br>
						华为手机可进入[设置]-[华为帐号]扫码登录
					</p>
				</div>
				</form>
			</div>
				
		</div>
		<div class="row bg-danger foot">
			<div class='col-md-12  foot_one'>
			<div>
				<span>用户协议 &nbsp;|&nbsp;</span>
				<span>隐私政策 &nbsp;|&nbsp;</span>
				<span>常见问题</span>
			</div>
			<div class="last">
				Copyright &copy; 2011-2017 华为技术有限公司 版权所有 保留一切权利 苏B2-20070200号 | 苏ICP备09062682号-9
			</div>
			</div>
		</div>
	</div>
</body>
</html>