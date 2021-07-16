<?php
//
// 문자나라웹연동서비스 - 기본형(전화번호, 메시지입력) Ver 2.1
// 전송처리
//

// 메시지발송

function SendMesg($url) {
    // 테스트 후, 서버 상태에 따라 원활한 접속 방법을 이용해주세요.
    //$fp = fsockopen("ssl:munjanara.co.kr", 443, $errno, $errstr, 10);
    $fp = fsockopen("munjanara.co.kr", 80, $errno, $errstr, 10);
    //$fp = fsockopen("munjanara.co.kr", 443, $errno, $errstr, 10);

	if(!$fp){
		echo $errno .":". $errstr;
		exit;
	}

	fwrite($fp, "GET ".$url." HTTP/1.0\r\nHost: 211.233.20.184\r\n\r\n"); 
	$flag = 0;

	while(!feof($fp)){
		$row = fgets($fp, 1024);

		if($flag) $out .= $row;
		if($row=="\r\n") $flag = 1;
	}

    fclose($fp);
    return $out;
}

// 장문허용유무
$allowMms = $_POST['allow_mms'];

if($allowMms != "1") $allowMms = "0";


// 문자나라 아이디
$userid = "11st10006";

// 문자나라 2차 비밀번호
// 문자나라 웹사이트 '개인정보변경'에서 2차 비밀번호 설정 후, 동일하게 지정
$passwd = "11st10006";

// 발신번호사전등록제에 따라 문자나라에 인증확인된 발신번호(핸드폰 또는 일반전화)
$hpSender = "01040087329";

// 비상시 문자나라에서 문자알림 또는 연락가능한 번호 
$adminPhone = "01040087329";

//보낼 문자 내용
$hpMesg = "".$_POST['message']."";

// UTF-8 글자셋 이용으로 한글이 깨지는 경우에만 주석을 푸세요
$hpMesg = iconv("UTF-8", "EUC-KR", $hpMesg);

// 특수문자 사용에 따른 메시지 인코딩
$hpMesg = urlencode($hpMesg);
echo $hpMesg;
// 최종 전송 완료후, 자동으로 완료창을 띄울 것인지 결정 (1:띄움, 0:안띄움)
$endAlert = 1;
//전화 번호 가져오기
include 'dbLoginFun.inc';
loginDB();
$loginDB = $GLOBALS['loginDB'];
$mySQLSelect = "SELECT * FROM `insaidoutPhoneNumber`";
if(!$mySelectOk = mysqli_query($loginDB, $mySQLSelect)){
	echo "<script>console.log('userPhoneNumber : 데이터 불러오기 실패');</script>";
	exit;
}
//데이터 확인
if($userRow = mysqli_num_rows($mySelectOk)==0){
	echo "<script>console.log('userPhoneNumber : 데이터 없음');</script>";
}
// 수신메시지설정, allow_mms 에 따라 내용이 짤릴 수 있음
// 발신번호 사정등록제에 따라 '고객문의형태'의 경우 입력받은 번호를 발신번호로
// 사용할 수 없으므로 메시지 앞부분에 입력번호를 추가하는 형태

//전화 번호 수 만큼 복제
while ($mySQLRow = mysqli_fetch_assoc($mySelectOk)){


// 문자메시지를 실제로 수신할 전화번호
$hpReceiver = $_POST['sender'.$mySQLRow['userNo']];

// 전송
$url = "/MSG/send/web_admin_send.htm?userid=".$userid."&passwd=".$passwd."&sender=".$hpSender."&receiver=".$hpReceiver."&encode=1&message=".$hpMesg."&end_alert=".$endAlert."&allow_mms=".$allowMms;

// 에러시 주석을 해제 후 전송값을 확인
// echo $url;

echo SendMesg($url);
}
mysqli_free_result($mySelectOk);
mysqli_close($loginDB);