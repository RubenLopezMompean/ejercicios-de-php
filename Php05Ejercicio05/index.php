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
    Ejercicio 5
    Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
    año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras
    del diagrama se pueden dibujar a base de la concatenación de una imagen.
    <?php   
      if (!isset($_GET['numeroTexto'])) {
        
    ?>
    <br>
        <form action="#" method="get">
        Introduzca un número:
        <input type="text" name ="enero"><br>
        <input type="text" name ="febrero"><br>
        <input type="text" name ="marzo"><br>
        <input type="text" name ="abril"><br>
        <input type="text" name ="mayo"><br>
        <input type="text" name ="junio"><br>
        <input type="text" name ="julio"><br>
        <input type="text" name ="agosto"><br>
        <input type="text" name ="septiembre"><br>
        <input type="text" name ="octubre"><br>
        <input type="text" name ="noviembre"><br>
        <input type="text" name ="diciembre"><br>
        <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
        <input type="submit" value="OK">
        </form>
        <?php
      } else {
        $meses = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto",
            "septiembre","octubre","noviembre","diciembre"];
        $temperatura = array("enero" => $_GET['enero'],"febrero" => $_GET['febrero'],
            "marzo" => $_GET['marzo'],"abril" => $_GET['abril'],"mayo" => $_GET['mayo'],
            "junio" => $_GET['junio'],"julio" => $_GET['julio'],"agosto" => $_GET['agosto'],
            "septiembre" => $_GET['septiembre'],"octubre" => $_GET['octubre'],
            "noviembre" => $_GET['noviembre'],"diciembre" => $_GET['diciembre']);

        foreach($temperatura as $resul){
          var_dump($resul);
          echo "<br>";
        }
      }

        ?>
  </body>
</html>
