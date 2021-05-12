
<?php
$login="Не известно";
$password="Не известно";
if(isset($_POST['login']))$login=$_POST['login'];
if(isset($_POST['password']))$password=$_POST['password'];

?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
ФИО: </br>
<input type="Text" name="Login" pattern> </br>
Номер телефона: </br>
<input type="number " name="number" pattern="[0-9]{5,10}"> </br>
Пароль: </br>
<select>
  <option value="паспортные данные">паспортные данные</option>
  <option value="водительские права">водительские права</option>
</select> </br>
Серия и номер:</br>
<input type="number " name="number" pattern="[0-9]{5,10}"> </br>
Дата выдачи:</br>
<input type="number " name="number" pattern="[0-9]{5,10}"> </br>
 <form action="1.php" method="POST" >
 <input type="submit" value="добавить" >
</form>
 <form action="2.php" method="POST">
 <input type="submit" value="выход">
</form>

</body>
</html>