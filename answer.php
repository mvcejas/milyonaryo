<?php
	session_start();
	require 'db.php';
	$json = array();
	if(isset($_POST['id']) && isset($_POST['a'])):
		$QID = $_POST['id'];
		$ans = $_POST['a'];
		$sql = "SELECT answer FROM millionaire_qa WHERE id='%s'";
		$sql = sprintf($sql,$QID);
		$sql = mysql_query($sql);
		$obj = mysql_fetch_object($sql);
		if(strtolower($ans)==strtolower($obj->answer)):
			$json = array('answer'=>'correct','message'=>'Your answer is right!');
			$_SESSION['level']+=1;			
		else:
			$json = array('answer'=>'wrong','message'=>'Your answer is wrong!');
			$_SESSION['mistake']+=1;
		endif;
	else:
		$json = array('answer'=>'wrong','message'=>'Your answer is wrong!');
	endif;
	echo json_encode($json);
?>