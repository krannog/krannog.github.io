 <? session_start();
 include("bd.php");?>
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
         '; } $order_data=mysql_query("SELECT * FROM `order` WHERE `active`='1' ORDER BY `id` ASC");
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
						</table>