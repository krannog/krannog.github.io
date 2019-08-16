<?php
  include_once('top.php');

  $subjects = array(
    array("http://web.magomir.ru/","Р’РµР±-РјР°РіРёСЏ. РЎР°Р№С‚РѕСЃС‚СЂРѕРµРЅРёРµ","РђР»РµРєСЃР°РЅРґСЂР° РџРѕРЅРґ"),
    array("http://wordsland.ru/vms/lect.php","Р’РѕР»С€РµР±РЅС‹Р№ РјРёСЂ СЃР»РѕРІ","Р§Р¶РѕСѓР»Рё"),
    array("http://morohir.hol.es/index1.html","Р”СЂРµРІРЅРµРіСЂРµС‡РµСЃРєРёРµ С‡СѓРґРѕРІРёС‰Р°. РЎРїРµС†РєСѓСЂСЃ","Morohir"),
    array("http://f.argemona.ru/potions/vuz","Р—РµР»СЊРµРјРµС‚СЂРёРєР°","Р¤РёР±Рё РҐРѕР»Р»РёРІР°Р»"),
    array("http://beyondthescreen.hol.es/istis/index.html","РСЃРєСѓСЃСЃС‚РІРѕ СЃРєРІРѕР·СЊ РІРµРєР°. РЎРїРµС†РєСѓСЂСЃ","Alex Okai"),
    array("http://magicculture.hol.es/index.php/subj","РљСѓР»СЊС‚СѓСЂР° Рё РјР°РіРёСЏ. РЎРїРµС†РєСѓСЂСЃ.","Elaine"),
    array("http://magdrui.ru/mo.html","РњР°РіРёС‡РµСЃРєРёР№ РћРіР°Рј. РЎРїРµС†РєСѓСЂСЃ","РђСЂРё-Р®РІРµСЂ"),
    array("http://wordsland.ru/mfi/","РњР°РіРёСЏ С„СѓРЅРєС†РёР№ Рё РёРЅС‚РµРіСЂР°Р»РѕРІ","Р§Р¶РѕСѓР»Рё"),
    array("http://viar.esy.es/","РњРЅРѕРіРѕСЃР»РѕР№РЅРѕСЃС‚СЊ РјРёСЂР°","Р’РёР°СЂ"),
    array("http://herbalogya.ru/music/","РњСѓР·С‹РєР°Р»СЊРЅР°СЏ РєСѓР»СЊС‚СѓСЂР°","olyush"),
    array("http://herbalogya.ru/music/","РњСѓР·С‹РєР°Р»СЊРЅР°СЏ РєСѓР»СЊС‚СѓСЂР°. РџСЂР°РєС‚РёРєСѓРј","olyush"),
    array("http://wordsland.ru/astrologya/","РќР°С‡Р°Р»Р° Р°СЃС‚СЂРѕР»РѕРіРёРё. РЎРїРµС†РєСѓСЂСЃ","Р§Р¶РѕСѓР»Рё"),
    array("http://omif.esy.es/index.html","РћР±С‰Р°СЏ РјРёС„РѕР»РѕРіРёСЏ. РЎРїРµС†РєСѓСЂСЃ","DukeAlF"),
    array("http://wordsland.ru/astrologya_predsk/lect.php","РџСЂРµРґСЃРєР°Р·Р°С‚РµР»СЊРЅР°СЏ Р°СЃС‚СЂРѕР»РѕРіРёСЏ. РЎРїРµС†РєСѓСЂСЃ","Р§Р¶РѕСѓР»Рё"),
    array("http://magdrui.ru/tm.html","РўР°Р№РЅС‹ РњРµРіР°Р»РёС‚РѕРІ","РђСЂРё-Р®РІРµСЂ"),
    array("http://quidditch.runaina.ru/","Р¤РёР»РѕСЃРѕС„РёСЏ РєРІРёРґРґРёС‡Р°","Р СѓРЅР°РёРЅР° РњР°Р»РѕРґРёРѕСѓСЃ")
  );

?>
      <div class="main_content main_subjects">
        <h2 class="main_content-header"><span>РџСЂРµРґРјРµС‚С‹ Р’РЈР—Р°</span></h2>
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