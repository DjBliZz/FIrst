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
<h1>Личный сайт студента GeekBrains</h1>
	<img class="image" src="DSC_0822.jpg" >
<p><b>Добрый день!</b> Меня зовут <i>Максим Близнюк</i>, я начинающий программист. Сейчас вы наблюдаете мой первый сайт.</p>

<p>Написать мне его помог IT-портал <a href="Личный сайт студента GeekBrain"> GeekBrains.</a></p>
<p>Здесь вы сможете сыграть в несколько игр, которые я написал:
<?php
	include "menu.php"; 
?>
</p>
</div>
<div class="footer">
<h4>Copyright &copy; <?php echo date("y");?> Blizz</h4>
</div>

</body>
</html>