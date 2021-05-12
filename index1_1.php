<html>
<head>
<meta charset="utf-8">
<style>
</style>
</head>
<body>
<form method="POST" action="index1.php">
Ваш логин: <input style="margin-left:7px" type="Text" name="login" /><br>
Ваш пароль: <input type="Text" name="psw" /><br>
<input type="submit" />
</form>
</body>
</html>
<?php
$link0 = "https://www.20khvylyn.com/netcat_files/232/229/Putin_zadumalsya_2.JPG" ;
$link1= "https://i.pinimg.com/736x/ca/da/de/cadade7a39a18dbc85183709dc91fde6.jpg";
$link2 = "https://fotointeres.ru/wp-content/uploads/2013/11/1385319993_000vs081.jpg" ;
$link3= "https://im0-tub-ru.yandex.net/i?id=1dc6f31efc8d02c6b0b049768e72a095&n=13&exp=1";
if($_POST["login"]=="admin" && $_POST["psw"]=="Fs~j4Ms|Go" )
{
	echo "<a href=\"$link0\">Putin</a> <br>";
	echo "<a href=\"$link1\">kotik v paname</a> <br>";
	echo "<a href=\"$link2\">sobaka v paname</a> <br>";
	echo "<a href=\"$link3\">ochki</a> <br>";
}

?>