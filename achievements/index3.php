<html><head>
<title>Достижения Краннога</title>
</head>
<body style="color:#1f063f;background-image:url(http://s019.radikal.ru/i617/1205/61/51c97986fdc0.png);"> 
<!--Верхнее меню-->
<table width=100% height=50 border=2 bordercolor=#004000 cellpadding=0 cellspacing=0>
  <td align=center valign=middle height=43><a href=index3.php><img src="pics/title.png" title="Медали Краннога!" width=550 border=0></a></td>
</table>

<?
$k=unserialize(file_get_contents("arr_niki"));
$f=unserialize(file_get_contents("arr_ach"));
?>

<table width=100% border=2 bordercolor=#004000 cellpadding=10>
<tr>
<td valign=top  align=left width=20%>
<?
ksort($k);
echo "<b>ученики:</b><Br>";
foreach($k as $i => $v){ if($v["ur2"]=="школа") echo "<a href=\"index3.php?nik=".urlencode($i)."\">".$i."</a><br>"; }
echo "<br>";
echo "<b>студенты:</b><br>";
foreach($k as $i => $v){ if($v["ur2"]=="вуз") echo "<a href=\"index3.php?nik=".urlencode($i)."\">".$i."</a><br>"; }
if(empty($_GET['nik'])) exit(); //Проверяем введен ли ник
$nik=$_GET['nik'];
if(empty($k[$nik])) exit("Введенного ника не существует!"); //Проверяем есть ли в базе введенный ник
?>
</td>

<td width=60% valign=top>
<?
echo "<center><h3>".$nik."</h3>";
echo "<table border=0 cellpadding=5>";
foreach($f as $i => $v)
{
 if($k[$nik][$i]){ $st="выполнено<br>Получена ".$k[$nik][dc_.$i]; $pic=$v["pic"]; }else{ $st="не выполнено"; $pic="pics/none.png"; }
 if (($v["ur"]==$k[$nik]["ur2"] or $v["ur"]=="общая") and ($v["usl"]=="нет" or $k[$nik][$v["usl"]]==true))
 { echo "<tr><td><center><img src=\"".$pic."\"></center></td><td>Название награды: ".$i."<br>Тип награды: ".$v["type"]."<br>Способ получения: ".$v["sposob"]."<br>Статус: ".$st."</td></tr>"; }
}
?>
</center></table>
</td>
<!-- статистика -->
<td width=20% valign=top>
<b>Получено медалей:</b><br>
<?
$T = array("бронзовая", "серебряная", "золотая", "алмазная", "волшебная");
$R = array("бронзовых", "серебряных", "золотых", "алмазных", "волшебных");
foreach ($T as $i => $v)
{
$n=0;
$m=0;
foreach ($f as $i2 => $v2)
{
if (($v2["type"] == $v) and ($v2["ur"] == $k[$nik]["ur2"] or $v2["ur"] == "общая") and ($v2["usl"]=="нет" or $k[$nik][$v2["usl"]]==true))
{$n=$n+1;
if ($k[$nik][$i2] == true)
{$m=$m+1;}
}
}
echo $R[$i].": ".$m." из ".$n."<br>";
$N=$N+$n; $M=$M+$m;
}
echo "<b>Всего: ".$M." из ".$N."</b><br>";
?>
</td>
</tr>
</table></body></html>