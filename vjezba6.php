<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Kalkulator</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Josip Kutnjak">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- End Bootstrap -->
	</head>
<body style="margin: 20px;">

       <?php
            $first_num = $_POST['first_num'];
            $second_num = $_POST['second_num'];
            $operator = $_POST['operator'];
            $result = '';
            if (is_numeric($first_num) && is_numeric($second_num)) {
                switch ($operator) {
                    case "+":
                       $result = $first_num + $second_num;
                        break;
                    case "-":
                       $result = $first_num - $second_num;
                        break;
                    case "*":
                        $result = $first_num * $second_num;
                        break;
                    case "/":
                        $result = $first_num / $second_num;
                }
            }
        print '
        <h1 style="margin-bottom:10px;font-size:14px;">Kalkulator (Switch naredba)</h1>
        <form action="" method="post" id="calculator">
            <div class="form-group">
		<label for="fname">Upiši prvi broj *</label>
                <input type="number" name="first_num" id="first_num" required="required" value="'. $first_num . '">
            </div>
            <div class="form-group">
                <label for="fname">Upiši drugi broj *</label>
                <input type="number" name="second_num" id="second_num" required="required" value="'. $second_num . '">
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