<html><head>
<title>���������� ��������</title>
</head>
<body style="color:#1f063f;background-image:url(http://s019.radikal.ru/i617/1205/61/51c97986fdc0.png);"> 
<!--������� ����-->
<table width=100% height=50 border=2 bordercolor=#004000 cellpadding=0 cellspacing=0>
  <td align=center valign=middle height=43><a href=index3.php><img src="pics/title.png" title="������ ��������!" width=550 border=0></a></td>
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
echo "<b>�������:</b><Br>";
foreach($k as $i => $v){ if($v["ur2"]=="�����") echo "<a href=\"index3.php?nik=".urlencode($i)."\">".$i."</a><br>"; }
echo "<br>";
echo "<b>��������:</b><br>";
foreach($k as $i => $v){ if($v["ur2"]=="���") echo "<a href=\"index3.php?nik=".urlencode($i)."\">".$i."</a><br>"; }
if(empty($_GET['nik'])) exit(); //��������� ������ �� ���
$nik=$_GET['nik'];
if(empty($k[$nik])) exit("���������� ���� �� ����������!"); //��������� ���� �� � ���� ��������� ���
?>
</td>

<td width=60% valign=top>
<?
echo "<center><h3>".$nik."</h3>";
echo "<table border=0 cellpadding=5>";
foreach($f as $i => $v)
{
 if($k[$nik][$i]){ $st="���������<br>�������� ".$k[$nik][dc_.$i]; $pic=$v["pic"]; }else{ $st="�� ���������"; $pic="pics/none.png"; }
 if (($v["ur"]==$k[$nik]["ur2"] or $v["ur"]=="�����") and ($v["usl"]=="���" or $k[$nik][$v["usl"]]==true))
 { echo "<tr><td><center><img src=\"".$pic."\"></center></td><td>�������� �������: ".$i."<br>��� �������: ".$v["type"]."<br>������ ���������: ".$v["sposob"]."<br>������: ".$st."</td></tr>"; }
}
?>
</center></table>
</td>
<!-- ���������� -->
<td width=20% valign=top>
<b>�������� �������:</b><br>
<?
$T = array("���������", "����������", "�������", "��������", "���������");
$R = array("���������", "����������", "�������", "��������", "���������");
foreach ($T as $i => $v)
{
$n=0;
$m=0;
foreach ($f as $i2 => $v2)
{
if (($v2["type"] == $v) and ($v2["ur"] == $k[$nik]["ur2"] or $v2["ur"] == "�����") and ($v2["usl"]=="���" or $k[$nik][$v2["usl"]]==true))
{$n=$n+1;
if ($k[$nik][$i2] == true)
{$m=$m+1;}
}
}
echo $R[$i].": ".$m." �� ".$n."<br>";
$N=$N+$n; $M=$M+$m;
}
echo "<b>�����: ".$M." �� ".$N."</b><br>";
?>
</td>
</tr>
</table></body></html>