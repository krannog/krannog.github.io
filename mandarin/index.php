 <? session_start();
           include("software/bd.php");
 include ('top.php');
 ?>

 <div id="content">
        <div class="listen">
        <span class="nameTable">Слушать радио</span>
        <div class="listen_content">
<div class="radio">
<object width="200" height="60">
<param name="movie" value="http://ucozon.ru/SCRIN7/2/pleer/ffmp3-config.swf" />
<param name="flashvars" value="url=http://95.211.148.10:8046/stream&lang=ru&codec=mp3&volume=100&autoplay=false&traking=true&jsevents=false&buffering=5&skin=http://ucozon.ru/SCRIN7/2/pleer/mcclean/ffmp3-mcclean.xml&title=Mandarin%20FM" />
<param name="wmode" value="transparent" />
<param name="allowscriptaccess" value="always" />
<param name="scale" value="noscale" />
<embed src="http://ucozon.ru/SCRIN7/2/pleer/ffmp3-config.swf" flashvars="url=http://95.211.148.10:8046/stream&lang=ru&codec=mp3&volume=100&autoplay=true&traking=true&jsevents=false&buffering=5&skin=http://ucozon.ru/SCRIN7/2/pleer/mcclean/ffmp3-mcclean.xml&title=Mandarin%20FM" width="180" scale="noscale" height="60" wmode="transparent" allowscriptaccess="always" type="application/x-shockwave-flash" />
</object>
<div id="cc_tunein">
	<a href="http://aska.ru-hoster.com:2199/tunein/mandarin.pls"><img align="absmiddle" src="http://aska.ru-hoster.com:2199/system/images/tunein-pls.png" border="0" alt="Winamp, iTunes" title="Winamp, iTunes" /></a>
	<a href="http://aska.ru-hoster.com:2199/tunein/mandarin.asx"><img align="absmiddle" src="http://aska.ru-hoster.com:2199/system/images/tunein-asx.png" border="0" alt="Windows Media Player" title="Windows Media Player" /></a>
	<a href="http://aska.ru-hoster.com:2199/tunein/mandarin.ram"><img align="absmiddle" src="http://aska.ru-hoster.com:2199/system/images/tunein-ram.png" border="0" alt="Real Player" title="Real Player" /></a>
	<a href="http://aska.ru-hoster.com:2199/tunein/mandarin.qtl"><img align="absmiddle" src="http://aska.ru-hoster.com:2199/system/images/tunein-qtl.png" border="0" alt="QuickTime" title="QuickTime" /></a>
