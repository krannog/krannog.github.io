<?
$db_name="u339140382_radio";
$host="mysql.hostinger.com.ua";
$user="u339140382_meon";
$pass="meongans";
$link=mysql_connect($host,$user,$pass) or
die(mysql_errno($link).mysql_error($link));
$db=mysql_select_db($db_name,$link) or
die(mysql_errno($link).mysql_error($link));
mysql_query('SET NAMES utf8');
?>