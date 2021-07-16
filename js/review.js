/*평점에 점수 매기기 혜송*/
$(document).on('click','#starGrade a',function () {
    $(this).parent().children("a").removeClass("on"); //별점의 on 클래스 전부 제거 
    $(this).addClass("on").prevAll("a").addClass("on"); //클릭한 별과, 그 앞 까지 별점에 on 클래스 추가
    $('#starVal').val($("#starGrade .on").length);//별저 hidden박스에 입력
    return false;
});

/*포트폴리오 알림 모달창 혜송*/
$(document).on('click','.botSet',function () {
    $("#myModal").css({
        "display": "block"
    });
})
$(document).on('click','.moHyeBtn',function () {
    $("#myModal").css({
        "display": "none"
    });
})