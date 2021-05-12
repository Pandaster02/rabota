<!DOCTYPE html>
<html>
<head>
  <title>Тест php</title>
</head>
<body>
<form method='get'>
1) Язык программирования php нашел наиболее широкое применение в?<br>
<input name="answer[0]" type="radio" value="Неверно">Автоматизированном проектировании<br>
<input name="answer[0]" type="radio" value="Верно">Разработке web-приложений<br>
<input name="answer[0]" type="radio" value="Неверно">Создании и управлении базами данных<br>
2) Какое название переменной является некорректным в PHP<br>
<input name="answer[1]" type="radio" value="Неверно">$this<br>
<input name="answer[1]" type="radio" value="Неверно">$_var<br>
<input name="answer[1]" type="radio" value="Верно">$2var<br>
3) Какого оператора сравнения не существует в PHP?<br>
<input name="answer[2]" type="radio" value="Верно">!===<br>
<input name="answer[2]" type="radio" value="Неверно">!==<br>
<input name="answer[2]" type="radio" value="Неверно">!=<br>
4) Что из перечисленного является чувствительным к регистру записи (case-sensitive)?<br>
<input name="answer[3]" type="radio" value="Верно">имена переменных<br>
<input name="answer[3]" type="radio" value="Неверно">имена системных функций<br>
<input name="answer[3]" type="radio" value="Неверно">имена встроенных функций<br>
5) Какой тип переменной существует в PHP?<br>
<input name="answer[4]" type="radio" value="Верно">null<br>
<input name="answer[4]" type="radio" value="Неверно">Указатель<br>
<input name="answer[4]" type="radio" value="Неверно">Trigger<br>
6) Как определить функцию?<br>
<input name="answer[5]" type="radio" value="Верно">function myFunction() { ... }<br>
<input name="answer[5]" type="radio" value="Неверно">public myFunction() { ... }<br>
<input name="answer[5]" type="radio" value="Неверно">function myFunction { ... }<br>
7) Каких типов переменные бывают в PHP?<br>
<input name="answer[6]" type="radio" value="Верно">строки<br>
<input name="answer[6]" type="radio" value="Неверно">битовые маски<br>
<input name="answer[6]" type="radio" value="Неверно">маски числа<br>
8) Перечислите основные типы данных в php?<br>
<input name="answer[7]" type="radio" value="Верно">Boolean, integer, float, string, array, object, resource, NULL<br>
<input name="answer[7]" type="radio" value="Неверно">Boolean, float, logic, text, subject, NULL<br>
<input name="answer[7]" type="radio" value="Неверно">String, boolean, text, massive, logic, NULL<br>
9) В php используется … типизация данных?<br>
<input name="answer[8]" type="radio" value="Верно">Динамическая<br>
<input name="answer[8]" type="radio" value="Неверно">Синтаксическая<br>
<input name="answer[8]" type="radio" value="Неверно">Коммутационная<br>
10)  Каждый php-оператор должен заканчиваться?<br>
<input name="answer[9]" type="radio" value="Верно">Точкой с запятой<br>
<input name="answer[9]" type="radio" value="Неверно">Двоеточием <br>
<input name="answer[9]" type="radio" value="Неверно">Знаки препинания в php не используются<br>
11) Вызов функции из самой себя – это:<br>
<input name="answer[10]" type="radio" value="Верно">Рекурсия<br>
<input name="answer[10]" type="radio" value="Неверно">Регрессия<br>
<input name="answer[10]" type="radio" value="Неверно">Массив<br>
12) Для чего используется ключевое слово global?<br>
<input name="answer[11]" type="radio" value="Верно">Для получения доступа к глобальной переменной, которая находится внутри функции<br>
<input name="answer[11]" type="radio" value="Неверно">Для подключения библиотек из глобального каталога<br>
<input name="answer[11]" type="radio" value="Неверно">Для указания того, что переменная будет многократно использоваться<br>
<input type='submit' name="Submit" value='Завершить'>
</form>
<?php
$k=0;
   if (is_array($_GET['answer'])){
   foreach($_GET['answer'] as $value) 
        {
         if ($value=='Верно') { 
         $k=$k+1;
        }
        echo $value, '<br>'; 
        }
  echo "У вас {$k} правильных ответов", '<br>'; 
      }
?>
</body>
</html>