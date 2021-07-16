$(document).ready(function () {
        const NameBm = /^[가-힣].$/;//공백과 띄어쓰기 제외
        const numBm = /^[0-9]{4,11}$/;//전화번호 자리수 11자리
        const eventModal = (alertText) => {
            $("#eventAlert").css("display", "block");
            $("#eventAlertText").html(alertText);//모달 텍스트 입력
        }
        $(document).on("click", this, (e) => {//클릭 발생

            switch ($(e.target)[0].id) {
                case "eventSubmitBtn":
                    if ($("input:checkbox[name=eventCheck]").is(":checked") == false) {
                        eventModal("개인정보 수집에 동의해 주세요!");
                        return false;
                    } else {
                        if (NameBm.test($("#userName").val()) == false && numBm.test($("#userPhone").val()) == false) {
                            // cnsole.log(NameBm.test($("#userName").val()));
                            eventModal("닉네임과 전화번호를 알맞는 형태로 넣으시오!");
                            return false;
                        } else {
                            //console.log("t");
                            eventModal("이벤트 응모 완료!!");
                            return true;//t
                        }
                    }
                    break;
                case "eventModalExit":
                    $("#eventAlert").css("display", "none");
                    return false;
                    break;
            }
        });
    });