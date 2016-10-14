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
      .num {
        display:inline-block;
        padding:5px 20px;
        text-align:center;
        border:1px solid black;
      }
    </style>
  </head>
  <body>
    Ejercicio 1
    Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
    Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
    almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
    almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
    los tres arrays dispuesto en tres columnas.</br>

    <div class="num">
      <h4>numero</h4>
    <?php
      for($i = 0; $i < 20; $i++){
        $numero[$i] = rand(0,100);
      }
      foreach ($numero as $n){
        echo $n."<hr> ";
      }
      ?>
    </div>
    <div class="num">
      <h4>cuadrado</h4>
    <?php 
      for($i = 0; $i < 20; $i++){
        $cuadrado[$i] = $numero[$i] * $numero[$i];
      }
      foreach ($cuadrado as $cuad){
        echo $cuad."<hr> ";
      }
      ?>
    </div>
    <div class="num">
      <h4>cubo</h4>
      <?php
      for($i = 0; $i < 20; $i++){
        $cubo[$i] = $numero[$i] * $numero[$i] * $numero[$i];
      }
      foreach ($cubo as $cub){
        echo $cub."<hr> ";
      }
    ?>
    </div>
  </body>
</html>
