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
    Ejercicio 3
    Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
    elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
    la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
    muestra el contenido del array.
    <?php
      $n = $_GET['n'];
      $rotado;
      $contadorNumeros = $_GET['contadorNumeros'];
      $numeroTexto = $_GET['numeroTexto'];
      if (!isset($n)) {
        $contadorNumeros = 0;
        $numeroTexto = "";
      }
      // Muestra los números introducidos
      if ($contadorNumeros == 6) {
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros
        // espacios de la cadena
        $numero = explode(" ", $numeroTexto);
        
        echo "Los números introducidos son: ";
        foreach ($numero as $n) {
          echo $n, " ";
        }
        $rotado[0] = $numero[5];
        for($i = 1 ; $i <= 5; $i++){
          $rotado[$i] = $numero[$i-1];
        }
        foreach ($rotado as $entero){
          echo "<br>".$entero;
        }
        echo "<br>".$numero[3];
        echo "<br>".$rotado[5];
      }
      // Pide número y añade el actual a la cadena
      if (($contadorNumeros < 6) || (!isset($n))) {
?>
<form action="#" method="get">
Introduzca un número:
<input type="number" name ="n" autofocus>
<input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
<input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
<input type="submit" value="OK">
</form>
<?php
}
?>
  </body>
</html>
