<?
$AU["USER"]="achiev_krannog"; //�������� ���
$AU["PASS"]="yk1qrrf"; //�������� ������
if(!isset($_SERVER["PHP_AUTH_USER"]) and !isset($_SERVER["HTTP_AUTHORIZATION"]))
{
 header("WWW-Authenticate: Basic realm=\"\"");
 header("HTTP/1.0 401 Unauthorized");
 echo "�� ������ ��� � �����.";
 exit;
}else{
 if(isset($_SERVER["HTTP_AUTHORIZATION"])){ list($_SERVER["PHP_AUTH_USER"],$_SERVER
["PHP_AUTH_PW"])=explode(':', base64_decode(substr($_SERVER["HTTP_AUTHORIZATION"], 6))); }
 if(($_SERVER["PHP_AUTH_USER"]!=$AU["USER"])or($_SERVER["PHP_AUTH_PW"]!=$AU["PASS"]))
 {
  header("WWW-Authenticate: Basic realm=\"\"");
  header("HTTP/1.0 401 Unauthorized");
  echo "�� ������ ��� � �����.";
  exit;
 }
}
?>
<html><head>
<title>���������� - ��������</title>
</head>
<body><table width=100% border=0 cellpadding=10><tr><td width=60% valign=top>
<b>���������� �������:</b>
<br><br>
<form action="admin_add.php" method=post>
<table>
<tr><td>�������� �������:</td><td><input type=text name="nazv" size=50></td></tr>
<tr><td>������� ��������:</td><td><select name="ur">
<option>�����
<option>�����
<option>���
</select></td></tr>
<tr><td>��� �������:</td><td><select name="type">
<option>�������
<option>����������
<option>���������
<option>��������
<option>���������
</select></td></tr>
<tr><td>���������:</td><td><select name="cat">
<option>�������
<option>����������
<option>������������
<option>�������������
<option>�������
<option>������
</select></td></tr>
<tr><td>������ ���������:</td><td><textarea name="sposob" cols=50 rows=3 wrap=virtual></textarea></td></tr>
<tr><td>������� ������� � ������� -<br>��������� ������ �������<br>(������� ��������): </td><td><input type=text name="usl" value="���" size=50></td></tr>
<tr><td>����� ��������:</td><td><input type=text name="pic" size=50></td></tr>
<tr><td colspan=2 align=center><input type=submit value="�������� �������"></td></tr>
</table>
</form>
<br><br>

<b>���������� ������ �������:</b>
<br><br>
<form action="admin_add.php" method=post>
<table>
<tr><td>��� �������:</td><td><input type=text name="newnik" size=50></td></tr>
<tr><td>������� ��������:</td><td><select name="ur2">
<option>�����
<option>���
</select></td></tr>
<tr><td colspan=2 align=center><input type=submit value="�������� ���"></td></tr>
</table>
</form>

<br></td><td width=40% valign=top>
<b>������������� �������� ����:</b>
<br><br>
<form action="admin_add.php" method=post>
<table>
<tr><td>��������� ���:</td><td><input type=text name="delnik" size=50></td></tr>
<tr><td colspan=2 align=center><input type=submit value="����� �������?"></td></tr>
</table></form>
<br>
<b>������������� �������� ����������:</b><br>
(��� ������ ��� �������������� �����)
<br><br>
<form action="admin_add.php" method=post>
<table>
<tr><td>��������� ����������:</td><td><input type=text name="delach" size=50></td></tr>
<tr><td colspan=2 align=center><input type=submit value="����� �������?"></td></tr>
</table>
</form>
</td></tr></table>
<?
if(isset($_POST['nazv']))
{
// ��������� ����� ������� �� ������ �� �����
 $arr=unserialize(file_get_contents("arr_ach"));
 $arr[$_POST['nazv']]=array("ur"=>$_POST['ur'], "type"=>$_POST['type'], "sposob"=>$_POST['sposob'], "cat"=>$_POST['cat'], "active"=>true, "pic"=>$_POST['pic'], "usl"=>$_POST['usl']);
// � ��������� � ����
 $f=fopen("arr_ach","w");
 fputs($f,serialize($arr));
 fclose($f);

// ��������� ����� ������� � ������� �� ����� � ���������
 $arr2=unserialize(file_get_contents("arr_niki")); 
 $dob=array($_POST['nazv']=>false);
 foreach(@$arr2 as $i=>$v)
 {
  $arr2[$i]=array_merge($arr2[$i], $dob);
 }
 $f=fopen("arr_niki","w");
 fputs($f,serialize($arr2));
 fclose($f);
 echo "������� ���������!";
}

if(isset($_POST['newnik']))
{
// ��������� ����� ��� �� ������ �� �����
 $arr=unserialize(file_get_contents("arr_ach"));
 $arr2=unserialize(file_get_contents("arr_niki")); 
 $newnik=$_POST['newnik'];
 $arr2[$newnik]=array("ur2"=>$_POST['ur2']);
 foreach($arr as $i=>$v)
 {
  $arr2[$newnik]=array_merge($arr2[$newnik], array($i=>false));
 }
// � ��������� � ����
 $f=fopen("arr_niki","w");
 fputs($f,serialize($arr2));
 fclose($f);
 echo "��� <b>".$newnik."</b> ��������!";
}
// �������� ����
if(isset($_POST['delnik']))
{
 $arr2=unserialize(file_get_contents("arr_niki")); 
 $delnik=$_POST['delnik'];
 unset($arr2[$delnik]);
 $f=fopen("arr_niki","w");
 fputs($f,serialize($arr2));
 fclose($f);
 echo "��� <b>".$delnik."</b> ������.";
}
// �������� ����������
if(isset($_POST['delach']))
{
 $arr2=unserialize(file_get_contents("arr_niki")); 
 $arr=unserialize(file_get_contents("arr_ach"));
 $delach=$_POST['delach'];
  foreach($arr2 as $i=>$v)
 {
 unset($arr2[$i][$delach]);
 }
 unset($arr[$delach]);
 $f=fopen("arr_niki","w");
 fputs($f,serialize($arr2));
 fclose($f);
 $f=fopen("arr_ach","w");
 fputs($f,serialize($arr));
 fclose($f);
 echo "���������� <b>".$delach."</b> �������.";
}
?>
</body></html>