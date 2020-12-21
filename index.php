<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  body{
    background: purple;
    color: while;
  }
</style>

<body>
  
  <h1>
   <?php

    //  definisco e stampo la variabile
      $str = "Hello World";

    // stampo la lunghezza della stringa
     echo $str . "(" . strlen($str) . ")";

    ?>

  </h1>

  <h1>
    <?php

    // sostituisco la badword con ***
     $str1 = str_replace($_GET["badword"],"***",$str);

    //stampo 
     echo $str1 . "(" . strlen($str1) . ")";

    ?>
  </h1>

 


  
</body>
</html>