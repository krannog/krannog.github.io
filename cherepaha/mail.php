<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['kurs'])) {$kurs = $_POST['kurs'];}
if (isset($_POST['predmet'])) {$predmet = $_POST['predmet'];}
if (isset($_POST['galka'])) {$galka = $_POST['galka'];}
if (isset($_POST['skrin'])) {$skrin = $_POST['skrin'];}
if (empty($name))
{
echo "<b>Так какое же все-таки имя?!<p>";
echo "<a href=anketa.html>Вернись и попробуй снова...</a>";
exit;
} 
if (empty($email))
{
echo "<b>А как с тобой связаться?!<p>";
echo "<a href=anketa.html>Вернись и попробуй снова...</a>";
exit;
}
if (empty($kurs))
{
echo "<b>Каков твой уровень магических знаний?<p>";
echo "<a href=anketa.html>Вернись и попробуй снова...</a>";
exit;
}
if (empty($predmet))
{
echo "<b>А как же любимый предмет?<p>";
echo "<a href=anketa.html>Вернись и попробуй снова...</a>";
exit;
}
$to = "reindeer.loki@gmail.com"; /*УКАЗАТЬ СВОЙ АДРЕС!*/
$headers = "Content-type: text/plain; charset = windows-1251";
$subject = "Заявка на вступление";
$message = "Имя пославшего: $name \nСова пославшего: $email \nКурс обучения пославшего: $kurs\nЛюбимый предмет пославшего: $predmet \n";
$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')
{
echo "<b>Черепаха уползла с вашей заявкой!!!<p>";
}
else 
{
echo "<p><b>Черепаха обленилась, попробуйте заполнить <a href=anketa.html>новый свиток</a>";
}
?>