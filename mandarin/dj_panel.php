 <? session_start();
            include("software/bd.php");
 if($_SESSION['log']){include ('top2.php');
 ?>
 <div id="content">
        <div class="dj_timetable">
        <span class="nameTable">Рассписание моих эфиров <a class="exit" href="exit.php"></a></span>
        <div class="dj_timetable_content" id="dj_timetable_content">
<table class="mainTable">
							<thead>
								<tr>
									<td class="placeWizard">Дата/Время</td>
									<td class="nameWizard">За пультом</td>
									<td class="gradeWizard">Программа</td>
								</tr>
							</thead>
							<tbody>
							<?  
							       $timetable_data=mysql_query("SELECT * FROM `timetable` WHERE `active`='1' and `dj`='".$_SESSION['id']."' ORDER BY `time` ASC");
           while($timetable = mysql_fetch_array($timetable_data)){
         $programs_data=mysql_query("SELECT * FROM `programs` WHERE `id`='".$timetable['prog']."'");
            $programs = mysql_fetch_array($programs_data);
            $date = $timetable["time"];
$d1 = strtotime($date); // переводит из строки в дату
$date2 = date("d.m.Y H:i", $d1); // переводит в новый формат

        echo'
                <tr>
									<td>'.$date2.'</td>
									<td>'.$_SESSION['name'].'</td>
									<td class="prog_table">'.$programs["name_prog"].'<form method="post" action="" class="del" id="del_timetable_'.$timetable["id"].'"><input type="hidden" name="id_post" value="'.$timetable["id"].'"><div class="delete1" data-title="Удалить" onclick="Ajax_del_timetable(\'/mandarin/software/del_timetable.php\', \'del_timetable_'.$timetable["id"].'\')"></div></form></td>
								</tr>
								';}
					 $timetable_data=mysql_query("SELECT * FROM `timetable` WHERE `active`='1' and `dj`='".$_SESSION['id']."' ORDER BY `time` ASC");
           $timetable = mysql_fetch_array($timetable_data);
								if($timetable==array()){
								echo'
								<tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
								</tr>';
								}
								?>
							</tbody>
						</table>
</div>
        </div><!--End dj_timetable-->
        
        
        <div class="dj_order">
        <span class="nameTable">Стол заказов<div id="orderActive"><div class="off">off</div><?
        								$order_conf_data=mysql_query("SELECT * FROM `order_conf` WHERE `conf`='off_on'");
           $order_conf = mysql_fetch_array($order_conf_data);
        if($order_conf["active"]==1){
        echo'<form method="post" action="" name="off_on" id="off_on"><div class="plus" data-title="закрыть стол" onclick="Ajax_off_on(\'/mandarin/software/off_on.php\', \'off_on\')"></div></form>';
        }
        else{echo'<form method="post" action="" name="off_on" id="off_on"><div class="minus" data-title="открыть стол" onclick="Ajax_off_on(\'/mandarin/software/off_on.php\', \'off_on\')"></div></form>';}?>
        <div class="on">on</div></div></span>
        <div class="dj_order_content" id="dj_order_content">
        
        <table class="order_table">
							<thead>
                <tr>
									<td class="time_order">Время</td>
									<td class="name_order">Имя</td>
									<td class="music_order">Композиция</td>
									<td class="comm_order">Комментарий</td>
									<td class="action_order">Действие</td>
								</tr>
							</thead>
							<tbody>
								
        <? 
        $order_data=mysql_query("SELECT * FROM `order` WHERE `active`='1' ORDER BY `id` ASC");
        while($order = mysql_fetch_array($order_data)){
          echo'<tr><td>'.$order["time"].'</td>
									<td>'.$order["name"];
									if($order["anonym"]==1){echo'<p class="anonym">Анонимно</p>';}
									echo'</td>
									<td>'.$order["song"].'</td>
									<td>';
									if($order["in_ether"]==1 and $order["in_dj"]==1){echo'<p class="note d"> DJ</p><p class="note f">Эфир</p>';}
									elseif($order["in_ether"]==1){echo'<p class="note">Эфир</p>';}
									elseif($order["in_dj"]==1){echo'<p class="note"> DJ</p>';}
									echo''.$order["comm"].'</td>
									<td><form method="post" action="" class="action" id="check_'.$order["id"].'">
									<input type="hidden" name="id_post" value="'.$order["id"].'">
									<div class="check" data-title="Обработано" onclick="Ajax_check(\'/mandarin/software/check.php\', \'check_'.$order["id"].'\')"></div></form>						
                  <form method="post" action="" class="action" id="check_'.$order["id"].'">
                  <div class="delete" data-title="Отказать" onclick="Ajax_delete(\'/mandarin/software/delete.php\', \'check_'.$order["id"].'\')"></div></form>
                  </td></tr>
         '; }
           $order_data=mysql_query("SELECT * FROM `order` WHERE `active`='1' ORDER BY `id` ASC");
           $order = mysql_fetch_array($order_data);
								if($order==array()){
								echo'
								<tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
								</tr>';
								}
	?>	
							</tbody>
						</table></div>
            </div><!--End dj_order -->
            
           <div class="add_timetable">
        <span class="nameTable">Добавить эфир в расписание</span>
       <div class="add_timetable_content">
       <div class="form_order">
                 <form method="post" action='' id='add_timemable' name="order" class="add_timetable_form">
                        <p>
                        <input type="text" name="date" placeholder="ДД.ММ.ГГГГ" />
                        <select name="hour_timetable">
                        <?$i=0;
                        while($i<=9){
                        echo'<option value="0'.$i.'">0'.$i.'</option>';
                        $i++;}
                        $i=10;
                        while($i<=24){
                        echo'<option value="'.$i.'">'.$i.'</option>';
                        $i++;} ?>
                            </select>
                            <select name="minutes_timetable">
                            <option value="00">00</option>
                            <option value="15">15</option>
                            <option value="30">30</option>
                            <option value="45">45</option>
                            </select>                        
                            Программа:
                            <select name="name_timetable">
                            <?         $programs_data=mysql_query("SELECT * FROM `programs` WHERE `dj`='".$_SESSION['id']."' and `active`='1' or `dj`='0' and `active`='1' ");
            while($programs = mysql_fetch_array($programs_data)){
            echo'<option value="'.$programs["id"].'">'.$programs["name_prog"].'</option>';
            }
?>
                            </select></p>
                         <input type="button" class="submit" onclick="Ajax_timetable('/mandarin/software/add_timetable.php', 'add_timemable')" value="Отправить">
                 </div>
            </div><!--End add_timetable -->
            
            
    </div><!--End content -->
<? }else{  include ('top3.php');?><div id="content">
        <div class="auth1">
        <span class="nameTable"><?$name?>DJ Вход</span>
        <div class="auth">
<form method="POST" action="login.php">
							<input type="text" name="name" placeholder="Логин"></input>
							<input type="password" name="pass" placeholder="Пароль"></input>
							<button name="butt">Войти</button>
						</form>
</div>
        </div><!--End astaff-->
        
    </div><!--End astaff -->
<?}include ('bottom.php');?>