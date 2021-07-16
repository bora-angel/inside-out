

$(document).ready(() => {

    const regexBlank = /\S/ //공백검사
    const errorReviewModal = (modalText) => {//에러시 모달과 특정 문구 등장
        $("#alertModal").css({
            "display": "block"
        });
        $("#modal_hj").html(modalText);
    }
    $(document).on('click', this, (e) => {
        switch ($(e.target)[0].id) {
            //리뷰 버튼 클릭
            case "rvSubmitBox":
                if ($("starVal").val() == "") {
                    errorReviewModal("별점을 매겨 주세요");
                    return false;
                } else {
                    if (regexBlank.test($("#rvNameBox").val())==false&&regexBlank.test($("#rvTextArea").html())==false){
                        errorReviewModal("내용을 입력해 주세요");
                        return false;
                    }
                }
                break;
            //모달 닫기
            case "modalExit":
                $("#alertModal").css({ display: "none" });
                return false;
                break;
        }
    });
    //평점
    const starScope = () => {
        let h = 0;
        let totalStar = 0;//총합
        let starNum = 0;//
        while (h < $("#chatWin li").length) {
            if ($("#chatWin li:nth(" + h + ") .userStar").val() !== '') {
                totalStar += Number($("#chatWin li:nth(" + h + ") .userStar").val());
                starNum++;
            }
            h++;
        }
        const starAverage1 = (totalStar/starNum).toFixed(2);//평균
        //console.log(starAverage1);
        //const starAverage2 = Math.floor(totalStar / starNum);//표시될 별 모양
        $(".posterBox p:nth-child(3)").html("(" + starAverage1 + "점)");//평균 입력
        //$(".leftStar a:nth-child("+starAverage2+")").addClass("on").prevAll("a").addClass("on"); //평균까지 별점에 on 클래스 추가
        return false;
    }
    starScope();
});