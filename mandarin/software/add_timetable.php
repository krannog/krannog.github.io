<?
session_start();
include("bd.php");



if (isset($_POST["date"])) { 

$date = $_POST['date']; //Загружаем дату с формы

$hour = $_POST['hour_timetable']; //Загружаем часы с формы

$minutes = $_POST['minutes_timetable']; //Загружаем минуты с формы

$id_prog = $_POST['name_timetable'];  //Загружаем id программы

$dj=$_SESSION['id']; //Загружаем id dj

$date_new = strtotime($date); // переводит из строки в дату
$date_fin1 = date("Y-m-d", $date_new); // переводит в новый формат
$date_sql = "$date_fin1 $hour:$minutes:00";


mysql_query("INSERT INTO `timetable` (`time`, `dj`, `prog`) VALUES ('$date_sql', '$dj', '$id_prog')");

echo"Эфир добавлен в расписание!";
}

?>