//제이쿼리
$(function () {
  
    $("#portModal").css("display","block");
    //모달 닫기 버튼 나영
 $(document).on("click",".closeButton",()=>{
  $(".portModal").css("display","none");
})
  
    //이전,다음 클릭시 이벤트 발생 PC용
    $(document).on('click','.pageItemA', function () {
      alert("포트폴리오용 페이지입니다.");
    });

    //호버 전을 호버 후로 변경

    /*뉴스 목록 클릭시 폰트크기 지정(공용)*/
    $(document).on('click', "#newListOwn, #newListTwo, #newListThree",function () {
      $(".newsContent").css("font-size", "20px");
    });


    /*뉴스 목록 클릭시 본문의 크기 변경*/
    $(document).on('click', '#newListOwn',function () {
      $(".newsArea").css("height","2600px");
      $(".newMainBox").css("height", "1450px");
      $(".newMainBox").fadeToggle();
      $(".newpageBox").css({
        'height': '2300px',
        'margin-bottom':'100px',
        'top':'80px'
      });
      
    });

    $(document).on('click','#newListTwo', function () {
      $(".newsArea").css("height","2600px");
      $(".newMainBox").css("height", "1250px");
      $(".newMainBox").fadeToggle();
      $(".newpageBox").css('height', '2100px');
      
    });

    $(document).on('click', '#newListThree',function () {
      $(".newsArea").css("height","2600px");
      $(".newMainBox").css("height", "1350px");
      $(".newMainBox").fadeToggle();
      $(".newpageBox").css('height', '2150px');
     
    });


  })



  