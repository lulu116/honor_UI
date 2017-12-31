<?php

	require './common/admin.common.php';
	$data = $_POST;
	$data['product_time'] = date('Y-m-d H-i-s');
	$data['username'] = $_SESSION['realname'];
	
	$row = $db->addData('product',$data);


	if($row){
		echo json_encode(array('result'=>'success'));
	}else {
		echo json_encode(array('result'=>'error'));
	}