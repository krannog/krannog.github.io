<?
session_start();
include("bd.php");

if (isset($_POST["id_post"])) { 

$id = $_POST['id_post']; //Загружаем айди записи с формы

mysql_query("update `order` set `active`='0', `action`='-' where `id`='$id'");

echo"Заказ удален!";
}

?>