<meta charset="UTF-8">
<table border>
<tr><td>국어</td><td>영어</td><td>수학</td><td>총점</td><td>평균</td></tr>
<tr>
<?php
$kor=90;
$eng=80;
$math=80;
$tot=$kor+$eng+$math;
$avg=$tot/3;
echo "<td>".$kor."</td><td>".$eng."</td><td>".$math."</td><td>".$tot."</td><td>".$avg."</td>";

?>
</table>