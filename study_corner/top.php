<?php
  
  $thisurl = dirname($_SERVER['SCRIPT_NAME']);
  $thispage = basename($_SERVER['SCRIPT_NAME'], "/");
  switch($thispage)
  {
    case 'school.php':
      $page_title = 'РЁРєРѕР»СЊРЅС‹Рµ РїСЂРµРґРјРµС‚С‹';
      break;
    case 'college.php':
      $page_title = 'РџСЂРµРґРјРµС‚С‹ Р’РЈР—Р°';
      break;
    case 'how_to_pearl.php':
      $page_title = 'Р–РµРјС‡СѓР¶РЅС‹Рµ СЃРµРєСЂРµС‚С‹';
      break;
    case 'rules.php':
      $page_title = 'РџСЂР°РІРёР»Р°';
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
      <h1 class="main_header-title"><a href="index.php">РЈС‡РµР±РЅС‹Р№  СѓРіРѕР»РѕРє</a></h1>
    </header>
    <div class="main_wrap">
      <nav class="main_nav">
        <a href="school.php">РЁРєРѕР»Р°</a>
        <a href="college.php">Р’СѓР·</a>
        <a href="how_to_pearl.php">Р–РµРјС‡СѓР¶РЅС‹Рµ СЃРµРєСЂРµС‚С‹</a>
        <a href="rules.php">РџСЂР°РІРёР»Р°</a>
        <a href="http://argemona.ru/krannog/" target="_blank">Р’ Р”РѕРј</a>
        <a href="http://argemona.ru/table.html" target="_blank">Р Р°СЃРїРёСЃР°РЅРёРµ</a>
        <a href="http://argemona.ru/journal.html" target="_blank">Р–СѓСЂРЅР°Р»</a>
        <a href="http://argemona.ru/forums/" target="_blank">Р¤РѕСЂСѓРј</a> 		
      </nav>