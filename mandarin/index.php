 <? session_start();
           include("software/bd.php");
 include ('top.php');
 ?>

 <div id="content">
        <div class="listen">
        <span class="nameTable">РЎР»СѓС€Р°С‚СЊ СЂР°РґРёРѕ</span>
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
<p>РЎС‚Р°С‚СѓСЃ: <span id="cc_strinfo_server_mandarin" class="cc_streaminfo"></span></p>
<p>Р—Р° РїСѓР»СЊС‚РѕРј: <span id="cc_strinfo_title_mandarin" class="cc_streaminfo"></span></p>
<p>РЎР»СѓС€Р°С‚РµР»РµР№: <span id="cc_strinfo_listeners_mandarin" class="cc_streaminfo"></span></p>
<p>РўРµРєСѓС‰Р°СЏ РєРѕРјРїРѕР·РёС†РёСЏ:</p><p><span id="cc_strinfo_song_mandarin" class="cc_streaminfo">Р—Р°РіСЂСѓР·РєР° ...</span></p>
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
        <span class="nameTable">РЎРґРµР»Р°С‚СЊ Р·Р°РєР°Р·<a id="various1" href="#inline1"></a></span>
       <div class="order_content">
	<div style="display: none;">
		<div id="inline1" style="width:530px;height:450px;overflow:auto;">
