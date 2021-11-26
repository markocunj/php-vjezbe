<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<?php
print '
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="post">
        <div>
            <label for="string">Unesi string:</label>
            <input type="text" name="string" size="50" value="">
        </div>
        <br />
        <div>
            <input type="submit" value="Izracunaj broj rijeci">
        </div>
        <br />
    </form>';
    if ($_POST["string"] != '') {
        print  $_POST["string"] . ' sadrži ' . str_word_count($_POST["string"])
        . ' riječi.</p>';
    }
    print '
</body>
</html>';
?>