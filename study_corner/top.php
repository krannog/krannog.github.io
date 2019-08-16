<?php
  
  $thisurl = dirname($_SERVER['SCRIPT_NAME']);
  $thispage = basename($_SERVER['SCRIPT_NAME'], "/");
  switch($thispage)
  {
    case 'school.php':
      $page_title = 'Школьные предметы';
      break;
    case 'college.php':
      $page_title = 'Предметы ВУЗа';
      break;
    case 'how_to_pearl.php':
      $page_title = 'Жемчужные секреты';
      break;
    case 'rules.php':
      $page_title = 'Правила';
      break;
  }
  
?>
<!DOCTYPE html>    
<html lang="ru">  
  <head>    
    <meta charset="utf-8">
    <title> <?php echo $page_title; ?> </title>                
    <link rel="stylesheet" href="<?php echo $thisurl; ?>/files/css/reset.css">
    <link rel="stylesheet" href="<?php echo $thisurl; ?>/files/css/style.css">
    <link rel="icon" href="http://argemona.ru/favicon.ico">
  </head>
  <body>
    <header class="main_header">					
      <h1 class="main_header-title"><a href="index.php">Учебный  уголок</a></h1>
    </header>
    <div class="main_wrap">
      <nav class="main_nav">
        <a href="school.php">Школа</a>
        <a href="college.php">Вуз</a>
        <a href="how_to_pearl.php">Жемчужные секреты</a>
        <a href="rules.php">Правила</a>
        <a href="http://argemona.ru/krannog/" target="_blank">В Дом</a>
        <a href="http://argemona.ru/table.html" target="_blank">Расписание</a>
        <a href="http://argemona.ru/journal.html" target="_blank">Журнал</a>
        <a href="http://argemona.ru/forums/" target="_blank">Форум</a> 		
      </nav>