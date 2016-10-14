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
    Ejercicio 4
    Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
    separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
    cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
    Los números que se han cambiado deben aparecer resaltados de un color diferente.
    <?php   
      if (!isset($_GET['numeroTexto'])) {
        for($i = 0; $i < 100; $i++){
          $numero[$i] = rand(0,20);
          echo $numero[$i]. " ";
        }
        $numeroTexto = implode(" ", $numero);
    ?>
    <br>
        <form action="#" method="get">
        Introduzca un número:
        <input type="number" name ="numeroUno" autofocus>
        <input type="number" name ="numeroDos">
        <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
        <input type="submit" value="OK">
        </form>
        <?php
      } else {
        $numeroTexto = $_GET['numeroTexto'];
        $num1 = $_GET['numeroUno'];
        $num2 = $_GET['numeroDos'];
        // espacios de la cadena
        $numero = explode(" ", $numeroTexto);
        
        foreach($numero as $resultado){
          if($resultado == $num1){
            echo "<b>".$num2."</b> ";
          } else {
            echo $resultado." ";
          }
        }
      }

        ?>
  </body>
</html>
