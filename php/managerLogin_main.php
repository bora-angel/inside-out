<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>메인으로 가는 페이지</title>
	</head>
	<body>
<?php
if(!isset($_COOKIE['managerPwHH'])){
	echo "<meta http-equiv='refresh' content='0;url=./master.php'>";
	exit;	 		
}

echo "<button><a href='./managerLogout.php'>로그아웃</a></button>";
?>
	</body>
</html>