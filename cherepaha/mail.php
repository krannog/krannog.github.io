<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['kurs'])) {$kurs = $_POST['kurs'];}
if (isset($_POST['predmet'])) {$predmet = $_POST['predmet'];}
if (isset($_POST['galka'])) {$galka = $_POST['galka'];}
if (isset($_POST['skrin'])) {$skrin = $_POST['skrin'];}
if (empty($name))
{
echo "<b>��� ����� �� ���-���� ���?!<p>";
echo "<a href=anketa.html>������� � �������� �����...</a>";
exit;
} 
if (empty($email))
{
echo "<b>� ��� � ����� ���������?!<p>";
echo "<a href=anketa.html>������� � �������� �����...</a>";
exit;
}
if (empty($kurs))
{
echo "<b>����� ���� ������� ���������� ������?<p>";
echo "<a href=anketa.html>������� � �������� �����...</a>";
exit;
}
if (empty($predmet))
{
echo "<b>� ��� �� ������� �������?<p>";
echo "<a href=anketa.html>������� � �������� �����...</a>";
exit;
}
$to = "reindeer.loki@gmail.com"; /*������� ���� �����!*/
$headers = "Content-type: text/plain; charset = windows-1251";
$subject = "������ �� ����������";
$message = "��� ����������: $name \n���� ����������: $email \n���� �������� ����������: $kurs\n������� ������� ����������: $predmet \n";
$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')
{
echo "<b>�������� ������� � ����� �������!!!<p>";
}
else 
{
echo "<p><b>�������� ����������, ���������� ��������� <a href=anketa.html>����� ������</a>";
}
?>