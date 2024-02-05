<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Josip Kutnjak">
    <title>Vježba 10</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recenica = $_POST['recenica'] ?? '';
    $brojRijeci = str_word_count($recenica);

    echo "<p>U rečenici: $recenica</p>";
    echo "<p>Broj riječi je: $brojRijeci</p>";
}
?>

<form method="post" action="">
    <label for="recenica">Unesite rečenicu:</label>
    <input type="text" name="recenica" id="recenica" required>
    <input type="submit" value="Broji riječi">
</form>

</body>
</html>
