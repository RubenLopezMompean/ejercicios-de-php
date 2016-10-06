<!DOCTYPE html>
<!--
Ejercicio 9
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar
almacenada en una variable.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
      $euro = 166.386;
      $pesetas = 500 / $euro;
      echo "500 pesetas son : ",round($pesetas, 2), "€";
    ?>
  </body>
</html>
