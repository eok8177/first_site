<?
function ThemeHeader(){
global $sitename, $admmail, $mod;
?>
	<table width="100%" border=0 cellspacing=1 cellpadding=3 class=bgcolor4>
	<tr>
	<td class="bgcolor1">
		<table width="100%" border=0 cellspacing=0 cellpadding=0>
		<tr>
		<td height=60 width="50%" valign="middle">
		<a href="index.php?mod=main"><img src="images/logo.gif" border=0 alt="<?echo "$sitename - Главная";?>"></a>
<?  if($mod=="main") {include("code-banners-main.txt");} else {include("code-banners-other.txt");}
	include("code-banners-all.txt");?>
		</td>
		</tr>
		</table>
	</td>
	</tr>
	<tr>
	<th class="titleline">
		<table width="100%" border=0 cellspacing=0 cellpadding=0>
		<tr>
		<td width=50% align="left">
		<a href="?mod=main" title="Перейти на главную страницу сайта"><b>Главная</b></a> |
		<a href="http://myzone.ks.ua/forum/viewforum.php?f=45" title="Форум"><b>Форум</b></a>
		</td>
		<td align="right">
		<a href="#" onClick="window.external.addFavorite('http://www.mywdrag.ks.ua/', 'Белый Дракон'); return false;">Добавить в избранное</a> |
		<a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.mywdrag.ks.ua'); return false;" href="#" >Сделать стартовой</a>
		</td>
		</tr>
		</table>
	</th>
	</tr>
	</table>

	<table width="100%" border=0 cellspacing=2 cellpadding=0><tr><td width=1 height=1></td></tr></table>

	<table width="100%" cellpadding=0 cellspacing=0 border=0 class="bgcolor2">
	<tr valign="top">
<?
}

function ThemeFooter(){
global $admmail;
?>
	</tr>
	</table>

	<table width="100%" border=0 cellspacing=1 cellpadding=0><tr><td width=1 height=1></td></tr></table>

	<table width="100%" border=0 cellspacing=1 cellpadding=3 class="bgcolor4">
	<tr>
	<th class="titleline">
		<table width="100%" border=0 cellspacing=0 cellpadding=0>
		<tr>
		<td width="75%" align=center>
		<a href="?mod=main" title="Перейти на главную страницу сайта"><b>Главная</b></a> |
		<a href="http://www.myzone.ks.ua/forum/viewforum.php?f=45" title="Форум"><b>Форум</b></a> |
		<a href="mailto:<?echo$admmail?>" title="Написать нам на e-mail"><b>Обратная связь</b></a>

| Сайт разработан и оформлен: <a href="mailto:k-evgen@mail.ru">Evgen K</a> & <a href="mailto:wdrag@mail.ru">Amber</a>
		</td>
		</tr>
		</table>
	</th>
	</tr>
	</table>

	<table width="100%" border=0 cellspacing=2 cellpadding=0><tr><td width=1 height=1></td></tr></table>

<?}?>

<?function OpenBlTable($title="Навигация"){?>
	<center>
	<table width="100%" border=0 cellspacing=1 cellpadding=3 class="bgcolor4">
	<tr><th class="titleline"><?echo$title?></th></tr>
	<tr><td class="bgcolor1">
<?}?>

<?function OpenTable(){?>
	<center><table width="100%" border=0 cellspacing=1 cellpadding=5 class="bgcolor4">
	<tr><td class="bgcolor1">
<?}?>

<?function CloseTable(){?>
	</td></tr>
	</table></center>
	<table width="100%" border=0 cellspacing=1 cellpadding=0><tr><td width=1 height=1></td></tr></table>
<?}?>

