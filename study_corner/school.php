<?php
  include_once('top.php');

  $subjects = array(
    array("http://mcrell.narod.ru/athrabeth.html","Беседы об Арде","McRel"),
    array("http://historyofmagic.hol.es/index.html","История магии в современном мире","Elaine"),
    array("http://castlesmag.000webhostapp.com//lections.html","Магия замков","Dark Bogachek"),
    array("http://morohir.hol.es/index.html","Мифология Древней Греции","Morohir"),
    array("http://f0122958.xsph.ru/","Мифология и культура Междуречья","DukeAlF"),
    array("http://wordsland.ru/slavmif/","Славянская мифология","Чжоули"),
    array("http://www.magisterium.club/","Артефактология","Ини Юне"),
    array("http://f.argemona.ru/potions/school","Зельеварение","Фиби Холливал"),
    array("http://ne-jit.narod.ru/","Неестествознание","Тadana"),
    array("http://elaraelif.hol.es/index.html","Теория магии","Элара"),
    array("http://herbalogya.ru/","Травоведение","olyush"),
    array("http://fanbeasts.pe.hu/index.html","Фантастические твари","Asaka"),
    array("http://rada-cheiro.narod.ru/kabinet.html","Хирология","Рада Винтер"),
    array("http://aysel-room.roool.ru/","Замечательная жизнь магов","Aysel Avees"),
    array("http://magdrui.ru/","Магия Друидов","Ари-Юве"),
    array("http://wordsland.ru/","Магия языка","Чжоули"),
    array("http://japan.diana-hand.ru/","Магия Японии","Ребэль"),
    array("http://russmagic.runaina.ru/","Русская магия","Рунна Малодиоус"),
    array("http://luna4561.narod.ru/castles.html","Замковая архитектура","Виндора"),
    array("http://magicphoto.pp.ua/","Магия фотографии","Куница"),
    array("http://magicfoto.bl.ee/index.php","Магия фотошопа","Asaka"),
    array("http://www.axaxxax.narod.ru/vxod.html","Стихоплетение","Radoslaw"),
    array("http://ssimoren.narod.ru/drakonology/index.html","Драконология","sImoREN"),
    array("http://hrono-arg.blogspot.ru/p/blog-page_23.html","Загадки времени","Джулс"),
    array("http://quiddich.voldemort.ru/master-class/index.php","Квиддич. Мастер-класс","Рунаина Малодиоус"),
    array("http://beyondthescreen.hol.es/index.html","Магия заэкранного мира","Alex Okai"),
    array("http://tablegame.esy.es/lessons.html","Магия настольных игр","DukeAlF"),
    array("http://morohir2.hol.es/lection.html","Магия стихий","Morohir"),
    array("http://f0123553.xsph.ru/sicret2/index-lec.html","Основы колдомедицины","Tadana"),
    array("http://rod-tree.hol.es/lec.html","Родословное древо. Практикум","Капля"),
    array("http://f.argemona.ru/spice","Специи и пряности. Спецкурс","Фиби Холливал")
  );

?>
      <div class="main_content main_subjects">
        <h2 class="main_content-header"><span>Школьные предметы</span></h2>
      <?php

        foreach($subjects as $subject)
        {

      ?>
        <section>
          <h3><a href="<?php echo $subject[0] ?>" target="_blank"><?php echo $subject[1] ?></a> − <?php echo $subject[2] ?></h3>
          <ul>
            <li><a href="http://www.magisterium.club/" target="_blank">Ссылочка 1</a></li>
            <li><a href="http://www.magisterium.club/" target="_blank">Ссылочка 2</a></li>
            <li><a href="http://www.magisterium.club/" target="_blank">Ссылочка 3</a></li>
            <li><a href="http://www.magisterium.club/" target="_blank">Ссылочка 4</a></li>
          </ul>
        </section>
      <?php
        }
      ?>
      </div>
<?php
  include_once('bottom.php');   
?>