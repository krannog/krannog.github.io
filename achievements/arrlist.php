<?
 $arr=unserialize(file_get_contents("arr_ach"));
 $arr2=unserialize(file_get_contents("arr_niki")); 
echo("<br><table><tr><td align=left><pre>");print_r($arr);echo("</pre></td></tr></table><br>");
echo("<br><table><tr><td align=left><pre>");print_r($arr2);echo("</pre></td></tr></table><br>");

?>