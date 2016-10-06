<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
      $a = $_GET['a'];
      $b = $_GET['b'];
      $c = $_GET['c'];
      $interior = ($b * $b) - (4 * $a * $c);
      echo "funciona";
      $x1 = (-$b + (sqrt($interior))) / (2 * $a);
      $x2 = (-$b - (sqrt($interior))) / (2 * $a);
      echo "nofunciona";
      if($a != 0){
        echo "x puede ser " ,$x1, " y ", $x2;
      } else {
        echo "error matemático";
      }
    ?>
  </body>
</html>
