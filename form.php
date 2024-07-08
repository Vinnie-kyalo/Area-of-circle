<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
   <form action="form.php" method="post">
    <label >Radius</label>
    <input type="text" name="Radius">
    <input type="submit" value="calculate">

   </form> 
<?php

   $radius=$_POST["Radius"];
   $circumfence=null;
   $area=null;

   $circumfence=2*pi()*$radius;

   $area= pi()* pow($radius,2);

   $area=round($area,2);
   $circumfence=round($circumfence,2);
   
   echo "circumfence ={$circumfence}";
   echo "Area ={$area}";



?>
</body>
</html>