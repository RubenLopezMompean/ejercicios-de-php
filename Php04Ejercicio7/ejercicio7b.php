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
    <style>
      img#caja{
        width: 620px;																	/* Ancho recuadro */
        height: 465px;																	/* Altura */
      }
    </style>
  </head>
  <body>
    <?php
      $numero = $_GET['numero'];
      $combinacion = $_GET['combinacion'];
    ?>
    <img src="./cajaFuerte.jpg" alt="caja" usemap="#caja">
    <map name="caja">
    <area shape="rect" coords="74,117,146,164" alt="uno" href="ejercicio7b.php" <?php $numero = 1 ?>>
    <area shape="rect" coords="161,117,230,164" alt="dos" href="ejercicio7b.php" <?php $numero = 2 ?>>
    <area shape="rect" coords="49,117,316,164" alt="tres" href="ejercicio7b.php" <?php $numero = 3 ?>>
   
    <area shape="rect" coords="74,178,146,225" alt="cuatro" href="ejercicio7b.php" <?php $numero = 4 ?>>
    <area shape="rect" coords="161,178,230,225" alt="cinco" href="ejercicio7b.php" <?php $numero = 5 ?>>
    <area shape="rect" coords="49,178,316,225" alt="seis" href="ejercicio7b.php" <?php $numero = 6 ?>>
   
    <area shape="rect" coords="74,240,146,285" alt="siete" href="ejercicio7b.php?numero=7&&combinacion<?= $combinacion ?>">
    <area shape="rect" coords="161,240,230,285" alt="ocho" href="ejercicio7b.php" <?php $numero = 8 ?>>
    <area shape="rect" coords="49,240,316,285" alt="nueve" href="ejercicio7b.php" <?php $numero = 9 ?>>
    <area shape="rect" coords="161,300,230,345" alt="cero" href="ejercicio7b.php" <?php $numero = 0 ?>>
    </map>
    
    <input type="hidden" name="combinacion" value="<?= $combinacion = $combinacion.$digto ?>">
    
    <a href="destino.php?variable1=valor1&variable2=valor2&...">
  </body>
</html>
