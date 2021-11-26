<?php
echo "<p>Lista vozila:</p><ul>";
$cars = array("Audi", "BMW", "Renault", "Citroen");
echo "<form method='post'>";

$auto = $_POST['auto'];

foreach ($cars as $car) {
    echo "<input required type='radio' name='auto' value='". $car . "'>". $car ."</input><br />";
}
echo "<br /><button type='submit'>Ispisi</button>";
echo "</form></ul>";

echo $auto;
?>
