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

//��������� ������
OpenTable();
echo"<p class=\"title\">$mod_title</p>";
CloseTable();

//�������� �����
OpenTable();
echo"<p class=\"option\">$bk_title</p>";
CloseTable();


if (!isset($bk)){
	//����������
	OpenTable();
	echo "<b>����������:</b><br><br>";
	$kol=count($arr);
	echo "<ul>";
	for($i=0; $i<$kol; $i++)
	echo "<li><a href=\"?mod=books&bk=".$floder."&f=".$i."\">".$arr[$i]."</a><br>";
	echo "</ul>";
	CloseTable();
	}
else{
	//�����
	OpenTable();
	echo"<p><center><b>$arr[$f]</b></center></p>";
	include ("modules/$mod/$bk/$f.html");
	CloseTable();

	//���������
	OpenTable();
	if ($f==0){
		$next=$f+1;
		echo"<center><a href=#>������</a> | <a href=?mod=books&bk=".$floder."&f=".$next.">���������</a> ></center>";
		}
	else if ($f==count($arr)-1){
		$prev=$f-1;
		echo"<center>< <a href=?mod=books&bk=".$floder."&f=".$prev.">����������</a> | <a href=#>������</a></center>";
		}
	else{
		$next=$f+1;
		$prev=$f-1;
		echo"<center>< <a href=?mod=books&bk=".$floder."&f=".$prev.">����������</a> | <a href=#>������</a> | <a href=?mod=books&bk=".$floder."&f=".$next.">���������</a> ></center>";
	}

	CloseTable();
	}

include("footer.php");
?>


