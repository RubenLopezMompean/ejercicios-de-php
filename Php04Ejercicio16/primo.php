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
      $primo = false;
      $i = 2;
      do{
        $calculo = floor($numero % $i);
        if($calculo == 0){
          $primo = true;
        }
        $i++;
      }while (($i < $numero));
      if(!$primo){
        echo "es primo";
      } else {
        echo "no es primo";
      }
    ?>
  </body>
</html>
