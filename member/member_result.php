<meta charset="UTF-8">

<?php


$name=$_POST['na'];
$gender=$_POST['who'];
$id=$_POST['id'];
$pw=$_POST['pass'];
$repw=$_POST['repass'];
$email=$_POST['emid']."@".$_POST['emju']; //select
$p=$_POST['phone']."-".$p2=$_POST['phone2']."-".$_POST['phone3'];
$ho=$_POST['hobby'];


if($pw==$repw) {
    include "db_information.php";
    $query="insert into membership values('','$name',$gender,'$id','$pw','$email','$p','$ho')";
    mysql_query($query,$conn);
  echo "<script>alert('가입완료!');</script>";
    mysql_close();
  }
 else echo "<script>alert('비밀번호를 다시 확인하세요!');</script>";

?>

