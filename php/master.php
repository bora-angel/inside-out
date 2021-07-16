<?php
//
// 문자나라웹연동서비스 - 기본형(전화번호, 메시지입력) Ver 2.1
// 입력폼
//


// 문자전송 실행파일 (기본 입력폼파일과 같은 위치 )
$actionURL = "munjanara_send.php";

// 새창 열어서 전송 결과를 봐야할 때는 주석 처리
$targetName = "hidfrm";

// 허용바이트수를 설정 (단문 90byte, 장문 2000byte 까지허용)
$allowByte = 2000;

// 전송페이지에서 필요함
If($allowByte > 90)	$allow_mms = 1;
else			$allow_mms = 0;
?>
<!DOCTYPE html>

<html lang="ko" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>인사이드아웃</title>
    
</head>
<body>
    
    <?
    echo "<script>let allowByte = ".$allowByte."</script>";
    ?>

<script type="text/javascript">
function DoClear(tg) {
    if (tg.value == tg.defaultValue) {
        tg.value = '';
    }
    CalByte(tg);
}

function CalByte(tg){
    var curText;
    var strLen;
    var byteIs;
    var lastByte;
    var thisChar;

    curText = new String(tg.value);
    strLen = curText.length;
    byteIs = 0;

    for(i=0; i<strLen; i++) {
        thisChar = curText.charAt(i);
        escChar = escape(thisChar);

        if (escChar.length > 4) {
            byteIs += 2;  //특수문자 한글인 경우.
        }else if(thisChar != '\r') {  //개행을 제외한 이외의 경우
            byteIs += 1;
        }

        if(byteIs > allowByte){
            alert('[안 내] '+allowByte+' 바이트를 초과하실 수 없습니다.');
            thisText = curText.substring(0, i);
            tg.value = thisText;
            byteIs = lastByte;
            break;
        }

        lastByte = byteIs;
    }

    document.all.byte.value = byteIs;
}

function ClearMsg(){
    document.all.message.value = '';
    CalByte(document.send_msg.message);
    document.send_msg.message.focus();
}

function CheckIt(fm){
    if(!fm.message.value || fm.message.value == fm.message.defaultValue){
        alert("[안내] 내용을 입력하세요.");
        ClearMsg();
        return false;
    }
    /*
    if(!fm.sender.value || fm.sender.value.length < 10){
        alert("[안내] 보내는 분의 전화번호를 정확히 입력하세요.");
        fm.sender.focus();
        return false;
    }
    */
    return true;
}
</script>

    <iframe src="" name=hidfrm marginwidth=0 marginheight=0 height=0 width=0 scrolling=no border=0 frameborder=0></iframe>
</body>
</html>