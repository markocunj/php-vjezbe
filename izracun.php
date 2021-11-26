<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Izracun</title>
        <!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- End Bootstrap -->
	</head>
<body style="margin: 20px;">

       <?php
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $operator = $_POST['operator'];
            $result = '';
            if (is_numeric($number1) && is_numeric($number2)) {
                switch ($operator) {
                    case "+":
                       $result = $number1 + $number2;
                        break;
                    case "-":
                       $result = $number1 - $number2;
                        break;
                    case "*":
                        $result = $number1 * $number2;
                        break;
                    case "/":
                        $result = $number1 / $number2;
                }
            }
        print '
        <h1 style="margin-bottom:10px;font-size:14px;">Izracun</h1>
        <form action="" method="post" id="calculator">
            <div class="form-group">
		<label for="fname">Upiši prvi broj *</label>
                <input type="number" name="number1" id="number1" required="required" value="'. $number1 . '">
            </div>
            <div class="form-group">
                <label for="fname">Upiši drugi broj *</label>
                <input type="number" name="number2" id="number2" required="required" value="'. $number2 . '">
            </div>
            <div class="form-group">
                    Rezultat: ' . $result . '
            </div>
            <input type="submit" name="operator" value="+" class="btn btn-secondary">
            <input type="submit" name="operator" value="-" class="btn btn-secondary">
            <input type="submit" name="operator" value="*" class="btn btn-secondary">
            <input type="submit" name="operator" value="/" class="btn btn-secondary">
        </form>';
    ?>
</body>
</html>