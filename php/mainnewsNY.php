<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="shortcut icon" href="../image/favicon.png">
    <link rel="icon" type="image/png" href="../image/favicon.png" />
    <title>인사이드 아웃</title>
    <style>
    </style>
</head>
<body>
   <!--상단 고정 메뉴-->
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom fixed-top">
        <a class="navbar-brand offset-lg-1 offset-md-1 ml-4" href="./main.php" >
            <img src="../image/logo.png" alt="insideout logo image" class="topLogo">
        </a>
        <button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" 
        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse offset-lg-4 col-lg-7 menuBox" id="navbarNavAltMarkup">
            <div class="navbar-nav mobileMenuSize">
                <a class="nav-link ml-2 mr-3 mt-3 text-light navSize mainMenu1" href="#videoBox">INSIDE OUT</a>
                <a class="nav-link ml-2 mr-3 mt-3 text-light navSize mainMenu2" href="#mainCharaTop">CHARACTER</a>
                <a class="nav-link ml-2 mr-3 mt-3 text-light navSize mainMenu3" href="#mainEventTop">EVENT</a>
                <a class="nav-link ml-2 mr-3 mt-3 text-light navSize mainMenu4" href="#mainNewsTop">NEWS</a>
                <a class="nav-link ml-2 mr-3 mt-3 text-light navSize mainMenu5" href="#mainReviewTop">REVIEWS</a>
                <a class="nav-link ml-2 mr-3 mt-3 text-light navSize mainMenu6" href="../php/managerLogin.php"><i class="fas fa-user-cog"></i></a>
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
<span class="aTmpId" id="mainCharaTop"></span>
<!--story 영역 시작-->
<?php
    include "../html/story.html";
?>
<!--story 영역 끝-->
<span class="aTmpId" id="mainCharaTop"></span>
<!--캐릭터 소개 영역 시작-->
<?php
    include "../php/character_information.php";
?>
<!--캐릭터 소개 영역 끝-->
<span class="aTmpId" id="mainEventTop"></span>
<!--이벤트 영역 시작-->
<?php
    include "../html/main_eventPage.html";
?>
<!--이벤트 영역 끝-->
<span class="aTmpId" id="mainNewsTop"></span>
<!--뉴스 영역 시작-->
<?php
    include "../php/newsNY.php";
?>
<!--뉴스 영역 끝-->
<span class="aTmpId" id="mainReviewTop"></span>
<!--리뷰 영역 시작-->
<?php
    include "../php/review.php";
?>
<!--리뷰 영역 끝-->
<!--예매하기 영역-->
<?php
    include "../html/buttonBox.html";
?>
<!--예매하기 영역 끝-->
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
    //메뉴 높이만큼의 보이지 않는 임의의 상자를 배치하여 각 메뉴를 눌렀을 때 각 섹션의 시작 부분부터 보이게 하는 코드 -보라-
let menuHeight;
$(window).on("load",()=>{
    menuHeight = $('.navbar').outerHeight(true);
    $(".aTmpId").css({"top":(-menuHeight)});
});
</script>

</body>
</html>
<!--포트폴리오용입니다 문구 모달-->
<div class="portModal">
    <img src="../image/portModal.png" alt="portfolio notice modal">
    <span><i class="fas fa-times closeButton"></i></span>
</div>