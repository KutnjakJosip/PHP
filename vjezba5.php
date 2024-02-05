<!DOCTYPE html>
<html>
<head>
    <title>Pogodi broj</title>
    <meta name="author" content="Josip Kutnjak">
</head>
<body>
    <h1>Igra - Pogodi broj</h1>
    <form method="POST">
        Unesite broj između 1 i 9: <input type="text" name="korisnikov_broj">
        <input type="submit" value="Pogodi">
    </form>

    <?php
    
    $zamisljeni_broj = rand(1, 9);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $korisnikov_broj = $_POST["korisnikov_broj"];

       
        if ($korisnikov_broj == $zamisljeni_broj) {
            echo "Bravo! Pogodili ste $zamisljeni_broj!";
        } else {
            echo "Broj nije pogoden. Pokusajte ponovno.";
        }
    }
    ?>
</body>
</html>
