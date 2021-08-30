<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	include "menu.php"; 
?>
<div class="middle">
		<h1>Генератор паролей</h1>
		<p>Укажите длину пароля</p>
		<input type="text" id="userAnswer">
		<h3 class="cons" id="passw"></h3>
<h3><div class="push"><p><a href="#" onClick="generate();">Сгенерировать пароль</a></p></div></h3></div>
<div class="footer">
<h4>Copyright &copy; <?php echo date("y");?> Blizz</h4>
</div>
<script src="password.js"></script>
</body>
</html>