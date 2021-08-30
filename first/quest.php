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
<h1>Загадки</h1>
<div id="first"><h2><p>Приветствую! Решил(а) разшевелить свой разум? Что ж, проверим, на что ты способен(на) <br>Ответь-ка на пару вопросов, если ответы будут верными, то в награду дам тебе интересный факт.</p>
<p>Внимание на вопросы:</p></h2>
</div>
	<div class="questions">
	<h3><p>Сколько континентов на планете?</p>
	<input type="text" Id="userAnswer1">

	<p>Какой самый населённый континент на земле?</p>
	<input type="text" id="userAnswer2">

	<p>Какая самая древняя цивилизация на планете?</p>
	<input type="text" Id="userAnswer3">

	<p>Автор книги "Эрагон"?</p>
	<input type="text" Id="userAnswer4">

	<p>Какая часть територии Швеции покрыта Лесами?</p>
	<p><input type="text" Id="userAnswer5"></p>

		<div class="push"><p><a href="#" onClick="checkAnswers()";>Ответить</a></p></div></h3>
	</div>
</div>
<div class="footer">
<h3>Copyright &copy; Blizz</h3>
</div>




<script src="quest.js"></script>
</body>
</html>