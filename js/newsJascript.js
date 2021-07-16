/*일차원 배열*/

  /*제목 배열*/
  const totTitle = [
    "감정대리인의 시대, 진짜 내 감정을 찾는 명작 ‘인사이드아웃’ 책으로 출간",
    '영화<인사이드 아웃> 감정의 색깔표현 "진짜 나를 만날시간"',
    "'인사이드 아웃' 개봉 18일째 300만명 돌파!"
  ];
  /*이미지 배열*/
  const totImg = [
    '../image/news2.png',
    '../image/news3.png',
    '../image/news1.png'
  ];
  /*내용 배열*/
  const totContent = [
    "2015년 흥행 돌풍을 일으킨 애니메이션 영화 ‘인사이드 아웃’의 인기가 식을 줄을 모르고 있다. <br>연말연시를 맞아 다양한 채널과 공간에서 잇따라 선보이며 이를 본 이들이 남긴 리뷰가 최근까지 이어지고 있는 상황. <br>그 화제의 중심에는 명작 ‘인사이드 아웃’의 책 출간 소식이 자리 잡고 있다.<br><br>위즈덤하우스에서 처음으로 출간된 <인사이드 아웃, 오늘은 울어도 돼>는 하루에도 몇 번씩 변하는 감정의 비밀과 우리 머릿속에서 벌어지는 놀라운 이야기를 담은 책이다. <br>열한 살 소녀 라일리의 머릿속 기쁨, 슬픔, 버럭, 까칠, 소심이라는 감정들이 주인공 라일리가 태어난 순간부터 함께하며 행복한 삶을 살도록 노력하는 원작의 스토리에 각 감정이 존재하는 이유와 우리의 일상에 적용할 수 있도록 심리학적, 뇌과학적 지식에 기반을 둔 친절한 해설을 추가했다. <br>거기에 영화 미공개 아트워크와 관객들의 찬사를 받은 명장면, 명대사를 촘촘히 수록하여 소장가치를 높이고 있다.",
    "영화 <인사이드 아웃>의 설정은 모든 사람의 머릿속에 감정 컨트롤 본부가 존재한다는 가정하에 시작된다.<br>그곳에서 열심히 일하는 감정들은 기쁨,슬픔,버럭,까칠,소심 다섯 감정들이다. <br>태어날 때 기쁨만 있었던 라일리는 성장하면서 다양한 감정들을 마주하게 된다.<br><br>그러던 도중 정든 고향을 떠나 도시로 이사를 가게 되면서 라일리의 내면에는 큰 소용돌이가 휘몰아친다. <br>우연한 실수로 기쁨과 슬픔이 본부를 이탈하게 되자 남은 자리를 버럭,까칠,소심 감정들이 차치하게 된다. <br>기쁨과 슬픔은 라일리를 위해서라도 본부를 돌아가기 위해 노력한다.",
    "픽사 애니매이션 '인사이드 아웃'이 개봉 18일 만에 관객 수 300만명을 돌파했다.<br>이 영화 배급사 월트디즈니컴퍼니코리아는 26일 오전 11시 기준 '인사이드 아웃'이 관객 13만9천546명을 모아 누적 관객수가 305만7천777명에 이르렀다고 밝혔다.<br><br>'인사이드 아웃'은 낯선 환경에서 힘든 시간을 보내는 사춘기 소녀에게 행복을 되찾아주려는 '기쁨', '슬픔', '버럭', '까칠', '소심' 등 다섯 캐릭터의 모험을 그린 애니매이션 영화다.<br>지난 5월 칸 국제영화제에서 처음 공개돼 호평을 받은 이 영화는 북미에서 '겨울왕국'을 넘어서는 오프닝 스코어를 기록하며 이목을 집중시켰다.<br><br>어린이를 넘어 성인 관객이 보기에 손색없는 영화라는 입소문이 퍼지면서 국내에서도 흥행에 성공했다.<br>특히, 이번 영화는 세계적인 애니메이션 제작사 픽사(PIXAR)가 만든 15편의 영화 가운데 국내 최다 관객 기록을 경신했다."
  ];

  /*목록 내용 배열*/
  const ListContent = [
    "<u>2015년 흥행 돌풍을 일으킨 애니메이션 영화 ‘인사이드 아웃’의 인기가 식을 줄을 모르고 있다.<br>연말연시를 맞아 다양한 채널과 공간에서 잇따라 선보이며...</u>",
    "<u>영화 <인사이드 아웃>의 설정은 모든 사람의 머릿속에 감정 컨트롤 본부가 존재한다는 가정하에 시작된다.<br>그곳에서...</u>",
    "<u>픽사 애니매이션 '인사이드 아웃'이 개봉 18일 만에 관객 수 300만명을 돌파했다.<br>이 영화 배급사 월트디즈니컴퍼니코리아는 26일 오전 11시 기준...</u>"
  ];


  /*뉴스 목록 첫번째 클릭시*/
  function newsListOwn() {
    /*제목*/
    document.getElementById("newsMainTitle").innerHTML = totTitle[0];
    /*이미지*/
    const newMainImg = document.newMainImg;
    newMainImg.src = totImg[0];
    /*내용*/
    document.getElementById("newsMainContent").innerHTML = totContent[0];

  };

  /*뉴스 목록 두번째 클릭시*/
  function newsListTwo() {
    /*제목*/
    document.getElementById("newsMainTitle").innerHTML = totTitle[1];
    /*이미지*/
    const newMainImg = document.newMainImg;
    newMainImg.src = totImg[1];
    /*내용*/
    document.getElementById("newsMainContent").innerHTML = totContent[1];

  };

  /*뉴스 목록 세번째 클릭시*/
  function newsListThree() {
    /*제목*/
    document.getElementById("newsMainTitle").innerHTML = totTitle[2];
    /*이미지*/
    const newMainImg = document.newMainImg;
    newMainImg.src = totImg[2];
    /*내용*/
    document.getElementById("newsMainContent").innerHTML = totContent[2];
  };

  /*뉴스 모바일용 목록 왼쪽 클릭시*/
  function newsMobleLeft() {

    //제목
    const listNewsT = totTitle.pop();
    totTitle.unshift(listNewsT);

    //이미지
    const listNewsI = totImg.pop();
    totImg.unshift(listNewsI);

    //내용
    const listNewsC = ListContent.pop();
    ListContent.unshift(listNewsC);

    //회진 테스트 중 내용
      const mainNewsC = totContent.pop();
      totContent.unshift(mainNewsC);

    /*제목*/
    document.getElementById("ListMobleTitle").innerHTML = totTitle[1];
    /*이미지*/
    const ListMobleImg = document.ListMobleImg;
    ListMobleImg.src = totImg[1];
    /*내용*/
      document.getElementById("ListMobleContent").innerHTML = ListContent[1];

      document.getElementById("newsMainContent").innerHTML = totContent[1];

  }


  /*뉴스 모바일용 목록 오른쪽 클릭시*/
  function newsMobleRight() {

    //제목
    const listNewsT = totTitle.shift();
    totTitle.push(listNewsT);

    //이미지
    const listNewsI = totImg.shift();
    totImg.push(listNewsI);

    //내용
    const listNewsC = ListContent.shift();
    ListContent.push(listNewsC);

      //회진 테스트 중 내용
      const mainNewsC = totContent.shift();
      totContent.push(mainNewsC);

    /*제목*/
    document.getElementById("ListMobleTitle").innerHTML = totTitle[1];
    /*이미지*/
    const ListMobleImg = document.ListMobleImg;
    ListMobleImg.src = totImg[1];
    /*내용*/
      document.getElementById("ListMobleContent").innerHTML = ListContent[1];

      document.getElementById("newsMainContent").innerHTML = totContent[1];

  }