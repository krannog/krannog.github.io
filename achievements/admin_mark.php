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
<title>Достижения Краннога - статус выполнения заданий</title>
</head>
<body>
<?
$arr2=unserialize(file_get_contents("arr_niki"));
$arr=unserialize(file_get_contents("arr_ach"));
?>
<table width=100% border=1 cellpadding=10>
<tr>
<td valign=top  align=left width=20%>
<?
ksort($arr2);
echo "<b>ученики:</b><br>";
foreach($arr2 as $i => $v){ if($v["ur2"]=="школа") echo "<a href=\"admin_mark.php?nik=".urlencode($i)."\">".$i."</a><br>"; }
echo "<br>";
echo "<b>студенты:</b><br>";
foreach($arr2 as $i => $v){ if($v["ur2"]=="вуз") echo "<a href=\"admin_mark.php?nik=".urlencode($i)."\">".$i."</a><br>"; }
if(empty($_GET['nik'])) exit(); //Проверяем введен ли ник
$nik=$_GET['nik'];
if(empty($arr2[$nik])) exit("Введенного ника не существует!"); //Проверяем есть ли в базе введенный ник
if(isset($_POST['done']))
{
 $arr2[$nik][$_POST['done']]=true;
// текущий триместр указан здесь
 $arr2[$nik]["dc_".$_POST['done']]=date("d.m.y")." (II) ".$_POST['comment'];
 $k=fopen("arr_niki","w");
 fputs($k,serialize($arr2));
 fclose($k);
}
if(isset($_POST['notdone']))
{
 $arr2[$nik][$_POST['notdone']]=false;
 $arr2[$nik]["dc_".$_POST['notdone']]=0;
 $k=fopen("arr_niki","w");
 fputs($k,serialize($arr2));
 fclose($k);
}
?>
</td>

<td width=80% valign=top>
<?
echo "<h3>".$nik."</h3><table border=1 cellpadding=5>";
foreach($arr as $i => $v)
{
 if($arr2[$nik][$i])
 {
  $st="выполнено";
  $pic=$v["pic"];
  $pere="Получена ".$arr2[$nik][dc_.$i].'<br><form action="admin_mark.php?nik='.urlencode($nik).'" method=post><input type=hidden name="notdone" value="'.$i.'"><input type=submit value="отменить"></form>';
 }else{
  $st="не выполнено";
  $pic="pics/none.png";
  $pere='<form action="admin_mark.php?nik='.urlencode($nik).'" method=post>Получена (<u>за</u> что): <input type=text name="comment" size=70><input type=hidden name="done" value="'.$i.'"><br><input type=submit value="выполнено"></form>';
  }
 if (($v["ur"]==$arr2[$nik]["ur2"] or $v["ur"]=="общая") and ($v["usl"]=="нет" or $arr2[$nik][$v["usl"]]==true))
 {
  echo "<tr><td><img height=100 src=\"".$pic."\"></td><td>Название награды: ".$i."<br>Способ получения: ".$v["sposob"]."<br>Статус: ".$st."<br>".$pere."</td></tr>";
 }
}
?>
</table>
</td>
</tr>
</table>
</body>
</html>