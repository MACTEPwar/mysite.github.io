﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function gotolink()
		{
			document.location.href = "autoris.php";
		}
	</script>
</head>
<body>
	<div class="header">
		<img src="css/image/bg1.png" class="bg1">
		<img src="css/image/bg2.png" class="bg2">
	</div>
	<div class="menu">
		<ul>
			<li><a href="index.php"><img src="css/image/main.png"></a></li>
			<li><a href="#"><img src="css/image/main.png"></a></li>
			<li><a href="#"><img src="css/image/main.png"></a></li>
		</ul>
	</div>
	<div class="middle">
		<div class="content-1">
			<h1 class="h11">Регестрация</h1>
			<form class="autorisat">
				<h2>
					Имя:
					<input type="text" name="isname" class="edtTxt">
					Фамилия:
					<input type="text" name="isfirstname" class="edtTxt">
				</h2>
				<h2>E-mail:<input type="text" name="E-mail-r" class="login-r"></h2>
				<h2>Логин:<input type="text" name="log-r" class="login-r"></h2>
				<h2>Пароль:<input type="password" name="pas-r" class="pas-r"></h2>
				<input type="button" name="checkin-r" value="Отмена" onClick="gotolink()">
				<input type="button" name="reg-r" value="Зарегестрироваться" onClick="">
			</form>
		</div>
		<div class="rightMenu">
			<img src="css/image/btn_r.png" id="rightmenubar" class="imger">
			<ul class="ulet">
				<li><a href="#">Первое</a></li>
				<li><a href="#">Второе</a></li>
				<li><a href="#">Десерт</a></li>
				<li><a href="#">Салат</a></li>
			</ul>
		</div>
	</div>
	<div class="footer">
	</div>
</body>
</html>