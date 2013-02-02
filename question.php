<?php
	session_start();
	//$_SESSION['level'] = 1;
	require 'db.php';
	$json = array();
	
	if(isset($_REQUEST['q']) && is_numeric($_REQUEST['q'])):
		$level = $_SESSION['level'] = isset($_SESSION['level']) ? $_SESSION['level'] : 0;
		$mistake = $_SESSION['mistake'] = isset($_SESSION['mistake']) ? $_SESSION['mistake'] : 0;
		$randQ = rand(0,$_REQUEST['q']-1);
		$sql = "SELECT id,question,choice_a,choice_b,choice_c,choice_d FROM millionaire_qa LIMIT %d,1";
		$sql = sprintf($sql,$randQ);
		$sql = mysql_query($sql);
		$obj = mysql_fetch_object($sql);
		if($level>10):$level=$_SESSION['level']=$mistake=$_SESSION['mistake']=0;endif;
		$json = array(
					'level'=>$level,
					'question'=>$obj->question,
					'choices'=>array(
								'a'=>$obj->choice_a,
								'b'=>$obj->choice_b,
								'c'=>$obj->choice_c,
								'd'=>$obj->choice_d),
					'id'=>$obj->id,
					'mistake'=>$mistake
					);		
		echo json_encode($json);	
	endif;
?>