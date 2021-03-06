<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/review.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Document</title>

</head>

<body>
    <div class="container">
        <section class="mainBox">
            <!--타이틀 영역-->
            <div class="titleBox">
                <img class="bubOne" src="../image/bubble1.png" alt="">
                <p class="titleText">Review Comments</p>
                <img class="bubTwo" src="../image/bubble2.png" alt="">
            </div>
            <!--메인 포스터와 평균 평점 영역-->
            <section class="leftBox">
                <div class="posterBox">
                    <p class="posterText">관람객 평점</p>
                    <p class="leftStar">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                    </p>
                    <p class="posterText">(5점)</p>
                    <img class="posterImg" src="../image/insideOut_poster.png" alt="영화 포스터">
                </div>
            </section>
            <!--댓글 입력 영역-->
            <section class="rightBox">
                <div class="talkCount">
                    <p>리뷰를 남겨주세요</p>
                </div>
                <!--댓글 입력창-->
                <form class="inputBox" action="./reviewForm.php" method="post">
                    <label>
                        <input class="nameBox" name ="rvName" id="rvNameBox" type="text" placeholder="닉네임">
                        <p id="starGrade" class="starGrade">
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                        </p>
                        <input class="submitBox" id="rvSubmitBox" name="rvContents" type="submit" value="등록">
                        <input type="hidden" id="starVal" name="rvScope" value="">
                    </label>
                    <textarea class="textArea" id="rvTextArea" name="rvContents"   placeholder="댓글을 입력해주세요"></textarea>
                </form>
                <!--클린봇 영역-->
                <div class="cleanBot">
                    <img class="botImg" src="../image/robot.png" alt="로봇 아이콘">
                    <p class="botText">클린봇이 악성댓글을 감지합니다.</p>
                    <span class="botSet"><i class="fas fa-cog"></i>&nbsp;설정</span>
                </div>
                <!--포트폴리오 알림 영역-->
                <div class="portModal">
                    <img src="../image/portModal.png" alt="portfolio notice modal">
                    <span class="pofolClose"><i class="fas fa-times"></i></span>
                </div>
                <!--댓글창 영역-->
<?php
    $rvSelectArr = [];
	include 'dbLoginFun.inc';
	loginDB();
	$loginDB = $GLOBALS['loginDB'];
	$mySQLSelect = "SELECT * FROM `rvTable`";//전체 조회
	if(!$mySelectOk = mysqli_query($loginDB, $mySQLSelect)){
		echo "<script>console.log('데이터 불러오기 실패');</script>";
		exit;
	}

	if($userRow = mysqli_num_rows($mySelectOk)==0){
		echo "<script>console.log('데이터 없음');</script>";
	}
	//*뿌려질 영역
    echo "<ul id='chatWin' class='chatWin'>";
	while ($mySQLRow= mysqli_fetch_assoc($mySelectOk)){
    	echo "<li>
			<h5>".$mySQLRow['rvName']."</h5>
			<p>".$mySQLRow['rvContents']."</p>
			<input type ='hidden' class='userStar' value = ".$mySQLRow['rvScope'].">
		</li>";
    }
    echo "</ul>";

	//*
	mysqli_free_result($mySelectOk);
	mysqli_close($loginDB);

?>
        </section>
    </div>
    <script>
        //클릭 이벤트 모음
       $("#rvSubmitBox").on("click", function () {
                $.ajax({
                    url: './reviewSub.php',
                    dataType: 'json',
                    type: 'POST',
                    data: {
                        "rvName": $('#rvNameBox').val(),
                        "rvContents": $('#rvTextArea').val(),
                        "rvScope": $('#starVal').val(),
                    },
                    success: function (rvReArr) {
                        if (rvReArr['result'] == true) {
                            console.log(rvReArr['rvName'], rvReArr['rvContents'], rvReArr['rvScope']);
                            $("#chatWin").prepend("<li><h5>" + rvReArr['rvName'] + "</h5><p>" + rvReArr['rvContents'] + "</p></li>");

                            //리셋
                            $('#rvNameBox').val('');
                            $('#rvTextArea').val('');
                            $('#starVal').val('');
                        }
                    }
                });

            });

        /*평점에 점수 매기기*/
        $('#starGrade a').click(function () {
            $(this).parent().children("a").removeClass("on"); //별점의 on 클래스 전부 제거 
            $(this).addClass("on").prevAll("a").addClass("on"); //클릭한 별과, 그 앞 까지 별점에 on 클래스 추가
            return false;
        });

        /*포트폴리오 알림 모달창*/
        $(".botSet").click(function () {
            $(".portModal").css({
                "display": "block"
            });
        })
        $(".pofolClose").click(function () {
            $(".portModal").css({
                "display": "none"
            });
        })
    </script>
</body>

</html>