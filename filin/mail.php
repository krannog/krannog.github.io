<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['kurs'])) {$kurs = $_POST['kurs'];}
if (isset($_POST['predmet'])) {$predmet = $_POST['predmet'];}
if (isset($_POST['galka'])) {$galka = $_POST['galka'];}
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
if (empty($galka))
{
echo "<b>������������ � <a href=pravila.html>���������</a><p>";
echo "<a href=anketa.html>������� � �������� �����...</a>";
exit;
} 
$to = "glava_ordena@mail.ru"; /*������� ���� �����!*/
$headers = "Content-type: text/plain; charset = windows-1251";
$subject = "������ �� ����������";
$message = "��� ����������: $name \n���� ����������: $email \n���� �������� ����������: $kurs\n������� ������� ����������: $predmet \n�������� �� ��������� � ���������: $galka \n";
$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')
{
echo "<b>����� ������ � ����� �������!!!<p>";
}
else 
{
echo "<p><b>����� ������� ������ � �����, ��� ��� ������ �� �������, ���������� ��������� <a href=anketa.html>����� ������</a>";
}
?>