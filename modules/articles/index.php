<?
if (!defined('FILES_MOD')) {
	Header("Location: ../../index.php");
	exit;
	}

if ($f=="index"){
$pagetitle = "| Статьи";
$description="Статьи";
$keywords="Переводы древних песенных наставлений; Заповедь Дунг Хай-Чуаня; 36 песен прикладнй техники багуа-чжан; Александр Дан ©  Пикантная приправа к Христианству.";

include("header.php");

OpenTable();
echo"<p class=\"title\">Статьи</p>";
CloseTable();

OpenTable();
?>
<br>
<ul>
<li><a href=?mod=articles&f=pesen1>Переводы древних песенных наставлений (Дается два разных перевода)</a>
<li><a href=?mod=articles&f=zapoved>Заповедь Дунг Хай-Чуаня (Дун Хайчуань)</a>
<li><a href=?mod=articles&f=bagua1>36 песен прикладнй техники багуа-чжан</a>
<li><a href=?mod=articles&f=pesen2>48 песен прикладной техники багуа-чжан. (Дается два разных перевода)</a>
<li><a href=?mod=articles&f=a_dan>Александр Дан ©  Пикантная приправа к Христианству.</a>
</ul>
<?
CloseTable();
include("footer.php");

}
else {$modpath = "modules/$mod/$f".".php"; include "$modpath";}

?>