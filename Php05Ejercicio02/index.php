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
    Ejercicio 2
    Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
    junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
    <?php
      $n = $_GET['n'];
      $contadorNumeros = $_GET['contadorNumeros'];
      $numeroTexto = $_GET['numeroTexto'];
      $maximo = $_GET['maximo'];
      $minimo = $_GET['minimo'];
      if (!isset($n)) {
      $contadorNumeros = 0;
      $minimo = 10000;
      $numeroTexto = "";
      } else if($maximo < $n){
            $maximo = $n;
      } else if($minimo > $n){
        $minimo = $n;
      }
      // Muestra los números introducidos
     else if ($contadorNumeros == 10) {
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros
        // espacios de la cadena
        $numero = explode(" ", $numeroTexto);
        echo "Los números introducidos son: ";
        foreach ($numero as $n) {
          
        echo $n, " ";
      }
      echo "<br>maximo: ".$maximo."<br>"."minimo: ".$minimo;
    }
    // Pide número y añade el actual a la cadena
    if (($contadorNumeros < 10) || (!isset($n))) {
  ?>
  <form action="#" method="get">
  Introduzca un número:
  <input type="number" name ="n" autofocus>
  <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
  <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
  <input type="hidden" name="maximo" value="<?=$maximo?>">
  <input type="hidden" name="minimo" value="<?=$minimo?>">
  <input type="submit" value="OK">
  </form>
  <?php
}
?>
  </body>
</html>
