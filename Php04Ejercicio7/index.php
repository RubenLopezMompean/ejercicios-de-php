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
    <h3>Ejercicio 7</h3>
    <h4>Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
    programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
    “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
    satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.</h4>

   
    <?php
    
      if(!isset($_POST['intentos'])){
        $numIntroducido = 0;
        $intentos = 4;
        $combinacion = rand(1000,9999);
      } else {
        $numIntroducido = $_POST['numIntroducido'];
        $intentos = $_POST['intentos'];
        $combinacion = $_POST['combinacion'];
      }
      echo $combinacion, "</br>";
      if($numIntroducido == $combinacion) {
        echo "Acceso permitido";
      } else if($intentos == 0){
        echo "Te has quedado sin intentos.";
      } else {
        echo "Te quedan ", $intentos, " oportunidades para abrir la caja fuerte.<br>";
            $intentos--;
            echo "Introduce un número de cuatro cifras.";
      }  
    ?>
    <form action="index.php" method="post">
    <input type="number" min=0 max=9999 name="numIntroducido" autofocus>
    <input type="hidden" name="intentos" value="<?= $intentos ?>">
    <input type="hidden" name="combinacion" value="<?= $combinacion ?>">
    <input type="submit" value="Continuar">
    </form>
    
  </body>
</html>
