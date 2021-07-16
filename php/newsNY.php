
  <!--뉴스 jQuery-->
  <script src="../js/newsNY.js"></script>
  <!--뉴스 javascript-->
  <script src="../js/newsJascript.js"></script>
  <!--아이콘사이트-->
  <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
  <!--뉴스 디자인-->
  <link rel="stylesheet" href="../css/newsNY.css" type="text/css">
<div class="newsArea position-relative" id="newsArea mainNewsTop">
  <!--배경
  <img src="../image/newsTotPage.png" class="newDesignImgA img-fluid" alt="Responsive image">
  <img src="../image/newsWidthPage.png" class="newDesignImgB" alt="가로형 배경이미지">
-->
  <!--이전,다음버튼(PC용)-->
  <div class="newpageBox mt-5 position-absolute">
    <i class="pageItem pageItemA leftBtn fas fa-angle-left mt-5"></i>
    <i class="pageItem pageItemA rightBtn fas fa-angle-right mt-5"></i>
    <div class="container PCBtn">
      <div class="row">
        <div class="col newList">
          <!--뉴스 카드 작은거 목록-->
          <div class="card-deck mt-5">
            <div class="card cardListBox mr-4 ListContentA" id="newListOwn" onclick="newsListOwn()">
              <img src="../image/news2.png" class="card-img-top" alt="뉴스사진">
              <div class="card-body ">
                <h2 class="card-title ListcardTitle">감정대리인의 시대, 진짜 내 감정을 찾는 명작 ‘인사이드아웃’ 책으로 출간</h2>
                <p class="card-text ListContentAtxt"><u>2015년 흥행 돌풍을 일으킨 애니메이션 영화 ‘인사이드 아웃’의 인기가 식을 줄을 모르고 있다.<br>
                    연말연시를 맞아 다양한 채널과 공간에서 잇따라 선보이며...</u></p>
              </div>
            </div>
            <div class="card cardListBox ListContentB" id="newListTwo" onclick="newsListTwo()">
              <img src="../image/news3.png" class="card-img-top" alt="뉴스사진" name="ListMobleImg">
              <div class="card-body cardListBody">
                <h2 class="card-title ListcardTitle" id="ListMobleTitle">영화<인사이드 아웃> 감정의 색깔표현 "진짜 나를 만날시간"</h2>
                <p class="card-text ListContentBtxt" id="ListMobleContent"><u>영화 <인사이드 아웃>의 설정은 모든 사람의 머릿속에 감정 컨트롤 본부가
                      존재한다는 가정하에 시작된다.<br>
                      그곳에서...</u></p>
              </div>
            </div>
            <div class="card cardListBox ml-4 ListContentC" id="newListThree" onclick="newsListThree()">
              <img src="../image/news1.png" class="card-img-top" alt="뉴스사진">
              <div class="card-body ">
                <h2 class="card-title ListcardTitle">'인사이드 아웃' 개봉 18일째 300만명 돌파!</h2>
                <p class="card-text ListContentCtxt"><u>픽사 애니매이션 '인사이드 아웃'이 개봉 18일 만에 관객 수 300만명을 돌파했다.<br>
                    이 영화 배급사 월트디즈니컴퍼니코리아는 26일 오전 11시 기준...</u></p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-100"></div>
        <div class="col moblieItem">
          <!--모바일전용 이전,다음-->
          <i class="pageItemB ItemBleft fas fa-angle-left mt-5" onclick="newsMobleLeft()"></i>
          <i class="pageItemB ItemBright fas fa-angle-right mt-5" onclick="newsMobleRight()"></i>
        </div>
        <div class="w-100"></div>
        <div class="newMainBox mt-5">
          <!--col-12-->
          <div class="col">
            <h1 class="text-center newMainTitle mt-5 mb-5" id="newsMainTitle" name="newMainTitle">영화<인사이드 아웃> 감정의 색깔표현 "진짜 나를 만날시간"</h1>
          </div>
          <div class="w-100"></div>
          <div class="cardWidth card mb-3">
            <img src="../image/news3.png" class="card-img-top" id="newsMainImg" alt="뉴스사진" name="newMainImg">
            <div class="card-body mt-4 mb-4">
              <p class="newsContent card-text" id="newsMainContent" name="newMainContent">
                영화 &lt;인사이드 아웃&gt;의 설정은 모든 사람의 머릿속에 감정 컨트롤 본부가 존재한다는 가정하에 시작된다.<br>
                  그곳에서 열심히 일하는 감정들은 기쁨,슬픔,버럭,까칠,소심 다섯 감정들이다. <br>
                  태어날 때 기쁨만 있었던 라일리는 성장하면서 다양한 감정들을 마주하게 된다.<br>
                  <br>
                  그러던 도중 정든 고향을 떠나 도시로 이사를 가게 되면서 라일리의 내면에는 큰 소용돌이가 휘몰아친다. <br>
                  우연한 실수로 기쁨과 슬픔이 본부를 이탈하게 되자 남은 자리를 버럭,까칠,소심 감정들이 차치하게 된다. <br>
                  기쁨과 슬픔은 라일리를 위해서라도 본부를 돌아가기 위해 노력한다.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>