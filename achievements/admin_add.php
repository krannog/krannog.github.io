<?
$AU["USER"]="achiev_krannog"; //заданное имя
$AU["PASS"]="yk1qrrf"; //заданный пароль
if(!isset($_SERVER["PHP_AUTH_USER"]) and !isset($_SERVER["HTTP_AUTHORIZATION"]))
{
 header("WWW-Authenticate: Basic realm=\"\"");
 header("HTTP/1.0 401 Unauthorized");
 echo "Не узнаем Вас в гриме.";
 exit;
}else{
 if(isset($_SERVER["HTTP_AUTHORIZATION"])){ list($_SERVER["PHP_AUTH_USER"],$_SERVER
["PHP_AUTH_PW"])=explode(':', base64_decode(substr($_SERVER["HTTP_AUTHORIZATION"], 6))); }
 if(($_SERVER["PHP_AUTH_USER"]!=$AU["USER"])or($_SERVER["PHP_AUTH_PW"]!=$AU["PASS"]))
 {
  header("WWW-Authenticate: Basic realm=\"\"");
  header("HTTP/1.0 401 Unauthorized");
  echo "Не узнаем Вас в гриме.";
  exit;
 }
}
?>
<html><head>
<title>Достижения - редактор</title>
</head>
<body><table width=100% border=0 cellpadding=10><tr><td width=60% valign=top>
<b>Добавление награды:</b>
<br><br>
<form action="admin_add.php" method=post>
<table>
<tr><td>Название награды:</td><td><input type=text name="nazv" size=50></td></tr>
<tr><td>Уровень обучения:</td><td><select name="ur">
<option>общая
<option>школа
<option>вуз
</select></td></tr>
<tr><td>Тип награды:</td><td><select name="type">
<option>золотая
<option>серебряная
<option>бронзовая
<option>алмазная
<option>волшебная
</select></td></tr>
<tr><td>Категория:</td><td><select name="cat">
<option>учебная
<option>спортивная
<option>общешкольная
<option>внутридомовая
<option>магомир
<option>прочее
</select></td></tr>
<tr><td>Способ получения:</td><td><textarea name="sposob" cols=50 rows=3 wrap=virtual></textarea></td></tr>
<tr><td>Условие доступа к награде -<br>получение другой награды<br>(введите название): </td><td><input type=text name="usl" value="нет" size=50></td></tr>
<tr><td>Адрес картинки:</td><td><input type=text name="pic" size=50></td></tr>
<tr><td colspan=2 align=center><input type=submit value="добавить награду"></td></tr>
</table>
</form>
<br><br>

<b>Добавление нового ученика:</b>
<br><br>
<form action="admin_add.php" method=post>
<table>
<tr><td>Ник ученика:</td><td><input type=text name="newnik" size=50></td></tr>
<tr><td>Уровень обучения:</td><td><select name="ur2">
<option>школа
<option>вуз
</select></td></tr>
<tr><td colspan=2 align=center><input type=submit value="добавить ник"></td></tr>
</table>
</form>

<br></td><td width=40% valign=top>
<b>Безвозвратное удаление ника:</b>
<br><br>
<form action="admin_add.php" method=post>
<table>
<tr><td>Удаляемый ник:</td><td><input type=text name="delnik" size=50></td></tr>
<tr><td colspan=2 align=center><input type=submit value="точно удаляем?"></td></tr>
</table></form>
<br>
<b>Безвозвратное удаление достижения:</b><br>
(при ошибке при первоначальном вводе)
<br><br>
<form action="admin_add.php" method=post>
<table>
<tr><td>Удаляемое достижение:</td><td><input type=text name="delach" size=50></td></tr>
<tr><td colspan=2 align=center><input type=submit value="точно удаляем?"></td></tr>
</table>
</form>
</td></tr></table>
<?
if(isset($_POST['nazv']))
{
// добавляем новую награду по данным из формы
 $arr=unserialize(file_get_contents("arr_ach"));
 $arr[$_POST['nazv']]=array("ur"=>$_POST['ur'], "type"=>$_POST['type'], "sposob"=>$_POST['sposob'], "cat"=>$_POST['cat'], "active"=>true, "pic"=>$_POST['pic'], "usl"=>$_POST['usl']);
// и сохраняем в файл
 $f=fopen("arr_ach","w");
 fputs($f,serialize($arr));
 fclose($f);

// добавляем новую награду к каждому из ников и сохраняем
 $arr2=unserialize(file_get_contents("arr_niki")); 
 $dob=array($_POST['nazv']=>false);
 foreach(@$arr2 as $i=>$v)
 {
  $arr2[$i]=array_merge($arr2[$i], $dob);
 }
 $f=fopen("arr_niki","w");
 fputs($f,serialize($arr2));
 fclose($f);
 echo "Задание добавлено!";
}

if(isset($_POST['newnik']))
{
// добавляем новый ник по данным из формы
 $arr=unserialize(file_get_contents("arr_ach"));
 $arr2=unserialize(file_get_contents("arr_niki")); 
 $newnik=$_POST['newnik'];
 $arr2[$newnik]=array("ur2"=>$_POST['ur2']);
 foreach($arr as $i=>$v)
 {
  $arr2[$newnik]=array_merge($arr2[$newnik], array($i=>false));
 }
// и сохраняем в файл
 $f=fopen("arr_niki","w");
 fputs($f,serialize($arr2));
 fclose($f);
 echo "ник <b>".$newnik."</b> добавлен!";
}
// Удаление ника
if(isset($_POST['delnik']))
{
 $arr2=unserialize(file_get_contents("arr_niki")); 
 $delnik=$_POST['delnik'];
 unset($arr2[$delnik]);
 $f=fopen("arr_niki","w");
 fputs($f,serialize($arr2));
 fclose($f);
 echo "ник <b>".$delnik."</b> удален.";
}
// Удаление достижения
if(isset($_POST['delach']))
{
 $arr2=unserialize(file_get_contents("arr_niki")); 
 $arr=unserialize(file_get_contents("arr_ach"));
 $delach=$_POST['delach'];
  foreach($arr2 as $i=>$v)
 {
 unset($arr2[$i][$delach]);
 }
 unset($arr[$delach]);
 $f=fopen("arr_niki","w");
 fputs($f,serialize($arr2));
 fclose($f);
 $f=fopen("arr_ach","w");
 fputs($f,serialize($arr));
 fclose($f);
 echo "достижение <b>".$delach."</b> удалено.";
}
?>
</body></html>