<html><head>
<title>Достижения Краннога</title>
<script language="JavaScript">
<!--
function toggleMenu(currMenu)
{
	thisMenu = document.getElementById(currMenu);
	if (thisMenu.style.display == "block")
		thisMenu.style.display = "none";

	else
		thisMenu.style.display = "block";

}

//-->
</script>
		<script type="text/javascript" src="chrome-extension://nhgcieglcpdegkhamigiokdphfhhnlhh/js/injected.js" charset="utf-8"></script>
		
		<script language="JavaScript" type="text/javascript"
src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
</script>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" href="http://argemona.ru/favicon.ico" type="image/x-icon" />
</head>

<body>
		<div id="wraper">
	<!--------------------Шапка-------------------->

<header>
    <div id="prize_krannog" title="Кубок Музыки получила сладкоголосая Литтлфит!"></div>
	<a href="http://argemona.ru/krannog/" target="new" id="krannog_room" title="Гостиная Краннога" ></a>
	<div id="prize_krannog1" title="Кубок драконбола завоевала команда Лесной Дух во главе с Дольвиче! "></div>
	<a href="http://magomir.ru/k_reciter/krannog/achievements/index-new.php">Достижения Краннога</a>

	<ul class="nav_left">
        <li><a href="http://shelest-krannog.narod2.ru/index.htm" target="_blank"><span>Газета Шелест</span></a></li>
        <li><a href="http://magomir.ru/k_reciter/krannog/achievements/index-new.php" target="_blank"><span>Зал славы</span></a></li>
		<li><a href="http://argemona.ru/krannog/contact.php" target="_blank"><span>Наши контакты</span></a></li>
        <li class="prelast"><a href="http://argemona.ru/krannog/group.php" target="_blank"><span>Кланы</span></a></li>
		<li class="last"><a href="http://quidd.ru/" target="_blank"><span>Квиддич</span></a></li> 
    </ul>
	<ul class="nav_right">
        <li><a href="http://argemona.ru/agora" target="_blank"><span>Газета Агора</span></a></li>
        <li><a href="http://argemona.ru/forums/" target="_blank"><span>Форум Аргемоны</span></a></li>
		<li><a href="http://www.orden-krannog.16mb.com/" target="_blank"><span>Альянс Стражников</span></a></li>                
		<li class="prelast"><a href="http://argemona.ru/library/" target="_blank"><span>Библиотека</span></a></li>
        <li class="last"><a href="http://dragonball.magomir.ru/" target="_blank"><span>Драконбол</span></a></li>
	</ul>
</header>

<?
$k=unserialize(file_get_contents("arr_niki"));
$f=unserialize(file_get_contents("arr_ach"));
?>

<!-- списки -->
<div id="names">
<br>
<a href="javascript:void(0)" onclick="toggleMenu('pupil')" class="tabs"><b>Ученики:</b></a>
<div id="pupil">
<?
ksort($k);
foreach($k as $i => $v){ if($v["ur2"]=="школа") echo "<a href=\"index-new.php?nik=".urlencode($i)."\">".$i."</a><br>"; }
if(empty($_GET['nik'])) exit(); //Проверяем введен ли ник
$nik=$_GET['nik'];
if(empty($k[$nik])) exit("Введенного ника не существует!"); //Проверяем есть ли в базе введенный ник
echo "<br>";
?></div>

<br><a href="javascript:void(0)" onclick="toggleMenu('student')" class="tabs"><b>Студенты:</b></a>
<div id="student">
<?
ksort($k);
foreach($k as $i => $v){ if($v["ur2"]=="вуз") echo "<a href=\"index-new.php?nik=".urlencode($i)."\">".$i."</a><br>"; }
if(empty($_GET['nik'])) exit(); //Проверяем введен ли ник
$nik=$_GET['nik'];
if(empty($k[$nik])) exit("Введенного ника не существует!"); //Проверяем есть ли в базе введенный ник
?>
</div></div>



<!-- контент -->
<content>
<?
echo "<h2>".$nik."</h2>";
echo "<table>";
foreach($f as $i => $v)
{
 if($k[$nik][$i]){ $st="выполнено<br>Получена ".$k[$nik][dc_.$i]; $pic=$v["pic"]; }else{ $st="не выполнено"; $pic="pics/none.png"; }
 if (($v["ur"]==$k[$nik]["ur2"] or $v["ur"]=="общая") and ($v["usl"]=="нет" or $k[$nik][$v["usl"]]==true))
 { echo "<tr><td><center><img src=\"".$pic."\"></center></td><td>Название награды: ".$i."<br>Тип награды: ".$v["type"]."<br>Способ получения: ".$v["sposob"]."<br>Статус: ".$st."</td></tr>"; }
}
?>

</table></content>



<!-- статистика -->
<div id="statistic">
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
</div>

<a href="#" id="Go_Top">
		<img src="go_up.png" alt="Наверх" title="Наверх">
	</a>

<script language="JavaScript" type="text/javascript">
$(function() {
 $.fn.scrollToTop = function() {
  $(this).hide().removeAttr("href");
  if ($(window).scrollTop() >= "250") $(this).fadeIn("slow")
  var scrollDiv = $(this);
  $(window).scroll(function() {
   if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow")
   else $(scrollDiv).fadeIn("slow")
  });
  $(this).click(function() {
   $("html, body").animate({scrollTop: 0}, "slow")
  })
 }
});

$(function() {
 $("#Go_Top").scrollToTop();
});
</script>
</body></html>