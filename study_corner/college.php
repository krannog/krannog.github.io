<?php
  include_once('top.php');

  $subjects = array(
    array("http://web.magomir.ru/","Веб-магия. Сайтостроение","Александра Понд"),
    array("http://wordsland.ru/vms/lect.php","Волшебный мир слов","Чжоули"),
    array("http://morohir.hol.es/index1.html","Древнегреческие чудовища. Спецкурс","Morohir"),
    array("http://f.argemona.ru/potions/vuz","Зельеметрика","Фиби Холливал"),
    array("http://beyondthescreen.hol.es/istis/index.html","Искусство сквозь века. Спецкурс","Alex Okai"),
    array("http://magicculture.hol.es/index.php/subj","Культура и магия. Спецкурс.","Elaine"),
    array("http://magdrui.ru/mo.html","Магический Огам. Спецкурс","Ари-Ювер"),
    array("http://wordsland.ru/mfi/","Магия функций и интегралов","Чжоули"),
    array("http://viar.esy.es/","Многослойность мира","Виар"),
    array("http://herbalogya.ru/music/","Музыкальная культура","olyush"),
    array("http://herbalogya.ru/music/","Музыкальная культура. Практикум","olyush"),
    array("http://wordsland.ru/astrologya/","Начала астрологии. Спецкурс","Чжоули"),
    array("http://omif.esy.es/index.html","Общая мифология. Спецкурс","DukeAlF"),
    array("http://wordsland.ru/astrologya_predsk/lect.php","Предсказательная астрология. Спецкурс","Чжоули"),
    array("http://magdrui.ru/tm.html","Тайны Мегалитов","Ари-Ювер"),
    array("http://quidditch.runaina.ru/","Философия квиддича","Рунаина Малодиоус")
  );

?>
      <div class="main_content main_subjects">
        <h2 class="main_content-header"><span>Предметы ВУЗа</span></h2>
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