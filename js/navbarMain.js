let mainMoveScroll;
let menuHeight;
$(".menu_2").on("click",".menu_1",()=>{
    menuHeight = navbar.outerHeight();
    mainMoveScroll = $("#characterArea").outerHeight() + menuHeight;
    window.scrollTo({top:mainMoveScroll});
})