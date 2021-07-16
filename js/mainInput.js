const userPhone=document.getElementById("userPhone");
const userName=document.getElementById("userName");

const numBm = /^[0-9]{4,12}$/; // 번호
const NameBm=/^[가-힣].$/; //이름
const binBm = /\s/; // 공백문자 패턴


function formCheck(){
  const inputContent = document.input;
  // 이름 체크
  if( !NameBm.exec(inputContent.userName.value) || inputContent.userName.value.length < 8 ){
      alert("이름을 공백없이 입력해 주세요!!");
      inputContent.userName.focus();
      return;
  }
alert("이름 성공");


/*
  // 전화번호부 
  if( numBm==userPhone ){
     alert("숫자로만 구성됩니다!!");
     inputNum.userName.focus();
     return;
  } 
  alert("모든 항목을 훌륭하게 입력하셨습니다.");
*/

}

