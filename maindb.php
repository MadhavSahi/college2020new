<!doctype html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    <?php include "common.php"?>
    </style>
</head>
<title></title>
</head>
<body>
    <?php
    include "header.php"
    ?>
<div class=''>
<center><button class="btn btn-dark "  onClick="location.href='index.php'">GO BACK</button></center>

<p>Your rank is :
<button class="btn btn-dark " >
<?php
echo "$_POST[rank]";
?>
</button></p>

</div>
<table class="table table-bordered ">
  <thead class=" thead-dark">
    <tr>
      <th scope="col">College Name</th>
      <th scope="col">College branch</th>
      <th scope="col">Closing rank</th>
    </tr>
  </thead>
    <?php 
    $sql="select database2020.College_name,database2020.branch,database2020.closing_rank FROM database2020 WHERE database2020.closing_rank>= $_POST[rank] AND database2020.flag=0 order by database2020.closing_rank ASC";
    include "connection.php";
    // echo $sql;
    $res=mysqli_query($conn,$sql);
    
    while($column=mysqli_fetch_array($res))
    echo "<tbody>
    <tr>
      <td>$column[0]</td>
      <td>$column[1]</td>
      <td>$column[2]</td>
    </tr>
    </tbody>"
    ?>
     
</table>
<div class='botoom'>
<center><button class="btn btn-dark "  onClick="location.href='index.php'">GO BACK</button><center>
</div>  </html>