<!doctype html>html lang="ko">
	<head>
		<meta charset="utf-8">
    	<title>넘어가는 로그인 확인 페이지</title>
	</head>
	<body>
<?php

			if(!isset($_POST['managerPwHH'])) {
				echo "<script>alert('');history.back();</script>";
				exit;
			}
			$managerPw=$_POST['managerPwHH'];
			
			 include 'dbLoginFun.inc';
             loginDB();
             $loginDB = $GLOBALS['loginDB'];
			
			$managerLogin = "SELECT * FROM `maTable` WHERE `maPw`= password('".$managerPw."') AND `maId` = 'phoenix2020'";
			$resultDomain = mysqli_query($loginDB, $managerLogin);
            $maRecord=mysqli_fetch_assoc($resultDomain);
			$maTableId=$maRecord['maId'];
			if(!isset($maTableId)){
				echo "<script>alert('패스워드 에러');location.href = './managerLogin.php';</script>";
				exit;
			}
			
			//echo $maTableId;
            /*쿠키*/
            setcookie('managerId', $maTableId );//86400*30
            
 
			mysqli_free_result($resultDomain);
			mysqli_close($loginDB);

?>
	<meta http-equiv=refresh content='0;url=managerLoginOKpage.php'/>
</body>
</html>
