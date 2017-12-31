<?php
	require './common/user.common.php';
	$r = $db->delData('car','car_id='.$_POST['car_id']);
	if($r){
		echo json_encode(array('result'=>'success'));
	}else {
		echo  json_encode(array('result'=>'error'));
	}