</div>
</div>
<div class="info">
<p>Статус: <span id="cc_strinfo_server_mandarin" class="cc_streaminfo"></span></p>
<p>За пультом: <span id="cc_strinfo_title_mandarin" class="cc_streaminfo"></span></p>
<p>Слушателей: <span id="cc_strinfo_listeners_mandarin" class="cc_streaminfo"></span></p>
<p>Текущая композиция:</p><p><span id="cc_strinfo_song_mandarin" class="cc_streaminfo">Загрузка ...</span></p>
</div>
<!-- ENDS-->
</div>
        </div><!--End listen-->
        <div id="load">
        <? 
        $order_data=mysql_query("SELECT * FROM `order_conf` WHERE `conf`='off_on'");
      $order = mysql_fetch_array($order_data);
      
        if($order['active']=='1'){
        echo'
        <div class="order">
        <span class="nameTable">Сделать заказ<a id="various1" href="#inline1"></a></span>
       <div class="order_content">
	<div style="display: none;">
		<div id="inline1" style="width:530px;height:450px;overflow:auto;">
<p>Для заказа песни обязательно представьтесь. (Даже выбирая пункт «Аноним»)</p>
<p>Выберите пункт «Аноним», если не хотите, чтобы Dj говорил от кого заказ.</p>
<p>Просим вас подойди к заказу песни с ответственностью, ибо DJ не может знать всех песен в мире, а поэтому в случае нарушения правил Аргемоны, Краннога или РФ накажут именно Вас. Надеемся на понимание.</p>
<p>В поле ввода композиции постарайтесь написать как можно точнее в формате «Исполнитель – название песни», так Dj намного быстрее сможет исполнить ваш заказ.</p>
<p>Вы можете написать комментарий. Если вы хотите, чтобы ваш комментарий прозвучал в эфире, выберите пункт «В эфир».  (Например, «Хочу передать привет всем Кранножцам, я вас очень люблю и эта песня специально для вас»)</p>
<p>Если вы хотите уточнить что-то по поводу заказа напишите это в комментарии и выберите пункт «Dj-ю» подобные комментарии не будут зачитаны в эфире. (Например, «У этой песни много ремиксов, пожалуйста, поставьте оригинал»)</p>
<p>Если у вас будут особые примечания и при этом вы хотите, чтобы комментарий прозвучал в эфире, выберите оба пункта и «В эфир» и «Dj-ю». (Например, «Зачитайте, пожалуйста, поздравление после песни «Поздравляю всех с наступающим Новым Годом»»)</p>
<p>Песни выставляются в эфир за усмотрением DJ и обычно в порядке очереди.</p>
<p>Дублировать заказы не стоит, дублированные заказы аннулируются.</p>
<p>Вас не выставили в эфир? Не стоит огорчаться и тем более обижаться, есть разные причины и мы просим вашего понимания.</p>
<p>Слушайте Мандарин FM и пусть весь мир подождет;)</p>
</div>
	</div><div class="form_order">
                 <form method="post" name="order" class="add_order" id="add_order">
                        <p>
                           <input type="text" id="name" name="name" placeholder="Представьтесь" onclick="Stop" />
                           <input id="an" name="an" type="checkbox" value="1" /><label for="an">Анонимно</label>
                        </p>
                        <p>
                            <input type="text" id="music" name="music" placeholder="Композиция" onclick="Stop" onclick="Stop" />
                        </p>
                           <p> <textarea id="editor" name="comm" placeholder="Комментарий"></textarea></p>
                           <p class="text"><input type="checkbox" id="k1" name="k1" value="1"/> <label for="k1">DJ-ю</label><br>
                             <input type="checkbox" id="k2" name="k2" value="1"/> <label for="k2">В эфир</label>
                         <input type="button" class="submit" onclick="Ajax_order_add(\'/mandarin/software/add_order.php\', \'add_order\')" value="Отправить">
                            
                    </form>
                 </div>
           </div> </div>';//<!--End order -->
                    }
            //End load
            echo'</div><div class="timetable">
        <span class="nameTable">Ближайшие эфиры</span>
        <div class="timetable_content">
       <table class="mainTable">
							<thead>
								<tr>
									<td class="placeWizard">Дата/Время</td>
									<td class="nameWizard">За пультом</td>
									<td class="gradeWizard">Программа</td>
								</tr>
							</thead>
							<tbody>';
         $timetable_data=mysql_query("SELECT * FROM `timetable` WHERE `active`='1' ORDER BY `time` ASC");
           while($timetable = mysql_fetch_array($timetable_data)){
         $dj_data=mysql_query("SELECT * FROM `dj` WHERE `id`='".$timetable['dj']."'");
            $dj = mysql_fetch_array($dj_data);
         $programs_data=mysql_query("SELECT * FROM `programs` WHERE `id`='".$timetable['prog']."'");
            $programs = mysql_fetch_array($programs_data);
            $date = $timetable["time"];
$d1 = strtotime($date); // переводит из строки в дату
$date2 = date("d.m.Y H:i", $d1); // переводит в новый формат
        echo'
                <tr>
									<td>'.$date2.'</td>
									<td>'.$dj["name"].'</td>
									<td>'.$programs["name_prog"].'</td>
								</tr>
								';}
								$timetable_data=mysql_query("SELECT * FROM `timetable` WHERE `active`='1'");
           $timetable = mysql_fetch_array($timetable_data);
								if($timetable==array()){
								echo'
								<tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
								</tr>';
								}
            echo'
							</tbody>
						</table></div>
            </div>';//<!--End timetable -->
            
            
                     $music_date=mysql_query("SELECT * FROM `music` ORDER BY RAND()");
           $music = mysql_fetch_array($music_date);
            
            echo'<div class="hit">
        <span class="nameTable">Случайный Кранножский хит</span>
       <div class="hit_content">
       <div class="player"><script type="text/javascript">
playerGroup.addPlayer({
	url: "/mandarin/music/'.$music["url"].'",		// Адрес аудиофайла
	cssClass: "yes",		// CSS класс плеера, необходим для настроек стиля
	volume: 0.5,			// Начальный уровень громкости (от 0 до 1)
	box: "forPlayers"		// Блок или ID блока, в который надо устанавливать плеер, если не указывать, то плеер будет установлен тамже, где и добавлен этот код
});
</script></div>
<p class="info_music">Композиция: <span class="name_music">'.$music["name-music"].'</span></p>
<p class="info_music">Исполнитель: <span class="performer">'.$music["name"].'</span></p>
            </div>
            </div>';//<!--End hit -->
            ?>
    </div><!--End content -->

<? include ('bottom.php');?>