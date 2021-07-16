<?php
$userName=$_GET['userName'];
$userPhoneNumber=$_GET['userPhoneNumber'];
include 'dbLoginFun.inc';
   loginDB();
   $loginDB = $GLOBALS['loginDB'];
  //삽입
  $mySQLSelect="INSERT INTO `insaidoutPhoneNumber` (`userName`, `userPhoneNumber`) VALUES ('{$userName}','{$userPhoneNumber}')";
  //로그인데이터베이스나 SQL이 실질적인 실행이 가능하지 않으면 에러 발생 
   if(!mysqli_query($loginDB, $mySQLSelect)){
      echo "<script>console.log('userPhoneNumber : 데이터 불러오기 실패');</script>";
      exit;
   }

?>
<meta http-equiv='refresh' content='0;url=./main.php'>
