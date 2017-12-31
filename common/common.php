<?php
	session_start();  //session的开启一定要放在最前面 
	//如何规避乱码问题：
	header('Content-type:text/html;charset="utf-8"');
	//如果当前的PHP文件里面的代码是纯粹的PHP代码(没有与html参合)，结束标签最好省略
	/*$db = new mysqli('localhost','root','168168','com');
	$db->query('SET NAMES UTF8');*/
	require './class/db.php';
	require './config/db.config.php';
	$db = new DB($dbconfig);
