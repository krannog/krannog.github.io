<?
$date = "07.05.2015 19:15:00";
$d1 = strtotime($date); // переводит из строки в дату
$date2 = date("Y-m-d H:i:s", $d1); // переводит в новый формат
echo"$date <br> $date2";
?>