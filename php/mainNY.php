<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./mainNY.css">
    <link rel="shortcut icon" href="../image/favicon.png">
    <title>인사이드 아웃</title>
    <style>

    </style>
</head>
<body>
   <!--상단 고정 메뉴-->
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg p-0 navbar-dark bg-custom fixed-top">
        <a class="navbar-brand offset-lg-1 offset-md-1" href="./main.html" >
            <img src="../image/logo.png" alt="insideout logo image" class="topLogo">
        </a>
        <button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" 
        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse offset-lg-4 col-lg-7 menuBox" id="navbarNavAltMarkup">
            <div class="navbar-nav mobileMenuSize">
                <a class="nav-link ml-2 mr-3 mt-3 text-light navSize menu_1" href="#videoBox">INSIDE OUT</a>
                <a class="nav-link ml-2 mr-3 mt-3 text-light navSize menu_2" href="#storySection">CHARACTER</a>
                <a class="nav-link ml-2 mr-3 mt-3 text-light navSize menu_3" href="#">EVENT</a>
                <a class="nav-link ml-2 mr-3 mt-3 text-light navSize menu_4" href="#">NEWS</a>
                <a class="nav-link ml-2 mr-3 mt-3 text-light navSize menu_5" href="#">REVIEWS</a>
                <a class="nav-link ml-2 mr-3 mt-3 text-light navSize menu_6" href="#"><i class="fas fa-user-cog"></i></a>
            </div>
        </div>
    </nav>
</div>
<!--동영상 영역-->
<div id="videoBox" class="videoBox">
    <video autoplay loop muted>
        <source src="../video/insideout.mp4" type="video/mp4">
    </video>
</div>
<?php
    include "../php/character_information.php";
?>
<?php
    include "../html/main_eventPage.html";
?>
<?php
    include "../php/review.php";
?>


<!--story 영역-->
<!--<section id="storySection" class="storySection">
    <article class="storyTextBox">
        <h1>STORY</h1>
        <div class="textBox">
            <ul>
                <li>모든 사람들 머릿속에 존재하는 감정 컨트롤 본부.</li>
                <li>그리고 그곳에서 열심히 일하는 기쁨, 슬픔, 버럭, 까칠, 소심 다섯 감정들.</li>
                <li>이사 후 새로운 환경에 적응하려는 11살 소녀 '라일리'를 위해 그녀의 감정들은</li>
                <li>그 어느 때 보다 바쁘게 감정의 신호를 보내지만, 우연한 실수로 '기쁨'과 '슬픔'이</li>
                <li>본부를 이탈하게 되고 '라일리'의 마음속에 큰 변화가 찾아온다.</li>
                <li>'라일리'가 예전의 모습을 되찾기 위해서는 '기쁨'과 '슬픔'이 본부로 돌아가야만 한다!</li>
                <li>그러나 엄청난 기억들이 저장된 머릿속 세계에서 본부까지 가는 길은 험난하기만 하다.</li>
                <li>과연, '라일리'는 다시 행복해질 수 있을까?</li>
            </ul>
        </div>
        <div class="typing">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </article>
    <article class="storyTextBoxMobile">
        <h1>STORY</h1>
        <pre>

모든 사람들 머릿속에 존재하는 감정 컨트롤 본부.
그리고 그곳에서 열심히 일하는 기쁨, 슬픔, 버럭, 까칠, 소심 다섯 감정들.
이사 후 새로운 환경에 적응하려는 11살 소녀 '라일리'를 위해 
그녀의 감정들은 그 어느 때 보다 바쁘게 감정의 신호를 보내지만, 
우연한 실수로 '기쁨'과 '슬픔'이 본부를 이탈하게 되고 
'라일리'의 마음속에 큰 변화가 찾아온다.
            
'라일리'가 예전의 모습을 되찾기 위해서는 
'기쁨'과 '슬픔'이 본부로 돌아가야만 한다!
그러나 엄청난 기억들이 저장된 머릿속 세계에서 
본부까지 가는 길은 험난하기만 하다.
과연, '라일리'는 다시 행복해질 수 있을까?
            </pre>
    </article>
</section>-->
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
<!--포트폴리오용입니다 문구 모달-->
<div class="portModal">
    <img src="../image/portModal.png" alt="portfolio notice modal">
    <span><i class="fas fa-times closeButton"></i></span>
</div>
    <script src="./mainNY.js" type="text/javascript">
      
       
 
    </script>
</body>
</html>