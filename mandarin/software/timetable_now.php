 <? session_start();
 include("bd.php");?>
<table class="mainTable">
							<thead>
								<tr>
									<td class="placeWizard">Р”Р°С‚Р°/Р’СЂРµРјСЏ</td>
									<td class="nameWizard">Р—Р° РїСѓР»СЊС‚РѕРј</td>
									<td class="gradeWizard">РџСЂРѕРіСЂР°РјРјР°</td>
								</tr>
							</thead>
							<tbody>
							<?         $timetable_data=mysql_query("SELECT * FROM `timetable` WHERE `active`='1' and `dj`='".$_SESSION['id']."' ORDER BY `time` ASC");
           while($timetable = mysql_fetch_array($timetable_data)){
         $programs_data=mysql_query("SELECT * FROM `programs` WHERE `id`='".$timetable['prog']."'");
            $programs = mysql_fetch_array($programs_data);
            $date = $timetable["time"];
$d1 = strtotime($date); // РїРµСЂРµРІРѕРґРёС‚ РёР· СЃС‚СЂРѕРєРё РІ РґР°С‚Сѓ
$date2 = date("d.m.Y H:i", $d1); // РїРµСЂРµРІРѕРґРёС‚ РІ РЅРѕРІС‹Р№ С„РѕСЂРјР°С‚

        echo'
                <tr>
									<td>'.$date2.'</td>
									<td>'.$_SESSION['name'].'</td>
									<td>'.$programs["name_prog"].'<form method="post" action="" id="del_timetable_'.$timetable["id"].'"><input type="hidden" name="id_post" value="'.$timetable["id"].'"><div class="delete1" data-title="РЈРґР°Р»РёС‚СЊ" onclick="Ajax_del_timetable(\'/mandarin/software/del_timetable.php\', \'del_timetable_'.$timetable["id"].'\')"></div></form></td>
								</tr>
								';}
								$timetable_data=mysql_query("SELECT * FROM `timetable` WHERE `active`='1' and `dj`='".$_SESSION['id']."' ORDER BY `time` DESC");
           $timetable = mysql_fetch_array($timetable_data);
								if($timetable==array()){
								echo'
								<tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
								</tr>';
								}?>
							</tbody>
						</table>
