<?
session_start();         //Стартуем       
          include("software/bd.php");
            if (isset($_POST['name']) and $_POST['name'] !='' and isset($_POST['pass']) and $_POST[ 'pass' ] !='' and isset($_POST['butt']))
            {
          $initial_name=mysql_escape_string ($_POST ['name']) ;
            $initial_password=mysql_escape_string ($_POST ['pass']);
$users_data=mysql_query("SELECT * FROM `dj` WHERE `name_log`='$initial_name'");
$users = mysql_fetch_array($users_data);
            
            //Проверяем провильность введенных данных
           if ($users['pass_log']==$initial_password)
                  {
                  //Записываем факт авторизации в сессию
                  $_SESSION['log'] = true;
                 
                  $_SESSION['name'] = $users['name'];
                  $_SESSION['id'] = $users['id'];
                  header('Location: dj_panel.php');
                  }
                  else
                  {;
                  
                  //не совпадает
                  $_SESSION['log_err'] = true;
                  header('Location: index.php');
                 }}
                  ?>