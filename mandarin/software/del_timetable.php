<?
session_start();
include("bd.php");



if (isset($_POST["id_post"])) { 

$id = $_POST['id_post']; //Р—Р°РіСЂСѓР¶Р°РµРј Р°Р№РґРё Р·Р°РїРёСЃРё СЃ С„РѕСЂРјС‹



mysql_query("update `timetable` set `active`='0' where `id`='$id'");

echo"Р­С„РёСЂ СѓРґР°Р»РµРЅ СЃ СЂР°СЃРїРёСЃР°РЅРёСЏ!";
}

?>