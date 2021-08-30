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
		<h1>Угадайка</h1>
		<p id="info">Угадайте число от 0 до 100</p>
		<input type="text" id="userAnswer">
		<div class="push"><a href="#" onClick="guess();" id="button">Начать</a>
		</div>
	</div>

<div class="footer">
<h4>Copyright &copy; Blizz</h4>
</div>

<script src="puzzle.js"></script>

</body>
</html>