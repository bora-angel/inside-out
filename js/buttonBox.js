/*top버튼 나영*/
$(document).on("click",".topButtonBox",()=>{
    $("html,body").scrollTop(0);
})
/*포트폴리오 알림 모달창 혜송*/
$(document).on('click','.ticketBox',function () {
    $("#myModal").css({
        "display": "block"
    });
})
$(document).on('click','.btn-secondary',function () {
    $("#myModal").css({
        "display": "none"
    });
})