<p>Р”Р»СЏ Р·Р°РєР°Р·Р° РїРµСЃРЅРё РѕР±СЏР·Р°С‚РµР»СЊРЅРѕ РїСЂРµРґСЃС‚Р°РІСЊС‚РµСЃСЊ. (Р”Р°Р¶Рµ РІС‹Р±РёСЂР°СЏ РїСѓРЅРєС‚ В«РђРЅРѕРЅРёРјВ»)</p>
<p>Р’С‹Р±РµСЂРёС‚Рµ РїСѓРЅРєС‚ В«РђРЅРѕРЅРёРјВ», РµСЃР»Рё РЅРµ С…РѕС‚РёС‚Рµ, С‡С‚РѕР±С‹ Dj РіРѕРІРѕСЂРёР» РѕС‚ РєРѕРіРѕ Р·Р°РєР°Р·.</p>
<p>РџСЂРѕСЃРёРј РІР°СЃ РїРѕРґРѕР№РґРё Рє Р·Р°РєР°Р·Сѓ РїРµСЃРЅРё СЃ РѕС‚РІРµС‚СЃС‚РІРµРЅРЅРѕСЃС‚СЊСЋ, РёР±Рѕ DJ РЅРµ РјРѕР¶РµС‚ Р·РЅР°С‚СЊ РІСЃРµС… РїРµСЃРµРЅ РІ РјРёСЂРµ, Р° РїРѕСЌС‚РѕРјСѓ РІ СЃР»СѓС‡Р°Рµ РЅР°СЂСѓС€РµРЅРёСЏ РїСЂР°РІРёР» РђСЂРіРµРјРѕРЅС‹, РљСЂР°РЅРЅРѕРіР° РёР»Рё Р Р¤ РЅР°РєР°Р¶СѓС‚ РёРјРµРЅРЅРѕ Р’Р°СЃ. РќР°РґРµРµРјСЃСЏ РЅР° РїРѕРЅРёРјР°РЅРёРµ.</p>
<p>Р’ РїРѕР»Рµ РІРІРѕРґР° РєРѕРјРїРѕР·РёС†РёРё РїРѕСЃС‚Р°СЂР°Р№С‚РµСЃСЊ РЅР°РїРёСЃР°С‚СЊ РєР°Рє РјРѕР¶РЅРѕ С‚РѕС‡РЅРµРµ РІ С„РѕСЂРјР°С‚Рµ В«РСЃРїРѕР»РЅРёС‚РµР»СЊ вЂ“ РЅР°Р·РІР°РЅРёРµ РїРµСЃРЅРёВ», С‚Р°Рє Dj РЅР°РјРЅРѕРіРѕ Р±С‹СЃС‚СЂРµРµ СЃРјРѕР¶РµС‚ РёСЃРїРѕР»РЅРёС‚СЊ РІР°С€ Р·Р°РєР°Р·.</p>
<p>Р’С‹ РјРѕР¶РµС‚Рµ РЅР°РїРёСЃР°С‚СЊ РєРѕРјРјРµРЅС‚Р°СЂРёР№. Р•СЃР»Рё РІС‹ С…РѕС‚РёС‚Рµ, С‡С‚РѕР±С‹ РІР°С€ РєРѕРјРјРµРЅС‚Р°СЂРёР№ РїСЂРѕР·РІСѓС‡Р°Р» РІ СЌС„РёСЂРµ, РІС‹Р±РµСЂРёС‚Рµ РїСѓРЅРєС‚ В«Р’ СЌС„РёСЂВ».  (РќР°РїСЂРёРјРµСЂ, В«РҐРѕС‡Сѓ РїРµСЂРµРґР°С‚СЊ РїСЂРёРІРµС‚ РІСЃРµРј РљСЂР°РЅРЅРѕР¶С†Р°Рј, СЏ РІР°СЃ РѕС‡РµРЅСЊ Р»СЋР±Р»СЋ Рё СЌС‚Р° РїРµСЃРЅСЏ СЃРїРµС†РёР°Р»СЊРЅРѕ РґР»СЏ РІР°СЃВ»)</p>
<p>Р•СЃР»Рё РІС‹ С…РѕС‚РёС‚Рµ СѓС‚РѕС‡РЅРёС‚СЊ С‡С‚Рѕ-С‚Рѕ РїРѕ РїРѕРІРѕРґСѓ Р·Р°РєР°Р·Р° РЅР°РїРёС€РёС‚Рµ СЌС‚Рѕ РІ РєРѕРјРјРµРЅС‚Р°СЂРёРё Рё РІС‹Р±РµСЂРёС‚Рµ РїСѓРЅРєС‚ В«Dj-СЋВ» РїРѕРґРѕР±РЅС‹Рµ РєРѕРјРјРµРЅС‚Р°СЂРёРё РЅРµ Р±СѓРґСѓС‚ Р·Р°С‡РёС‚Р°РЅС‹ РІ СЌС„РёСЂРµ. (РќР°РїСЂРёРјРµСЂ, В«РЈ СЌС‚РѕР№ РїРµСЃРЅРё РјРЅРѕРіРѕ СЂРµРјРёРєСЃРѕРІ, РїРѕР¶Р°Р»СѓР№СЃС‚Р°, РїРѕСЃС‚Р°РІСЊС‚Рµ РѕСЂРёРіРёРЅР°Р»В»)</p>
<p>Р•СЃР»Рё Сѓ РІР°СЃ Р±СѓРґСѓС‚ РѕСЃРѕР±С‹Рµ РїСЂРёРјРµС‡Р°РЅРёСЏ Рё РїСЂРё СЌС‚РѕРј РІС‹ С…РѕС‚РёС‚Рµ, С‡С‚РѕР±С‹ РєРѕРјРјРµРЅС‚Р°СЂРёР№ РїСЂРѕР·РІСѓС‡Р°Р» РІ СЌС„РёСЂРµ, РІС‹Р±РµСЂРёС‚Рµ РѕР±Р° РїСѓРЅРєС‚Р° Рё В«Р’ СЌС„РёСЂВ» Рё В«Dj-СЋВ». (РќР°РїСЂРёРјРµСЂ, В«Р—Р°С‡РёС‚Р°Р№С‚Рµ, РїРѕР¶Р°Р»СѓР№СЃС‚Р°, РїРѕР·РґСЂР°РІР»РµРЅРёРµ РїРѕСЃР»Рµ РїРµСЃРЅРё В«РџРѕР·РґСЂР°РІР»СЏСЋ РІСЃРµС… СЃ РЅР°СЃС‚СѓРїР°СЋС‰РёРј РќРѕРІС‹Рј Р“РѕРґРѕРјВ»В»)</p>
<p>РџРµСЃРЅРё РІС‹СЃС‚Р°РІР»СЏСЋС‚СЃСЏ РІ СЌС„РёСЂ Р·Р° СѓСЃРјРѕС‚СЂРµРЅРёРµРј DJ Рё РѕР±С‹С‡РЅРѕ РІ РїРѕСЂСЏРґРєРµ РѕС‡РµСЂРµРґРё.</p>
<p>Р”СѓР±Р»РёСЂРѕРІР°С‚СЊ Р·Р°РєР°Р·С‹ РЅРµ СЃС‚РѕРёС‚, РґСѓР±Р»РёСЂРѕРІР°РЅРЅС‹Рµ Р·Р°РєР°Р·С‹ Р°РЅРЅСѓР»РёСЂСѓСЋС‚СЃСЏ.</p>
<p>Р’Р°СЃ РЅРµ РІС‹СЃС‚Р°РІРёР»Рё РІ СЌС„РёСЂ? РќРµ СЃС‚РѕРёС‚ РѕРіРѕСЂС‡Р°С‚СЊСЃСЏ Рё С‚РµРј Р±РѕР»РµРµ РѕР±РёР¶Р°С‚СЊСЃСЏ, РµСЃС‚СЊ СЂР°Р·РЅС‹Рµ РїСЂРёС‡РёРЅС‹ Рё РјС‹ РїСЂРѕСЃРёРј РІР°С€РµРіРѕ РїРѕРЅРёРјР°РЅРёСЏ.</p>
<p>РЎР»СѓС€Р°Р№С‚Рµ РњР°РЅРґР°СЂРёРЅ FM Рё РїСѓСЃС‚СЊ РІРµСЃСЊ РјРёСЂ РїРѕРґРѕР¶РґРµС‚;)</p>
</div>
	</div><div class="form_order">
                 <form method="post" name="order" class="add_order" id="add_order">
                        <p>
                           <input type="text" id="name" name="name" placeholder="РџСЂРµРґСЃС‚Р°РІСЊС‚РµСЃСЊ" onclick="Stop" />
                           <input id="an" name="an" type="checkbox" value="1" /><label for="an">РђРЅРѕРЅРёРјРЅРѕ</label>
                        </p>
                        <p>
                            <input type="text" id="music" name="music" placeholder="РљРѕРјРїРѕР·РёС†РёСЏ" onclick="Stop" onclick="Stop" />
                        </p>
                           <p> <textarea id="editor" name="comm" placeholder="РљРѕРјРјРµРЅС‚Р°СЂРёР№"></textarea></p>
                           <p class="text"><input type="checkbox" id="k1" name="k1" value="1"/> <label for="k1">DJ-СЋ</label><br>
                             <input type="checkbox" id="k2" name="k2" value="1"/> <label for="k2">Р’ СЌС„РёСЂ</label>
                         <input type="button" class="submit" onclick="Ajax_order_add(\'/mandarin/software/add_order.php\', \'add_order\')" value="РћС‚РїСЂР°РІРёС‚СЊ">
                            
                    </form>
                 </div>
           </div> </div>';//<!--End order -->
                    }
            //End load
            echo'</div><div class="timetable">
        <span class="nameTable">Р‘Р»РёР¶Р°Р№С€РёРµ СЌС„РёСЂС‹</span>
        <div class="timetable_content">
       <table class="mainTable">
							<thead>
								<tr>
									<td class="placeWizard">Р”Р°С‚Р°/Р’СЂРµРјСЏ</td>
									<td class="nameWizard">Р—Р° РїСѓР»СЊС‚РѕРј</td>
									<td class="gradeWizard">РџСЂРѕРіСЂР°РјРјР°</td>
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
$d1 = strtotime($date); // РїРµСЂРµРІРѕРґРёС‚ РёР· СЃС‚СЂРѕРєРё РІ РґР°С‚Сѓ
$date2 = date("d.m.Y H:i", $d1); // РїРµСЂРµРІРѕРґРёС‚ РІ РЅРѕРІС‹Р№ С„РѕСЂРјР°С‚
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
        <span class="nameTable">РЎР»СѓС‡Р°Р№РЅС‹Р№ РљСЂР°РЅРЅРѕР¶СЃРєРёР№ С…РёС‚</span>
       <div class="hit_content">
       <div class="player"><script type="text/javascript">
