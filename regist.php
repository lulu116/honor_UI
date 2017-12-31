<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
<link rel="stylesheet" href="css/regist.css">
<script src="./js/user.js"></script>
</head>
<body>
	<div class='container-fluid'>
		<div class='row  header'>
			<div class='col-md-4  log'><img src="images/head-top.png " alt=""  class='slog'></div>
			<div class='col-md-8  honor'><b class="line">|</b><span  class='col-md-8  col-md-push-0 fhonor'>华为荣耀</span> </div>
		</div>
	<div class='row' style="background: #f2f2f2">
		<div class='col-md-6 title col-md-push-1' style="left:268px;">
			<button class="btn-info phone btn-default"><i class="smphone" style=" background:url(images/reg-img01.png); background-position: 0px -18px;" id="user_tel" name="user_tel"></i>手机号</button>
			<span class="already">已有华为账号
			<a href="./login.php">登录></a></span>
			
		</div>
	</div>
	<div class='row'  style="background: #f2f2f2">
		<div class='col-md-6  col-md-push-3 content'>
			<div class="input_left input_container">国&nbsp;&nbsp;家</div>

			<div class="input_right">中国 &nbsp;<img src="images/triangle_gray.png" class="china"></div>
			<div class="input_left input_container">账&nbsp;&nbsp;号</div>
			<div class="input_right"  style="height: 42px">
				<input type="text" class="text"  placeholder="请输入账号" id="username" name="username">
				<span class="registsub"></span>
			</div>

			<div class="input_left " style="letter-spacing: 10px">密&nbsp;&nbsp;&nbsp;码</div>
			<div class="input_right" style="height: 42px">
				<input type="password" class="text" placeholder="请输入密码" id="userpwd" name="userpwd">
				<span class="registsub"></span>
			</div>

			<div class="input_left ">+86（中国）&nbsp;<img src="images/triangle_gray.png"></div>

			<div class="input_right" style="height: 42px">
				<input type="text" class="text" placeholder="请输入手机号" id="usertel" name="usertel">
				<span class="registsub"></span>
			</div>
			<div class="input_left" style="letter-spacing: 5px;">图形验证码</div>
			<div class="input_right" style="height: 42px">
				<input type="text" class="text" placeholder="请输入图形验证码" name="usercode" id="usercode">
				 <img src="./coder.php" id="mycoder" alt="验证码" class='coder' style="cursor: pointer;">
			</div>
			<div class="input_left " style="letter-spacing: 10px">地&nbsp;&nbsp;&nbsp;址</div>
			<div class="input_right" style="height: 42px">
				<input type="text" class="text" placeholder="请输入地址" id="reciveaddress" name="reciveaddress">
				<span class="registsub"></span>
			</div>

			<div class="instruc"><div class="include">密码须包含:</div>
						至少8个字符（不超过32个）<br>
						大写与小写字母<br>
						至少一个数字
			</div>
			<div class="block">
				密码强度：<br>
				<div class="sline"></div>
				<div class="forbid">勿使用其他帐号的密码。</div>
				<div class="line1"></div>
				<div class="word">华为需采集浏览器信息（例如类型、时区、插件、语言、字体、canvas图片渲染哈希值、webgl图片渲染哈希值），IP地址，您在页面上的鼠标和键盘操作信息，并使用cookie、localstorage和flash cookie，用以防御欺诈行为。</div>
				<div class="admid">点击注册，即表示您同意上述内容及<a href="#">华为帐号用户协议</a>并确认您已阅读<a href="#">华为隐私政策</a>。</div>
				<input type='button' class='btn btn-default btn-info res' value='注册' id="userregist">
			</div>
			
		</div>
	</div>
	<div class="boxshadow"></div>
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