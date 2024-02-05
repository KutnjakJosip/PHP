<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Josip Kutnjak">
    <title>Vjezba 8</title>

    

</head>
<body>

    <h1>Odabir vozila</h1>

    <?php
    $cars = array("Audi", "BMW", "Renault", "Citroen");
    $selectedCars = $_POST['selectedCars'] ?? [];

    if ($selectedCars) {
        echo "<div class='result'><p>Odabrano: " . implode(", ", $selectedCars) . "</p></div>";
    }
    ?>

    <form method='post' action=''>
        <p>Lista vozila:</p>
        <ul>
            <?php
            foreach ($cars as $car) {
                echo "<label><input type='checkbox' name='selectedCars[]' value='$car'> $car</label><br>";
            }
            ?>
        </ul>
        <input type='submit' value='Pošalji'>
    </form>

</body>
</html>
