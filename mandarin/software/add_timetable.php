<?
session_start();
include("bd.php");



if (isset($_POST["date"])) { 

$date = $_POST['date']; //Р—Р°РіСЂСѓР¶Р°РµРј РґР°С‚Сѓ СЃ С„РѕСЂРјС‹

$hour = $_POST['hour_timetable']; //Р—Р°РіСЂСѓР¶Р°РµРј С‡Р°СЃС‹ СЃ С„РѕСЂРјС‹

$minutes = $_POST['minutes_timetable']; //Р—Р°РіСЂСѓР¶Р°РµРј РјРёРЅСѓС‚С‹ СЃ С„РѕСЂРјС‹

$id_prog = $_POST['name_timetable'];  //Р—Р°РіСЂСѓР¶Р°РµРј id РїСЂРѕРіСЂР°РјРјС‹

$dj=$_SESSION['id']; //Р—Р°РіСЂСѓР¶Р°РµРј id dj

$date_new = strtotime($date); // РїРµСЂРµРІРѕРґРёС‚ РёР· СЃС‚СЂРѕРєРё РІ РґР°С‚Сѓ
$date_fin1 = date("Y-m-d", $date_new); // РїРµСЂРµРІРѕРґРёС‚ РІ РЅРѕРІС‹Р№ С„РѕСЂРјР°С‚
$date_sql = "$date_fin1 $hour:$minutes:00";


mysql_query("INSERT INTO `timetable` (`time`, `dj`, `prog`) VALUES ('$date_sql', '$dj', '$id_prog')");

echo"Р­С„РёСЂ РґРѕР±Р°РІР»РµРЅ РІ СЂР°СЃРїРёСЃР°РЅРёРµ!";
}

?>