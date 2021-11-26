
<form method="post">
  <input type="number" name="broj" required />
  <br />
  <input type="submit" class="button" value="Provjeri"/>
</form>


<?php 
    $broj = $_POST['broj'];
    $count = 0;

    
    for ( $i=1; $i <= $broj; $i++)  
    {  
        if($i == 1 || $i == $broj){
            continue;
        }
        if (($broj % $i)==0)  
        {  
            $count++;
        }  
    }  
    if($count == 0){
        echo "Broj je prost.";
    }

    echo "Prosti brojevi do 100: ";
    for($i = 1; $i <= 100; $i++){
        if ($i == 2 || $i == 3)
        {
            echo $i . " ";
        }
        if ($i <= 1 || $i % 2 == 0 || $i % 3 == 0)
        {
            continue;
        }
        for ($j = 5; $j * $j <= $i; $j += 6)
        {
            if ($i % $j == 0 || $i % ($j + 2) == 0)
            {
                continue;
            }
        }

        echo $i . " ";
    }
?>