<?
session_start();
include("bd.php");
if (isset($_POST["id_post"])) { 

$id = $_POST['id_post']; //Р—Р°РіСЂСѓР¶Р°РµРј Р°Р№РґРё Р·Р°РїРёСЃРё СЃ С„РѕСЂРјС‹

mysql_query("update `order` set `active`='0', `action`='+' where `id`='$id'");

echo"Р—Р°РєР°Р· РѕР±СЂР°Р±РѕС‚Р°РЅ!";

}
?>