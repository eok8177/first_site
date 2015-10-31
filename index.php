<?
define('FILES_MOD', true);
require_once("functions/functions.php");

if (isset($_GET['f']) || isset($_POST['f'])) {
	$f = trim(isset($_POST['f']) ? $_POST['f'] : $_GET['f']);
	if (preg_match("/[^a-zA-Z0-9_]/", $f)) {
		Header("Location: index.php");
		exit;
	}
} else {
	$f = "index";
}

if (isset($_GET['mod']) || isset($_POST['mod'])) {
	$mod = trim(isset($_POST['mod']) ? $_POST['mod'] : $_GET['mod']);
	if (preg_match("/[^a-zA-Z0-9_]/", $mod)) {
		Header("Location: index.php");
		exit;
	}
} else {
	$mod = "main";
}
	$modpath = "modules/$mod/index.php";

//Для книг
if (isset($_GET['bk']) || isset($_POST['bk'])) {
	$bk = trim(isset($_POST['bk']) ? $_POST['bk'] : $_GET['bk']);
	if (preg_match("/[^a-zA-Z0-9_]/", $bk)) {
		Header("Location: index.php");
		exit;
	}
	$modpath = "modules/$mod/index.php";
}

if (file_exists($modpath)) {
	include($modpath);
} else {
	Header("Location: index.php");
	exit;
}
?>