
 //모달 닫기 버튼 나영
 $(document).on("click",".closeButton",()=>{
    $(".portModal").css("display","none");
})



            

//PC 스크롤이 내려가면 상단영역 색상 체인지 나영
$(window).on("load",()=>{
    if(window.outerWidth>576){
        $(document).on("scroll",window,()=>{
            if($(this).scrollTop()>=Math.ceil($("#storySection").offset().top)){ 
                $(".bg-custom").css({
                    "background-color":"#00013A",
                    "transition":"0.5s"
                }); 
            } 
            else{ 
                $(".bg-custom").css("background-color","rgba(255,255,255,0.1"); 
            }      
        });
    }
});
let menuFlag = 0;
$(document).on("click","#navbar-toggler",()=>{
//모바일 메뉴 토글 나영
    switch(menuFlag){
        case 0 : $(".menuBox").show();
        $(".bg-custom").css("background-color","#00013A");
        return menuFlag=1;
        break;
        case 1 : $(".menuBox").hide();
        $(".bg-custom").css("background-color","rgba(255,255,255,0.1");
        return menuFlag=0;
        break;
    }
});
$(window).resize(()=>{
    //모바일 상단영역 색상 체인지
    if(window.innerWidth<=576){
        $(".bg-custom").css({
            "background-color":"#00013A",
            "transition":"1s"
        });
        $(".navSize").css("background-color","#00013A");
        $(".mobileMenuSize").css("background-color","#00013A");
    }else{ 
        $(".bg-custom").css("background-color","rgba(255,255,255,0.1"); 
    }      
});

//모바일 버전 스크롤 내리면 메뉴 사라짐 나영
$(document).on("scroll",window,()=>{
    let scrollTop = $(window).scrollTop();
    if(scrollTop>=1){ 
       $(".menuBox").hide();
    } 
});

 
