<?
if (!defined('FILES_MOD')) {
	Header("Location: ../../index.php");
	exit;
	}

if ($f=="index"){
$pagetitle = "| ������";
$description="������";
$keywords="�������� ������� �������� �����������; �������� ���� ���-�����; 36 ����� ��������� ������� �����-����; ��������� ��� �  ��������� �������� � ������������.";

include("header.php");

OpenTable();
echo"<p class=\"title\">������</p>";
CloseTable();

OpenTable();
?>
<br>
<ul>
<li><a href=?mod=articles&f=pesen1>�������� ������� �������� ����������� (������ ��� ������ ��������)</a>
<li><a href=?mod=articles&f=zapoved>�������� ���� ���-����� (��� ��������)</a>
<li><a href=?mod=articles&f=bagua1>36 ����� ��������� ������� �����-����</a>
<li><a href=?mod=articles&f=pesen2>48 ����� ���������� ������� �����-����. (������ ��� ������ ��������)</a>
<li><a href=?mod=articles&f=a_dan>��������� ��� �  ��������� �������� � ������������.</a>
</ul>
<?
CloseTable();
include("footer.php");

}
else {$modpath = "modules/$mod/$f".".php"; include "$modpath";}

?>