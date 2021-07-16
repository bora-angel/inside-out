<?php
//뉴스 조회_데이터베이스
include 'dbLoginFun.inc'; //아이디,비밀번호 
   loginDB();
   $loginDB = $GLOBALS['loginDB'];
   $mySQLSelect = "SELECT * FROM `newsTable`";//전체 조회

   if(!$mySelectOk = mysqli_query($loginDB, $mySQLSelect)){
      echo "<script>console.log('데이터 불러오기 실패');</script>";
      exit;
   }

   if($userRow = mysqli_num_rows($mySelectOk)==0){
      echo "<script>console.log('noData');</script>";
   }
   //뿌려질 영역
   while ($mySQLRow = mysqli_fetch_assoc($mySelectOk)){
     echo "<script>totTitle.push('".$mySQLRow['nTitle']."');</script>"; //제목 
     echo "<script>totImg.push('".$mySQLRow['nImg']."');</script>"; //이미지 
     echo "<script>totContent.push('".$mySQLRow['nContents']."');</script>"; //내용 
    }

?>