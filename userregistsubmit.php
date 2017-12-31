<?php
	require './common/admin.common.php';
	$data = $_POST;
	// //把验证码存到服务器上
	// $_SESSION['usercode'] = $data['usercode'];
	//检查验证码是否正确
	if($_SESSION['usercode'] != $data['usercode']){
		echo json_encode(array('result'=>'no_coder'));
		exit;
	}
	//添加一条数据
	$data['registime'] = date('Y-m-d H-i-s');
	$data['userpwd'] = md5($data['userpwd']);
	$row = $db->addData('user',$data);
	if(!$row){
		echo json_encode(array('result'=>'error'));
	}else {
		echo json_encode(array('result'=>'success'));
	}