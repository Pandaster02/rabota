<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset = "UTF-8">
	<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<title>電卓</title>
<body background="spece.jpg">
<style>
h1{
    padding-left: 67px;
    margin-top: 60px;
    font-size: 27px;
    color: #aa96da;
    text-transform: uppercase;
}
.calculate-form {
    width: 460px;
    height: 100px;
    padding: 0px 60px 40px 60px;
}
input.numbers{
	height: 42px;
    width: 120px;
    float: left;
    display: inline-block;
    margin: 20px 0px;
    padding: 10px 20px;
    border: 1px solid #2d598066;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    font-size: 18px;
}
select.operations{
    width: 66px;
    height: 64px;
    float: left;
    margin: 20px 5px;
    padding:5px 0 0 10px;
    background-color: #a8d8ea;
    border: 1px solid #1ca7a2;
    font-size: 36px;
    color: #fff;
}
input.submit_form {
	height: 62px;
    width: 400px;
    display: inline-block;
    padding-top: 5px;
    background-color: #aa96da;
    border: 1px solid #aa96da;
    border-radius: 4px;
    font-size: 17px;
    font-weight: 600;
    text-transform: uppercase;
    color: #ffffff;
  
}
div.answer-text, div.error-text{
	margin-top: 50px;
	padding-left: 65px;
    font-size: 28px;
}
div.answer-text{
	color: #2e2e2f;
}
div.error-text{
	color:#FF69B4;
}
</style>
		<form action="reg.php"><input class="submit_form" type="submit" name="submit" value="Регестрация"> 
		</form>
	<form action="html.php">	<input class="submit_form" type="submit" name="submit" value="авторизация"> 
	</form>
	
</body>
</html>

