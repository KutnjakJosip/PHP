<!DOCTYPE html>
<html>
<head>
    <title>Izračun ocjene</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="author" content="Josip Kutnjak">
</head>
<body>
    <h1>Izračun ocjene iz predmeta</h1>
    <form method="POST">
        Unesite ocjenu I. kolokvija: <input type="number" name="kolokvij1" min="1" max="5" required><br>
        Unesite ocjenu II. kolokvija: <input type="number" name="kolokvij2" min="1" max="5" required><br>
        <input type="submit" value="Izračunaj">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kolokvij1 = $_POST["kolokvij1"];
        $kolokvij2 = $_POST["kolokvij2"];

        // Provjera
        if (empty($kolokvij1) || empty($kolokvij2)) {
            echo "<p class='error'>Molimo vas da unesete ocjene za oba kolokvija.</p>";
        } else {
            $prosjek = ($kolokvij1 + $kolokvij2) / 2;

            if ($kolokvij1 >= 1 && $kolokvij1 <= 5 && $kolokvij2 >= 1 && $kolokvij2 <= 5) {
                if ($kolokvij1 <= 1 || $kolokvij2 <= 1) {
                    $konacna_ocjena = "Negativna";
                } else {
                    if ($prosjek >= 4.5) {
                        $konacna_ocjena = 5;
                    } elseif ($prosjek >= 3.5) {
                        $konacna_ocjena = 4;
                    } elseif ($prosjek >= 2.5) {
                        $konacna_ocjena = 3;
                    } elseif ($prosjek >= 1.5) {
                        $konacna_ocjena = 2;
                    } else {
                        $konacna_ocjena = 1;
                    }
                }

                echo "<div class='result'>";
                echo "Prosjek: $prosjek<br>";
                echo "Konačna ocjena: $konacna_ocjena";
                echo "</div>";
            } else {
                echo "<p class='error'>Unesene ocjene nisu valjane. Ocjene moraju biti između 1 i 5.</p>";
            }
        }
    }
    ?>
</body>
</html>
