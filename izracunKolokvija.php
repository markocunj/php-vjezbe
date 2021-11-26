<form method="post">
  <input type="number" name="prvi_kolk" required class="button"/>
  <br />
  <input type="number" name="drugi_kolk" required class="button"/>
  <br />
  <input type="submit" class="button" value="Izračunaj"/>
</form>


<?php 
    $prvi = $_POST['prvi_kolk'];
    $drugi = $_POST['drugi_kolk'];
    $krajnjaOcjena = ($prvi+$drugi)/2;

    if($prvi == 1 && $drugi == 1){
        $krajnjaOcjena = 1;
        echo "Zavrsna ocjena: " . $krajnjaOcjena;
    }
    else if ($prvi < 1 || $prvi > 5 || $drugi < 1 || $drugi > 5){
        echo "Pogresan unos.";
    }
    else if ($prvi != 0 && $drugi != 0){
        echo "Zavrsna ocjena : " . $krajnjaOcjena;
    }

?>