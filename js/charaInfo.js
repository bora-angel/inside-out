
        $(window).on('load',()=>{
            if(window.innerWidth<577){
                $(".characterArea").html('<img src="../image/mobileChara.jpeg" class="position-relative bgCSS" alt="character infomation image"/>');
            }else{
                $(".characterArea").load("../html/wideCharacter.html");
            }
        });
        $(window).resize(function(){
            if(window.innerWidth<577){
                $(".characterArea").html('<img src="../image/mobileChara.jpeg" class="position-relative bgCSS" alt="character infomation image"/>');
            }else{
                $(".characterArea").load("../html/wideCharacter.html");
            }
        });

        //캐릭터 소개 마우스 벗어날 때 이벤트 -보라-
        function charaMouseLeave(){
            $(".scriptLight").css({"display":"none"});
            $("#charaText").fadeOut(200);
            $(".clickMe").fadeIn(200);
            $(".clickMe").css({display : 'block'});
            $("#charaText").css({display:"none"});
            $("#noneMarble").animate({bottom:"26%"});
            $("#noneMarble").attr("src","../image/ball_none.png");
            $(".commShadow").css({display:"none"});
        }
        //캐릭터 소개 클릭시 이벤트 -보라-
        function charaClick(){
            $("#noneMarble").animate({bottom:"34%"},200,()=>{
                $("#charaText").fadeIn(200);
                $(".scriptLight").fadeIn(200);
                $(".scriptLight").css({display : "block"});
                $("#charaText").css({display : 'block'});
                $(".clickMe").fadeOut(200);
                $(".clickMe").css({display:"none"});
            });
        }
        //캐릭터 소개 마우스가 캐릭터에 있을 때 이벤트 -보라-
        function charaMouseEnter(nameZero, nameOne, nameTwo){
            $(".shadow" + nameZero).fadeIn(200);
            $(".shadow" + nameZero).css({display:"block"});
            $("#noneMarble").attr("src","../image/ball_" + nameTwo + ".png");
            $("#charaText").attr("src","../image/" + nameTwo +"_text.png");
            $(".scriptLight").attr("src","../image/" + nameOne + "_light.png");
        }
        //빙봉 이벤트 -보라-
        $(document).on("mouseenter","#bingId",()=>{
            charaMouseEnter("Bing","bing","bingbong")
        });
        $(document).on("mouseleave","#bingId",()=>{
            charaMouseLeave()
        });
        $(document).on("click","#bingId",()=>{
            charaClick()
        });

        //조이 이벤트 -보라-
        $(document).on("mouseenter","#joyId",()=>{
            charaMouseEnter("Joy","joy","joy")
        });
        $(document).on("mouseleave","#joyId",()=>{
            charaMouseLeave()
        });
        $(document).on("click","#joyId",()=>{
            charaClick()
        });

        //새드니스 이벤트 -보라-
        $(document).on("mouseenter","#sadId",()=>{
            charaMouseEnter("Sadness","sadness","sadness")
        });
        $(document).on("mouseleave","#sadId",()=>{
            charaMouseLeave()
        });
        $(document).on("click","#sadId",()=>{
            charaClick()
        });

        //앵거 이벤트 -보라-
        $(document).on("mouseenter","#angerId",()=>{
            charaMouseEnter("Anger","anger","anger")
        });
        $(document).on("mouseleave","#angerId",()=>{
            charaMouseLeave()
        });
        $(document).on("click","#angerId",()=>{
            charaClick()
        });

        //디스거스트 이벤트 -보라-
        $(document).on("mouseenter","#disgId",()=>{
            charaMouseEnter("Disgust","disgust","disgust")
        });
        $(document).on("mouseleave","#disgId",()=>{
            charaMouseLeave()
        });
        $(document).on("click","#disgId",()=>{
            charaClick()
        });
        
        //피어 이벤트 -보라-
        $(document).on("mouseenter","#fearId",()=>{
            charaMouseEnter("Fear","fear","fear")
        });
        $(document).on("mouseleave","#fearId",()=>{
            charaMouseLeave()
        });
        $(document).on("click","#fearId",()=>{
            charaClick()
        });
