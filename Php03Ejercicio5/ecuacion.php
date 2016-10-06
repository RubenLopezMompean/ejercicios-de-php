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
      $x = round(($b * (-1) / $a),2);
      
      if($a != 0){
        echo $x;
      } else {
        echo "error matemático";
      }
    ?>
  </body>
</html>
