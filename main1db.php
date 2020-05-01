<?php
  $sql="insert into database2020(College_name,branch,closing_rank,flag) VALUES ('$_POST[lname1]','$_POST[lname2]',$_POST[lname3],$_POST[lname4])";
  //echo $sql;
  include "connection.php";
  $res=mysqli_query($conn,$sql);
  
header("Location: http://127.0.0.1/college/");
exit();
?>
