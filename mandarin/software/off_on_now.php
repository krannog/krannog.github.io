 <? session_start();
 include("bd.php");?>
<div class="off">off</div><?
        								$order_conf_data=mysql_query("SELECT * FROM `order_conf` WHERE `conf`='off_on'");
           $order_conf = mysql_fetch_array($order_conf_data);
        if($order_conf["active"]==1){
        echo'<form method="post" action="" name="off_on" id="off_on"><div class="plus" data-title="закрыть стол" onclick="Ajax_off_on(\'/mandarin/software/off_on.php\', \'off_on\')"></div></form>';
        }
        else{echo'<form method="post" action="" name="off_on" id="off_on"><div class="minus" data-title="открыть стол" onclick="Ajax_off_on(\'/mandarin/software/off_on.php\', \'off_on\')"></div></form>';}?>
        <div class="on">on</div>
        