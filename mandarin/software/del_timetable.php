<?
session_start();
include("bd.php");



if (isset($_POST["id_post"])) { 

$id = $_POST['id_post']; //Загружаем айди записи с формы



mysql_query("update `timetable` set `active`='0' where `id`='$id'");

echo"Эфир удален с расписания!";
}

?>