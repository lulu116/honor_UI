<?php 

	  	require './common/user.common.php';
	    //存放在car表中
	    $data['user_id'] = $_SESSION['user_id'];
	    if(!$data['user_id']){
	    	echo json_encode(array('result'=>'no_login'));
	    	exit;
	    }
	    $data['product_id'] = $_POST['productid'];
	  	$result = $db->getOneData('car','car_id,user_id,product_num','user_id='.$_SESSION['user_id'].' AND  product_id='.$_POST['productid']);
	  	if($result){
	  		$r = $db->updateData('car',array('product_num'=>$result['product_num']+1),'car_id='.$result['car_id']);
	  	}else {
	  		$r = $db->addData('car',$data);
	  
	  	}
	   if($r){
	    	echo json_encode(array('result'=>'success'));
	    }else {
	    	echo json_encode(array('result'=>'error'));
	    }