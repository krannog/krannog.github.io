<?php
  include_once('top.php');

  $subjects = array(
    array("http://mcrell.narod.ru/athrabeth.html","Р‘РµСЃРµРґС‹ РѕР± РђСЂРґРµ","McRel"),
    array("http://historyofmagic.hol.es/index.html","РСЃС‚РѕСЂРёСЏ РјР°РіРёРё РІ СЃРѕРІСЂРµРјРµРЅРЅРѕРј РјРёСЂРµ","Elaine"),
    array("http://castlesmag.000webhostapp.com//lections.html","РњР°РіРёСЏ Р·Р°РјРєРѕРІ","Dark Bogachek"),
    array("http://morohir.hol.es/index.html","РњРёС„РѕР»РѕРіРёСЏ Р”СЂРµРІРЅРµР№ Р“СЂРµС†РёРё","Morohir"),
    array("http://f0122958.xsph.ru/","РњРёС„РѕР»РѕРіРёСЏ Рё РєСѓР»СЊС‚СѓСЂР° РњРµР¶РґСѓСЂРµС‡СЊСЏ","DukeAlF"),
    array("http://wordsland.ru/slavmif/","РЎР»Р°РІСЏРЅСЃРєР°СЏ РјРёС„РѕР»РѕРіРёСЏ","Р§Р¶РѕСѓР»Рё"),
    array("http://www.magisterium.club/","РђСЂС‚РµС„Р°РєС‚РѕР»РѕРіРёСЏ","РРЅРё Р®РЅРµ"),
    array("http://f.argemona.ru/potions/school","Р—РµР»СЊРµРІР°СЂРµРЅРёРµ","Р¤РёР±Рё РҐРѕР»Р»РёРІР°Р»"),
    array("http://ne-jit.narod.ru/","РќРµРµСЃС‚РµСЃС‚РІРѕР·РЅР°РЅРёРµ","Рўadana"),
    array("http://elaraelif.hol.es/index.html","РўРµРѕСЂРёСЏ РјР°РіРёРё","Р­Р»Р°СЂР°"),
    array("http://herbalogya.ru/","РўСЂР°РІРѕРІРµРґРµРЅРёРµ","olyush"),
    array("http://fanbeasts.pe.hu/index.html","Р¤Р°РЅС‚Р°СЃС‚РёС‡РµСЃРєРёРµ С‚РІР°СЂРё","Asaka"),
    array("http://rada-cheiro.narod.ru/kabinet.html","РҐРёСЂРѕР»РѕРіРёСЏ","Р Р°РґР° Р’РёРЅС‚РµСЂ"),
    array("http://aysel-room.roool.ru/","Р—Р°РјРµС‡Р°С‚РµР»СЊРЅР°СЏ Р¶РёР·РЅСЊ РјР°РіРѕРІ","Aysel Avees"),
    array("http://magdrui.ru/","РњР°РіРёСЏ Р”СЂСѓРёРґРѕРІ","РђСЂРё-Р®РІРµ"),
    array("http://wordsland.ru/","РњР°РіРёСЏ СЏР·С‹РєР°","Р§Р¶РѕСѓР»Рё"),
    array("http://japan.diana-hand.ru/","РњР°РіРёСЏ РЇРїРѕРЅРёРё","Р РµР±СЌР»СЊ"),
    array("http://russmagic.runaina.ru/","Р СѓСЃСЃРєР°СЏ РјР°РіРёСЏ","Р СѓРЅРЅР° РњР°Р»РѕРґРёРѕСѓСЃ"),
    array("http://luna4561.narod.ru/castles.html","Р—Р°РјРєРѕРІР°СЏ Р°СЂС…РёС‚РµРєС‚СѓСЂР°","Р’РёРЅРґРѕСЂР°"),
    array("http://magicphoto.pp.ua/","РњР°РіРёСЏ С„РѕС‚РѕРіСЂР°С„РёРё","РљСѓРЅРёС†Р°"),
    array("http://magicfoto.bl.ee/index.php","РњР°РіРёСЏ С„РѕС‚РѕС€РѕРїР°","Asaka"),
    array("http://www.axaxxax.narod.ru/vxod.html","РЎС‚РёС…РѕРїР»РµС‚РµРЅРёРµ","Radoslaw"),
    array("http://ssimoren.narod.ru/drakonology/index.html","Р”СЂР°РєРѕРЅРѕР»РѕРіРёСЏ","sImoREN"),
    array("http://hrono-arg.blogspot.ru/p/blog-page_23.html","Р—Р°РіР°РґРєРё РІСЂРµРјРµРЅРё","Р”Р¶СѓР»СЃ"),
    array("http://quiddich.voldemort.ru/master-class/index.php","РљРІРёРґРґРёС‡. РњР°СЃС‚РµСЂ-РєР»Р°СЃСЃ","Р СѓРЅР°РёРЅР° РњР°Р»РѕРґРёРѕСѓСЃ"),
    array("http://beyondthescreen.hol.es/index.html","РњР°РіРёСЏ Р·Р°СЌРєСЂР°РЅРЅРѕРіРѕ РјРёСЂР°","Alex Okai"),
    array("http://tablegame.esy.es/lessons.html","РњР°РіРёСЏ РЅР°СЃС‚РѕР»СЊРЅС‹С… РёРіСЂ","DukeAlF"),
    array("http://morohir2.hol.es/lection.html","РњР°РіРёСЏ СЃС‚РёС…РёР№","Morohir"),
    array("http://f0123553.xsph.ru/sicret2/index-lec.html","РћСЃРЅРѕРІС‹ РєРѕР»РґРѕРјРµРґРёС†РёРЅС‹","Tadana"),
    array("http://rod-tree.hol.es/lec.html","Р РѕРґРѕСЃР»РѕРІРЅРѕРµ РґСЂРµРІРѕ. РџСЂР°РєС‚РёРєСѓРј","РљР°РїР»СЏ"),
    array("http://f.argemona.ru/spice","РЎРїРµС†РёРё Рё РїСЂСЏРЅРѕСЃС‚Рё. РЎРїРµС†РєСѓСЂСЃ","Р¤РёР±Рё РҐРѕР»Р»РёРІР°Р»")
  );

?>
      <div class="main_content main_subjects">
        <h2 class="main_content-header"><span>РЁРєРѕР»СЊРЅС‹Рµ РїСЂРµРґРјРµС‚С‹</span></h2>
      <?php

        foreach($subjects as $subject)
        {

      ?>
        <section>
          <h3><a href="<?php echo $subject[0] ?>" target="_blank"><?php echo $subject[1] ?></a> в€’ <?php echo $subject[2] ?></h3>
          <ul>
            <li><a href="http://www.magisterium.club/" target="_blank">РЎСЃС‹Р»РѕС‡РєР° 1</a></li>
            <li><a href="http://www.magisterium.club/" target="_blank">РЎСЃС‹Р»РѕС‡РєР° 2</a></li>
            <li><a href="http://www.magisterium.club/" target="_blank">РЎСЃС‹Р»РѕС‡РєР° 3</a></li>
            <li><a href="http://www.magisterium.club/" target="_blank">РЎСЃС‹Р»РѕС‡РєР° 4</a></li>
          </ul>
        </section>
      <?php
        }
      ?>
      </div>
<?php
  include_once('bottom.php');   
?>