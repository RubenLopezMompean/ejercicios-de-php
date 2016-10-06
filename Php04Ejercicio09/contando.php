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
      $numero = $_GET['numero'];
      $contador = 0;
      do{
      $cuenta = floor($numero / 10);
      $numero = $cuenta;
      $contador++;
      }while ($cuenta > 0);
      echo $contador + " ";
    ?>
  </body>
</html>
