
<link rel="stylesheet" href="../css/review.css" type="text/css">
<script src="../js/review.js" type="text/javascript"></script>
<script src="../js/reviewModal.js" type="text/javascript"></script>

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
                    <a><i class="fas fa-star"></i></a>
                    <!--<a href="#"><i class="fas fa-star"></i></a>
                    <a href="#"><i class="fas fa-star"></i></a>
                    <a href="#"><i class="fas fa-star"></i></a>
                    <a href="#"><i class="fas fa-star"></i></a>-->
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
                    <input class="nameBox" name="rvName" id="rvNameBox" type="text" placeholder="닉네임">
                    <p id="starGrade" class="starGrade">
                        <a href="#" class="on"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                    </p>
                    <input class="submitBox" id="rvSubmitBox" name="rvContents" type="submit" value="등록">
                    <input type="hidden" id="starVal" name="rvScope" value="1">
                </label>
                <textarea class="textArea" id="rvTextArea" name="rvContents" placeholder="댓글을 입력해주세요"></textarea>
            </form>
            <!--클린봇 영역-->
            <div class="cleanBot">
                <img class="botImg" src="../image/robot.png" alt="로봇 아이콘">
                <p class="botText">욕설 및 비방 댓글은 자제해주세요.</p>
                <span class="botSet"><i class="fas fa-cog"></i>&nbsp;설정</span>
            </div>
            <!--포트폴리오 알림 영역-->
            <div id="myModal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">알림</h5>
                        </div>
                        <div class="modal-body">
                            <p>포트폴리오 용도로 제작된 사이트입니다.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary moHyeBtn" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--리뷰 공백시 모달-->
            <div id="alertModal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
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
            <!--댓글창 영역-->
            <?php
            include 'dbLoginFun.inc';
            loginDB();
            $loginDB = $GLOBALS['loginDB'];
            $mySQLSelect = "SELECT * FROM `rvTable` ORDER BY `rvNum` DESC";//전체 조회
            if(!$mySelectOk = mysqli_query($loginDB, $mySQLSelect)){
            echo "
            <script>console.log('데이터 불러오기 실패');</script>";
            exit;
            }

            if($userRow = mysqli_num_rows($mySelectOk)==0){
            echo "
            <script>console.log('데이터 없음');</script>";
            }
            //*뿌려질 영역
            echo "<ul id='chatWin' class='chatWin'>";
                while ($mySQLRow= mysqli_fetch_assoc($mySelectOk)){
                echo "<li>
                    <h5>".$mySQLRow['rvName']."</h5>
                    <p>".$mySQLRow['rvContents']."</p>
                    <input type='hidden' class='userStar' value=".$mySQLRow['rvScope'].">
                </li>";
                }
                echo "</ul>";

            //*
            mysqli_free_result($mySelectOk);
            mysqli_close($loginDB);

            ?>
        </section>
</div>
