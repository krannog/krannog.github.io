<?
session_start();
date_default_timezone_set('Europe/Kiev');
include("bd.php");



if (isset($_POST["name"])) { 

$name = $_POST['name']; 

$an = $_POST['an']; 

$music = $_POST['music']; 

$comm = $_POST['comm']; 

$k1 = $_POST['k1']; 

$k2 = $_POST['k2']; 

$time = date("H:i:s");

mysql_query("INSERT INTO `order` (`name`, `song`, `comm`, `anonym`, `in_ether`, `in_dj`, `time`) VALUES ('$name', '$music', '$comm', '$an', '$k2', '$k1', '$time')");

echo"Ваш заказ отправлен!";
}
?>