<!DOCTYPE html>
<!--
Ejercicio 3
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <style>
    table,tr,td{
      border:1px solid black;
      border-collapse: collapse;
      margin:auto;
      text-align:center;
    }
    td{
      padding:30px;
    }
  </style>
  <body>
    <table>
    <?php
      echo "<tr><td>cat</td><td>gato</td></tr>";
      echo "<tr><td>cat</td><td>gato</td></tr>";
      echo "<tr><td>cat</td><td>gato</td></tr>";
      echo "<tr><td>cat</td><td>gato</td></tr>";
      echo "<tr><td>cat</td><td>gato</td></tr>";
      echo "<tr><td>cat</td><td>gato</td></tr>";
      echo "<tr><td>cat</td><td>gato</td></tr>";
      echo "<tr><td>cat</td><td>gato</td></tr>";
      echo "<tr><td>cat</td><td>gato</td></tr>";
    ?>
    </table>
  </body>
</html>
