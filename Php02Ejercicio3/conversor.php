<?php
  $a = $_GET['pesetas'];
  $b = round($a / 166.38, 2);
  echo $a, " pesetas son ", $b, " euros";
?>
<br>
<h3>El resultado es: <?php echo $b ?> euros</h3>

