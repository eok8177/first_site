<?
if (!defined('FILES_MOD')) die ("Illegal File Access");
define('FILES_BLOCK', true);
require_once("config/global-config.php");

function ShowBlocks(){
echo "<td width=3></td>";
  echo "<td width=260>";
	OpenBlTable("����������");
	include("blocks/bl-books.php");
	CloseTable();

	OpenBlTable("������");
	include("blocks/articles.php");
	CloseTable();
	echo "</center>";

  echo "</td>";
	}
?>
