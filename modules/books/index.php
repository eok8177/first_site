<?

if (isset($bk)){
	include("modules/$mod/$bk/contents.php");
	$f=(int)$f;
	$pagetitle = "| ".$mod_title." | ".$bk_title." | ".$arr[$f]."";}
else{
	include("modules/$mod/$f/contents.php");
	$pagetitle = "| ".$mod_title." | ".$bk_title."";
    }

include("header.php");

//Заголовок модуля
OpenTable();
echo"<p class=\"title\">$mod_title</p>";
CloseTable();

//Название книги
OpenTable();
echo"<p class=\"option\">$bk_title</p>";
CloseTable();


if (!isset($bk)){
	//Содержание
	OpenTable();
	echo "<b>СОДЕРЖАНИЕ:</b><br><br>";
	$kol=count($arr);
	echo "<ul>";
	for($i=0; $i<$kol; $i++)
	echo "<li><a href=\"?mod=books&bk=".$floder."&f=".$i."\">".$arr[$i]."</a><br>";
	echo "</ul>";
	CloseTable();
	}
else{
	//Глава
	OpenTable();
	echo"<p><center><b>$arr[$f]</b></center></p>";
	include ("modules/$mod/$bk/$f.html");
	CloseTable();

	//Навигация
	OpenTable();
	if ($f==0){
		$next=$f+1;
		echo"<center><a href=#>наверх</a> | <a href=?mod=books&bk=".$floder."&f=".$next.">следующая</a> ></center>";
		}
	else if ($f==count($arr)-1){
		$prev=$f-1;
		echo"<center>< <a href=?mod=books&bk=".$floder."&f=".$prev.">предыдущая</a> | <a href=#>наверх</a></center>";
		}
	else{
		$next=$f+1;
		$prev=$f-1;
		echo"<center>< <a href=?mod=books&bk=".$floder."&f=".$prev.">предыдущая</a> | <a href=#>наверх</a> | <a href=?mod=books&bk=".$floder."&f=".$next.">следующая</a> ></center>";
	}

	CloseTable();
	}

include("footer.php");
?>


