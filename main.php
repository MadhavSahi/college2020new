<head>
<link rel="stylesheet"
          href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <style> 
        .input-icons i { 
            position: absolute; 
        } 
          
        .input-icons { 
            width: 100%; 
            margin-bottom: 10px; 
        } 
          
        .icon { 
            padding: 10px; 
            color: green; 
            min-width: 50px; 
            text-align: center; 
            
        } 
          
        .input-field { 
            width: 40%; 
            padding:3px;
            text-align: center; 
        } 
          
        h2 { 
            color: green; 
        } 

<?php include "common.css" ?>

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="input-container">
<form name="frm1" method="post" action="maindb.php">
<table>
<p class="text-center text-monospace display-3" >
ENTER RANK
</p>
<div class="input-icons"> 
<center><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i><input class="input-field" type="number" name="rank" require min="1" max="200000" alt="enter ">
</center>
    </div>
<br>
<center><button class="btn btn-dark">SUBMIT</button></center>
</table>
</form>
</div></body>
</html> 


