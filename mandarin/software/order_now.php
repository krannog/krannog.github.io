 <? session_start();
 include("bd.php");?>
 <table class="order_table">
							<thead>
                <tr>
									<td class="time_order">Р’СЂРµРјСЏ</td>
									<td class="name_order">РРјСЏ</td>
									<td class="music_order">РљРѕРјРїРѕР·РёС†РёСЏ</td>
									<td class="comm_order">РљРѕРјРјРµРЅС‚Р°СЂРёР№</td>
									<td class="action_order">Р”РµР№СЃС‚РІРёРµ</td>
								</tr>
							</thead>
							<tbody>
								
        <? 
        $order_data=mysql_query("SELECT * FROM `order` WHERE `active`='1' ORDER BY `id` ASC");
        while($order = mysql_fetch_array($order_data)){
          echo'<tr><td>'.$order["time"].'</td>
									<td>'.$order["name"];
									if($order["anonym"]==1){echo'<p class="anonym">РђРЅРѕРЅРёРјРЅРѕ</p>';}
									echo'</td>
									<td>'.$order["song"].'</td>
									<td>';
									if($order["in_ether"]==1 and $order["in_dj"]==1){echo'<p class="note d"> DJ</p><p class="note f">Р­С„РёСЂ</p>';}
									elseif($order["in_ether"]==1){echo'<p class="note">Р­С„РёСЂ</p>';}
									elseif($order["in_dj"]==1){echo'<p class="note"> DJ</p>';}
									echo''.$order["comm"].'</td>
									<td><form method="post" action="" class="action" id="check_'.$order["id"].'">
									<input type="hidden" name="id_post" value="'.$order["id"].'">
									<div class="check" data-title="РћР±СЂР°Р±РѕС‚Р°РЅРѕ" onclick="Ajax_check(\'/mandarin/software/check.php\', \'check_'.$order["id"].'\')"></div></form>						
                  <form method="post" action="" class="action" id="check_'.$order["id"].'">
                  <div class="delete" data-title="РћС‚РєР°Р·Р°С‚СЊ" onclick="Ajax_delete(\'/mandarin/software/delete.php\', \'check_'.$order["id"].'\')"></div></form>
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