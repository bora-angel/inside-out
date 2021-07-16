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
    <div class="allAreaML">
        <div class="backgroundAreaML">
            
            <!--큰 폴더-->
            <img src="../image/manager_login_BG2.png" class="outBG" alt="manager image background2" />
            <!--제목-->
            <div class="outTitle">Settings</div>
            <!--메인으로 가는 이모티콘-->
            <a href="../php/main.php" class="homeIconArea">
                <svg viewBox="0 0 16 16" class="bi bi-house-fill homeIcon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg>
                <div class="homeText">Go Home!</div>
            </a>
            <div id="inPager" class="inPager"></div>
            <div id="openArea" class="openArea">
                <div class="bGImage">
                    <img src="../image/manager_login_inBGOut.png" class="inBG" alt="Folder cover" />
                    <div class="inBG"></div>
                </div>
                <!--패스워드폼-->
                <form method='POST' action='./managerLogin_ok.php'>
                    <div class="inputArea">
                        <div class="contentsArea">
                            <div class="contentSortArea">
                                <div class="titleText">관리자 페이지</div>
                                <div class="inputBoxArea">

                                    <div class="inputOut">
                                        <input type="password" id="managerPwHH" name="managerPwHH" class="inputIn" value="" />
                                    </div>
                                    <input type="submit" id="submitBtn" class="buttonStyle" value="Login" />

                                </div>
                                <div class="passwordText">Password : zxcvv1109</div>

                            </div>
                        </div>

                        <div class="gearArea">
                            <img src="../image/manager_login_part2" class="bigGear" alt="bing Gear image decoration" />
                            <img src="../image/manager_login_part1" class="smallGear" alt="Small gear image decoration" />
                        </div>
                    </div>
                </form>
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
    <script>
        $(document).ready(() => {
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

            /*공백시 모달*/
            const regexBlank = /\S/; //비번
            let errorModal = (modalText) => {
                $("#myModal").css({
                    "display": "block"
                });
                $("#modal_hj").html(modalText);
                return false;
            }
            $(document).on('click', this, (e) => {
                switch ($(e.target)[0].id) {
                    case "submitBtn":
                        return regexBlank.test($("#managerPwHH").val()) ? true : errorModal("내용을 입력해 주세요");
                        break;
                    case "modalExit":
                        $("#myModal").css({ display: "none" });
                        break;
                    case "homeBtn":
                        location.href = "../php/main.php";
                        break;
                }
            });
        });
    </script>
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