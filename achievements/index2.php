<html> <head> <title>Зал Славы</title> </head> <body style="color:#1f063f;background-image:url(http://s019.radikal.ru/i617/1205/61/51c97986fdc0.png);"> 
<?
$k=unserialize(file_get_contents("arr_niki"));
$f=unserialize(file_get_contents("arr_ach"));
?>
<table style="width:100%;"><tr><td><a href="http://argemona.ru/" title="На главную"><img src="http://s59.radikal.ru/i163/1205/60/2c837dc6d233.png"style="width:100px;height:100px;"/> </a>.</td><td><center><a href="http://argemona.ru/krannog/"title="В гостинку"><img src="http://s58.radikal.ru/i159/1205/42/3843098afa88.png"/> </a>.</center></td><td><a href="http://argemona.ru/krannog/forum.php" title="На форум"><img src="http://s019.radikal.ru/i616/1205/4e/f6c7832e827b.png" style="float:right;width:100px;height:100px;"/> </a>.</td></tr><tr><td></td><td><center><img src="http://s019.radikal.ru/i610/1206/07/c7ab4a3dede0.png"/></center></td><td></td></tr>  <tr> <td><center><img src="http://s019.radikal.ru/i608/1206/63/3e40b9188737.png"/> </center></td><td></td><td><center><img src="http://s019.radikal.ru/i633/1206/f7/1d0afe26914a.png"/> </center></td></tr>  
<tr><td style="#6a2a9a;font-size:20px;"><center>
<?
ksort($k);
foreach($k as $i => $v){ if($v["ur2"]=="школа") echo "<a href=\"index2.php?nik=".urlencode($i)."\">".$i."</a><br>"; }
echo "<br>";
?>
</td><td style="#1d3e03;font-size:60px;"><center><table style="width:100%;"><tr><td><center><table style="background-color:#f3ce94;width:100%;-moz-box-shadow:inset 0 0 10px rgba(0,0,0,0.5);-webkit-box-shadow:inset 0 0 10px rgba(0,0,0,0.5);box-shadow:inset 0 0 10px rgba(0,0,0,0.5);border:10px solid #d9aa61;"><center><CAPTION style="#6a2a9a;font-size:30px;"><img src="http://s49.radikal.ru/i123/1206/58/75387e9215e3.png"/><i><b>Cтатиcтика</b></i><img src="http://s019.radikal.ru/i642/1206/31/245f455a3b5c.png"/> </CAPTION></center>
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
<br><b>Получено медалей:</b><br>
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
?></table><img src="http://s019.radikal.ru/i610/1206/63/85f46a151031.png"/> <br/>Архив выпускников</center></td></tr></table></center></td>
<td><center style="#6a2a9a;font-size:20px;">
<?
foreach($k as $i => $v){ if($v["ur2"]=="вуз") echo "<a href=\"index2.php?nik=".urlencode($i)."\">".$i."</a><br>"; }
if(empty($_GET['nik'])) exit(); //Проверяем введен ли ник
$nik=$_GET['nik'];
if(empty($k[$nik])) exit("Введенного ника не существует!"); //Проверяем есть ли в базе введенный ник
?>
</center></td></tr></table> </body> </html>