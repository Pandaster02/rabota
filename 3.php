<form action="" method="POST">
<label>
Пожалуйста вводить все на Английском языке
</label>
</br>
	<input type="text" name="fio" placeholder="Ильин Михаил Ильич"/>
	<input type="submit" value="Предоставить информацию"/>
</form>

<?php
if(isset($_POST['fio'])){
	$fio = explode(" ", $_POST['fio']);
	$family = $fio[0];
	$name = substr($fio[1], 0, 1).".";
	$otchestvo = substr($fio[2], 0, 1).".";

	echo "Ф.И.О: ".$family." ".$name." ".$otchestvo;
}
?>