playerGroup.addPlayer({
	url: "/mandarin/music/'.$music["url"].'",		// РђРґСЂРµСЃ Р°СѓРґРёРѕС„Р°Р№Р»Р°
	cssClass: "yes",		// CSS РєР»Р°СЃСЃ РїР»РµРµСЂР°, РЅРµРѕР±С…РѕРґРёРј РґР»СЏ РЅР°СЃС‚СЂРѕРµРє СЃС‚РёР»СЏ
	volume: 0.5,			// РќР°С‡Р°Р»СЊРЅС‹Р№ СѓСЂРѕРІРµРЅСЊ РіСЂРѕРјРєРѕСЃС‚Рё (РѕС‚ 0 РґРѕ 1)
	box: "forPlayers"		// Р‘Р»РѕРє РёР»Рё ID Р±Р»РѕРєР°, РІ РєРѕС‚РѕСЂС‹Р№ РЅР°РґРѕ СѓСЃС‚Р°РЅР°РІР»РёРІР°С‚СЊ РїР»РµРµСЂ, РµСЃР»Рё РЅРµ СѓРєР°Р·С‹РІР°С‚СЊ, С‚Рѕ РїР»РµРµСЂ Р±СѓРґРµС‚ СѓСЃС‚Р°РЅРѕРІР»РµРЅ С‚Р°РјР¶Рµ, РіРґРµ Рё РґРѕР±Р°РІР»РµРЅ СЌС‚РѕС‚ РєРѕРґ
});
</script></div>
<p class="info_music">РљРѕРјРїРѕР·РёС†РёСЏ: <span class="name_music">'.$music["name-music"].'</span></p>
<p class="info_music">РСЃРїРѕР»РЅРёС‚РµР»СЊ: <span class="performer">'.$music["name"].'</span></p>
            </div>
            </div>';//<!--End hit -->
            ?>
    </div><!--End content -->

<? include ('bottom.php');?>