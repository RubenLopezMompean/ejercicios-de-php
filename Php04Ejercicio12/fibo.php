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
      $numero1 = 1;
      $numero2 = 0;
      $suma;
      $contador = $_GET['numero'];
      if($contador == 1){
        echo $numero2;
      } else if($contador == 2){
        echo  $numero2, " | ",$numero1;
      } else if($contador == 3){
        echo  $numero2, " | ",$numero1, " | ", $numero2+$numero1;
      } else {
        $contador = $contador - 3;
        echo  $numero2, " | ",$numero1, " | ";
        do{
          $suma = $numero1 + $numero2;
          $numero2 = $numero1;
          $numero1 = $suma;
          echo $suma, " | ";
          $contador--;
        }while ($contador > 0);
        echo $suma = $numero1 + $numero2;
      }
    ?>
  </body>
</html>
