<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<form method="post">
  <input type="number" name="a" class="button"/>
  <br />
  <input type="number" name="b" class="button"/>
  <br />
  <input type="submit" class="button" value="Pošalji"/>
</form>


<?php 
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = (3*$a-$b)/2;
    echo "c = " . $c;
?>