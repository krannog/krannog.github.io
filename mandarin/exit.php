<?
session_start();
session_unset();
session_destroy();
session_start();
$_SESSION['log_ex'] = true;
header('Location: index.php');
?>