<?
session_start();         //РЎС‚Р°СЂС‚СѓРµРј       
          include("software/bd.php");
            if (isset($_POST['name']) and $_POST['name'] !='' and isset($_POST['pass']) and $_POST[ 'pass' ] !='' and isset($_POST['butt']))
            {
          $initial_name=mysql_escape_string ($_POST ['name']) ;
            $initial_password=mysql_escape_string ($_POST ['pass']);
$users_data=mysql_query("SELECT * FROM `dj` WHERE `name_log`='$initial_name'");
$users = mysql_fetch_array($users_data);
            
            //РџСЂРѕРІРµСЂСЏРµРј РїСЂРѕРІРёР»СЊРЅРѕСЃС‚СЊ РІРІРµРґРµРЅРЅС‹С… РґР°РЅРЅС‹С…
           if ($users['pass_log']==$initial_password)
                  {
                  //Р—Р°РїРёСЃС‹РІР°РµРј С„Р°РєС‚ Р°РІС‚РѕСЂРёР·Р°С†РёРё РІ СЃРµСЃСЃРёСЋ
                  $_SESSION['log'] = true;
                 
                  $_SESSION['name'] = $users['name'];
                  $_SESSION['id'] = $users['id'];
                  header('Location: dj_panel.php');
                  }
                  else
                  {;
                  
                  //РЅРµ СЃРѕРІРїР°РґР°РµС‚
                  $_SESSION['log_err'] = true;
                  header('Location: index.php');
                 }}
                  ?>