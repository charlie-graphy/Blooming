<meta charset="utf-8">
<style type="text/css">
.fb{color:white; font-weight:bold;}
.fb2{font-size:9pt;};
</style>
<?php
include "db_information.php";
$id=$_GET['id'];
$query="select * from board where id=".$id;
$result=mysql_query($query,$conn);
$re = mysql_fetch_row($result);

?>
<center>
<form method=post action='update.php?abc=<?php echo $re[0]?>'>
<table border=1 cellspacing=0>
	<tr align=center bgcolor="#360033">
		<td class=fb colspan=2 align=center>글 쓰 기</td>
	</tr>
	<tr>
		<td align=center>이메일</td>
		<td><input type=text name="email" value='<?php echo $re[2]?>'></td>
	</tr>
	<tr>
		<td align=center>제목</td>
		<td><input type=text name="title" value='<?php echo $re[4]?>'></td>
	</tr>
	<tr>
		<td align=center>내용</td>
		<td><textarea name="comment" rows=10 cols=80><?php echo $re[5]?></textarea></td>
	</tr>
	<tr>
		<td align=center>비밀번호 입력</td>
		<td class=fb2><input type=text name="pass" value="">(수정 삭제시 반드시 필요)</td>
	</tr>
	<tr>
		<td colspan=2 align=center><input type=submit name="update" value="수정완료"></td>
	</tr>
</table>
</form>
</center>