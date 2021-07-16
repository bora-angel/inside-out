<?php

	//db연결
	include 'dbLoginFun.inc';
	loginDB();
	$loginDB = $GLOBALS['loginDB'];
	//값을 가져 옴
	$rvName = $_POST['rvName'];
	$rvContents = $_POST['rvContents'];
	$rvScope = $_POST['rvScope'];
	
	$mySQL = "INSERT INTO `rvTable` (`rvName`, `rvContents`, `rvScope`) VALUE ('".$rvName."', '".$rvContents."', '".$rvScope."')";
	if(!mysqli_query($loginDB, $mySQL)){
		echo "<script>console.log('데이터 저장 실패');</script>";
		exit;
	}

	mysqli_close($loginDB);
	echo "<script> location.href = './reviewRe.php';</script>";//추후 바뀔 예정

?>