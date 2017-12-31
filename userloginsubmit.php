<?php
	require './common/admin.common.php';

	//检查验证码
	if($_SESSION['usercode'] != $_POST['usercode']){
		echo json_encode(array('result'=>'no_coder'));
		exit;
	}
	//查询一条数据
	$row = $db->getOneData('user','*','username="'.$_POST['username'].'"');
	if(!$row){
		echo json_encode(array('result'=>'no_username'));
		exit;
	}

	//检查密码
	if(md5($_POST['userpwd']) != $row['userpwd']){
		echo json_encode(array('result'=>'no_userpwd'));
		exit;
	}


	//登录成功后更新信息
	$sql = 'UPDATE user SET logintimes = now(),loginnum = loginnum+1';
	$db->dblink->query($sql);
	//把用户名及密码保存在浏览器上
	if($_POST['remember']){
		SETCOOKIE('username',$row['username'],time()+7*24*3600);
		SETCOOKIE('userpwd',$_POST['userpwd'],time()+7*24*3600);
	}else {
		SETCOOKIE('username','',time()-7*24*3600);
		SETCOOKIE('userpwd','',time()-7*24*3600);
	}
	$_SESSION['username'] = $row['username'];
	$_SESSION['user_id'] = $row['user_id'];
	$_SESSION['usertel'] = $row['usertel'];
	$_SESSION['reciveaddress'] = $row['reciveaddress'];
	//用户名、密码正确
	echo json_encode(array('result'=>'success'));