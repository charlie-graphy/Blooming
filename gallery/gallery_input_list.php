<meta charset="utf-8">
<style>
.hi {border:2px solid black; width:400px;}
.hi2 {border:2px solid black; width:400px; height:70px; border-top-width:0px;}
</style>
<?php
include "db_information.php";
$query = "select * from gallery";
$result = mysql_query($query,$conn);
$num = mysql_num_rows($result);
?>
<form ENCTYPE="multipart/form-data" method=post action="gallery_input_result.php">
<center>
<div class=hi valign=middle>
<table align=center valign=center>
<tr align=center>
	<td width=100px>번호</td><td width=100px>이름</td><td width=100px>파일</td>
</tr>
<?php
for($i=0;$i<$num;$i++){
	$re=mysql_fetch_row($result);
	echo "<tr align=center><td>".$re[0]."</td>";
	echo "<td>".$re[1]."</td>";
	echo "<td><a href='img/".$re[2]."' target='_blank'><img src=img/".$re[2]." width =70 height=50></a></td></tr>";
}

?>
</table>
</div>
</form>
</center>