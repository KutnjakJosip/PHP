<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Josip Kutnjak">
    <title>Vježba 11</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        button {
            padding: 10px;
            cursor: pointer;
        }

        p {
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php

function jeProst($broj) {
    if ($broj < 2) {
        return false; // Brojevi manji od 2 nisu prosti
    }

    for ($i = 2; $i <= sqrt($broj); $i++) {
        if ($broj % $i == 0) {
            return false; // Ako je broj djeljiv s nekim brojem, nije prost
        }
    }

    return true; // Ako nije pronađen djelitelj, broj je prost
}

// Provjera da li je korisnik poslao obrazac
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Unos broja od strane korisnika
    $unos = $_POST["broj"];

    // Provjera da li je unijeti broj prost
    if (jeProst($unos)) {
        echo "<p>$unos je prost broj.</p>\n";
    } else {
        echo "<p>$unos nije prost broj.</p>\n";
    }

    // Ispis svih prostih brojeva manjih od 100
    echo "<p>Prosti brojevi manji od 100 su: ";
$prviProsti = true;
for ($broj = 2; $broj < 100; $broj++) {
    if (jeProst($broj)) {
        echo ($prviProsti ? "" : ", ") . $broj;
        $prviProsti = false;
    }
}
echo "</p>";
}

?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="broj">Unesite broj za provjeru:</label>
    <input type="number" name="broj" required>
    <button type="submit">Provjeri</button>
</form>

</body>
</html>