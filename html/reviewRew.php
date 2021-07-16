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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../css/review.css" type="text/css">
</head>

<body>
    <div class="reviewArea" id="reviewArea">        
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
                    <p class="botText">욕설 및 비방 댓글은 자제해주세요.</p>
                    <span class="botSet"><i class="fas fa-cog"></i>&nbsp;설정</span>
                </div>
                <!--댓글창 영역-->
<?php
    $rvSelectArr = [];
	include 'dbLoginFun.inc';
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
    <!--포트폴리오 알림 영역-->
    <div id="myModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">알림</h5>
                </div>
                <div class="modal-body">
                    <p>포트폴리오 용도로 제작된 사이트입니다.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/review.js" type="text/javascript">
        
    </script>
</body>

</html>