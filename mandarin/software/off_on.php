<?
session_start();
include("bd.php");


$order_conf_data=mysql_query("SELECT * FROM `order_conf` WHERE `conf`='off_on'");
           $order_conf = mysql_fetch_array($order_conf_data);
if($order_conf["active"]==1){

mysql_query("update `order_conf` set `active`='0' where `conf`='off_on'");
mysql_query("update `order` set `active`='0', `action`='-' where `active`='1'");
echo"Стол заказов закрыт, все непринятые заказы удалены!";
}
else{
mysql_query("update `order_conf` set `active`='1' where `conf`='off_on'");
echo"Стал заказов открыт!";
}

?>