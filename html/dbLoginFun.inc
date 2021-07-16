<?
function loginDB(){
	if (!$GLOBALS['loginDB'] = mysqli_connect("localhost", "c11st06", "M1HhLYyWaj3XpICl", "c11st06")){
		echo "<script>console.log('로그인 실패');</script>";
		exit;
	}
	if(!mysqli_select_db($GLOBALS['loginDB'], "c11st06")){
		echo "<script>console.log('db연결 실패');</script>";
		exit;
	}}
?>