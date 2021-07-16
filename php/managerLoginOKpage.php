<?php
if(!isset($_COOKIE['managerId'])){
echo "<meta http-equiv='refresh' content='0;url=managerLogin.php'>";
exit;
}
?>
<!DOCTYPE html>

<html lang="ko" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>관리창 페이지 이동</title>

    <!--파미콘-->
    <link rel="shortcut icon" href="../image/favicon.png">
    <!--뷰포트-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!--제이쿼리-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--서체-->
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
    <!--개인 css-->
    
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="../css/managerLogin.css" rel="stylesheet" />
</head>
<body>
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
    <div class="allAreaML">
        <div class="backgroundAreaML">
            <!--메인으로 가는 이모티콘-->
            <a href="../php/main.php" class="homeIconArea">
                <svg viewBox="0 0 16 16" class="bi bi-house-fill homeIcon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg>
                <div class="homeText">Go Home!</div>
            </a>
            <!--큰 폴더-->
            <img src="../image/manager_login_BG2.png" class="outBG" alt="manager image background2" />
            <!--제목-->
            <div class="outTitle">Settings</div>
            <!--속지영역-->
            <div id="inPager" class="inPager">
                <!--관리자-->
                <div id="contentsArea" class="contentsArea">
                    <div class="exitBtnArea">
                        <button id="exitBtn" class=" exitBtn"></button>
                    </div>
                    <!--문자 메시지 전송-->
                    <form method="post" name="send_msg" target="<?=$targetName?>" action="<?=$actionURL?>" onSubmit="return CheckIt(this)">
                        <!--문자 글자수 지정-->
                        <input type="hidden" name="allow_mms" value="<?$allow_mms?>">
                        <div class="container-fluid">
                            <div class="row">

                                <!--칸 나누기-->
                                <div class="col-lg-5 col-sm-12 col-12">
                                    <!--전화번호 목록-->
                                    <div class="container-fluid numberArea">
                                        <div class="row">
                                            <div class="col-lg-12 col-12 titleText">전화번호 목록</div>
                                        </div>
                                    </div>
                                    <!--전화번호 데이터 출력-->
                                    <div class="userNumber">
                                        <div class="container-fluid">
                                            <?php
                                            include 'dbLoginFun.inc';
                                            loginDB();
                                            $loginDB = $GLOBALS['loginDB'];
                                            $mySQLSelect = "SELECT * FROM `insaidoutPhoneNumber`";
                                            if(!$mySelectOk = mysqli_query($loginDB, $mySQLSelect)){
                                            echo "
                                            <script>console.log('userPhoneNumber : 데이터 불러오기 실패');</script>";
                                            exit;
                                            }

                                            if($userRow = mysqli_num_rows($mySelectOk)==0){
                                            echo "
                                            <script>console.log('userPhoneNumber : 데이터 없음');</script>";
                                            }
                                            while ($mySQLRow = mysqli_fetch_assoc($mySelectOk)){
                                            echo '<div class="row numOneRow">
                                                <div class="col-lg-5 col-5 colRowML">'.$mySQLRow['userName'].'</div>
                                                <div class="col-lg-7 col-7 colRowML">'.$mySQLRow['userPhoneNumber'].'</div>
                                            </div>
                                            <input type="hidden" name="sender'.$mySQLRow['userNo'].'" value="'.$mySQLRow['userPhoneNumber'].'" />
                                            ';
                                            }
                                            mysqli_free_result($mySelectOk);
                                            mysqli_close($loginDB);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!--칸 나누기-->
                                <div class="col-lg-7 col-sm-12 col-12">
                                    <!--전화 번호 목록-->
                                    <!--보내기-->
                                    <div class="smsArea">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-5 col-5 titleText">문자 전송</div>
                                                <div class="col-lg-7 col-7 typingArea">
                                                    <input type="text" name="byte" class="typingNum" value="0" readonly>/ <?=$allowByte?>
                                                </div>
                                            </div>
                                            <!--문자 메시지 입력-->
                                            <div class="row smsRow">
                                                <div class="col-lg-12 col-12">
                                                    <div class="textareaArea">
                                                        <textarea name='message' class="form-control margin-top textareaBox" onclick='DoClear(this)' onselect='DoClear(this)' onkeydown='CalByte(this)' onchange='CalByte(this)' onkeyup='CalByte(this)'>최대 90자에서 2000자까지 쓸 수 있습니다.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--문자 보내기-->
                                            <div class="row">
                                                <div class="col-12 btnArea"><input type="submit" class="btn btn-secondary btnSize" value="보내기"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="openArea" class="openArea">
                <div class="bGImage">
                    <img src="../image/manager_login_inBGOut.png" class="inBG" alt="Folder cover" />
                    <div class="inBG"></div>
                </div>

                <div class="inputArea">
                    <div class="contentsArea">
                        <div class="contentSortArea">
                            <div class="titleText">관리자 페이지</div>
                            <div class="inputBoxArea">
                                <div class="inputOut">
                                    <input type="password" name="name" class="inputIn" value="lkjhgpoiu" readonly />
                                </div>
                                <input type="submit" name="name" class="buttonStyle" value="Login" />
                            </div>
                            <div class="passwordText">Password : zxcvv1109</div>
                        </div>
                    </div>

                    <div class="gearArea">
                        <img src="../image/manager_login_part2" class="bigGear" alt="bing Gear image decoration" />
                        <img src="../image/manager_login_part1" class="smallGear" alt="Small gear image decoration" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--푸터 영역 시작-->
    <div class="container-fluid footerArea">
        <div class="footerPattern">
            <div class="row footerRow">
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-12 mt-4 textArea">
                    <h3 class="card-title footerTitle">VULSAZO PROJECT</h3>
                    <p class="font-weight-lighter text-left footerContent">
                        라인컴퓨터아트학원 | 민회진, 박나영, 성하람, 장보라, 지혜송, 한임정  |  COPYRIGHT ⓒ VULSAZO Co.,Ltd. All Right Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php echo "<script>let allowByte = ".$allowByte."</script>";?>

    <script type="text/javascript">
        
        function DoClear(tg) {
            if (tg.value == tg.defaultValue) {
                tg.value = '';
            }
            CalByte(tg);
        }

        function CalByte(tg) {
            var curText;
            var strLen;
            var byteIs;
            var lastByte;
            var thisChar;

            curText = new String(tg.value);
            strLen = curText.length;
            byteIs = 0;

            for (i = 0; i < strLen; i++) {
                thisChar = curText.charAt(i);
                escChar = escape(thisChar);

                if (escChar.length > 4) {
                    byteIs += 2;  //특수문자 한글인 경우.
                } else if (thisChar != '\r') {  //개행을 제외한 이외의 경우
                    byteIs += 1;
                }

                if (byteIs > allowByte) {
                    alert('[안 내] ' + allowByte + ' 바이트를 초과하실 수 없습니다.');
                    thisText = curText.substring(0, i);
                    tg.value = thisText;
                    byteIs = lastByte;
                    break;
                }

                lastByte = byteIs;
            }

            document.all.byte.value = byteIs;
        }

        function ClearMsg() {
            document.all.message.value = '';
            CalByte(document.send_msg.message);
            document.send_msg.message.focus();
        }

        function CheckIt(fm) {
            if (!fm.message.value || fm.message.value == fm.message.defaultValue) {
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

        $(document).ready(() => {
            //첫번째 이벤트 문이 열린다
            const loginEvent1 = () => {
                $("#openArea").css({
                    transform: "skew(-10deg, 0)",
                    transition: "transform 0.3s ease"
                });
                setTimeout(loginEvent2, 500);
            }
            //두번째 이벤트 종이가 나온다.
            const loginEvent2 = () => {
                $("#inPager").animate({
                    top: "-100%"
                });
                setTimeout(loginEvent3, 500);
            }
            //세번째 이벤트 종이가 앞으로 나오고 내려온다.
            const loginEvent3 = () => {
                $("#inPager").css({
                    zIndex: "500"
                });
                $("#inPager").animate({
                    top: "15.63%"
                });

                setTimeout(loginEvent4, 500);

            }
            //네번째 이벤트 종이가 길어진다.
            const loginEvent4 = () => {
                if (screen.width <= 576) {
                    //너비가 576이하일 경우
                    $("#inPager").animate({ height: "700px" });
                    //alert(1);
                    setTimeout(loginEvent5, 500);
                } else {
                    //alert(2);
                    //너비가 576이상일 경우
                    setTimeout(loginEvent5, 500);
                }


            }
            //내용물이 나타난다.
            const loginEvent5 = () => {
                $("#contentsArea").css({ display: "block" });
            }
            //css
            $(".typingArea").css({
                height: "50px",
                lineHeight: "50px",
                textAlign: "right",
                margin: "20px 0px"
            });
            $(".typingNum").css({
                border: "none",
                outline: "none",
                display: "inline",
                width: "30px"
            });

            //이벤트 시작
            setTimeout(loginEvent1, 500);

            
            $(document).on('click', this, (e) => {
                switch ($(e.target)[0].id) {
                    case "exitBtn":
                        location.href = "./managerLogout.php";
                        break;
                    
                }
            });

        });
    </script>
    <iframe src="" name=hidfrm marginwidth=0 marginheight=0 height=0 width=0 scrolling=no border=0 frameborder=0></iframe>
</body>
</html>
<!--포트폴리오 알림 영역-->
<div id="myModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">알림</h5>
            </div>
            <div class="modal-body">
                <p id="modal_hj">error</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="modalExit" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>