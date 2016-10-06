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
    <h3>Ejercicio 6</h3>
    <h4>Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while .</h4>
    <?php
      $num = 320;
      do{
        echo $num, "</br>";
        $num = $num - 20;
      }while($num >= 160);
    ?>
  </body>
</html>
