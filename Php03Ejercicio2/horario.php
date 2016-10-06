<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
      $horario = $_GET['horario'];

      switch ($horario){
        case (($horario >= 6) && ($horario <= 12)):
          echo "Buenos días";
          break;
        case (($horario >= 13) && ($horario <= 20)):
          echo "Buenas tardes";
          break;
        case (($horario >= 21) && ($horario <= 24) || ($horario >= 1) && ($horario <=5)):
          echo "Buenas noches";
          break;
        default:
      }
    ?>
  </body>
</html>
