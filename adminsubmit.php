<?php
	require './common/common.php';  

	$row = $db->getOneData('admin','*','realname = "'.$_POST['realname'].'"');

	//检查账号是否正确
	if(!$row){
		$r['result'] = 'no_realname';
		echo json_encode($r);
		exit;
	}

	if(md5($_POST['passwd']) != $row['passwd']){
		$r['result'] = "no_passwd";
		echo json_encode($r);
		exit;
	}

	//更新信息
	$sql = 'UPDATE admin SET loginnum = loginnum+1,	lastlogin=now()';
	$db->dblink->query($sql);
	//把账号、密码保存在cookie
	if($_POST['remeber'] == "1"){
		//保存cookie信息
		SETCOOKIE('realname',$row['realname'],time()+7*24*3600);
		SETCOOKIE('passwd',$_POST['passwd'],time()+7*24*3600);
	}else {
		//销毁信息
		SETCOOKIE('realname','',time()-7*24*3600);
		SETCOOKIE('passwd','',time()-7*24*3600);
	}

	//将管理员信息存储到session
	$_SESSION['realname'] = $row['realname'];
	$_SESSION['tel'] = $row['tel'];
	$_SESSION['admin_id'] = $row['admin_id'];

	//账号密码正确
	$r['result'] = 'success';
	echo json_encode($r);