<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
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
		<!--script type="text/javascript" src="chrome-extension://nhgcieglcpdegkhamigiokdphfhhnlhh/js/injected.js" charset="utf-8"></script-->
		
		<script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="http://krannog.besaba.com/achievements/style.css">
		<link rel="icon" href="http://argemona.ru/favicon.ico" type="image/x-icon" />
	</head>
	<body>
		<div id="wraper">
		<!--------------------Шапка-------------------->
		<header>
			<div id="prize_krannog1" title="Кубок Музыки получила сладкоголосая Литтлфит!"></div>
			<div id="prize_krannog2" title="Кубок Школы за 5 триместр заслужили все вместе! ^_^"></div>
			<div id="prize_krannog3" title="Кубок ЕФИА команде Фиолетовый Настрой во главе с Литтлфит!"></div>
			<a href="http://argemona.ru/krannog/" target="new" id="krannog_room" title="Гостиная Краннога" ></a>
			<div id="prize_krannog" title="Кубок драконбола завоевала команда Лесной Дух во главе с Дольвиче! "></div>
			<a href="http://magomir.ru/k_reciter/krannog/achievements/index.php">Достижения Краннога</a>

			<ul class="nav_left">
				<li><a href="http://shelest-krannog.narod2.ru/index.htm" target="_blank"><span>Газета Шелест</span></a></li>
				<li><a href="http://magomir.ru/k_reciter/krannog/achievements/index.php" target="_blank"><span>Зал славы</span></a></li>
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
		<div id="all_blocks">
		<?
		$k=unserialize(file_get_contents("arr_niki"));
		$f=unserialize(file_get_contents("arr_ach"));
		$nik=$_GET['nik'];
		?>
		<?php if($_GET['nik']){?>
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
		<?php }?>

		<!--Верхнее меню-->
		<div id="names" <?php if(!$_GET['nik']){?>class="index_page"<?php }?>>
			<?
			ksort($k);?>
			<div class="little">
				<b>ученики:</b>
				<br>
				<?php foreach($k as $i => $v){ if($v["ur2"]=="школа") echo "<a href=\"index.php?nik=".urlencode($i)."\">".$i."</a><br>"; }?>
			</div>
			<div class="big">
				<b>студенты:</b>
				<br>
				<?php foreach($k as $i => $v){ if($v["ur2"]=="вуз") echo "<a href=\"index.php?nik=".urlencode($i)."\">".$i."</a><br>"; }?>
			</div>
			<?php 
			if(empty($_GET['nik'])) exit(); //Проверяем введен ли ник
			$nik=$_GET['nik'];
			if(empty($k[$nik])) exit("Введенного ника не существует!"); //Проверяем есть ли в базе введенный ник
			?>
		</div>
		<content>
			<h2><?php echo $nik;?></h2>
			<table border=0 cellpadding=5>
			<?
			foreach($f as $i => $v)
			{
			 if($k[$nik][$i]){
				$st="выполнено<br>Получена ".$k[$nik][dc_.$i]; $pic=strtr($v["pic"],array('http://natan-ljuis.narod.ru/krannog/medals/'=>'http://magomir.ru/k_reciter/krannog/achievements/awards/','http://kikot.besaba.com/images/'=>'http://magomir.ru/k_reciter/krannog/achievements/awards/')); 
			 }else{
				$st="не выполнено"; $pic="pics/none.png"; 
			 }
			 if (($v["ur"]==$k[$nik]["ur2"] or $v["ur"]=="общая") and ($v["usl"]=="нет" or $k[$nik][$v["usl"]]==true))
			 {?>
				<tr>
					<td><center><img src="<?php echo $pic;?>"></center></td>
					<td>
						Название награды: <?php echo $i;?><br>
						Тип награды: <?php echo $v["type"];?><br>
						Способ получения: <?php echo $v["sposob"];?><br>
						Статус: <?php echo $st;?>
					</td>
				</tr>
			 <?php }
			}
			?>
			</table>
		</content>
		</div>
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