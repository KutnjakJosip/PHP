<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Josip Kutnjak">
    <title>Vježba 9</title>

    

</head>
<?php

function jeDucanOtvoren() {
    $trenutnoVrijeme = new DateTime();
    $dan = $trenutnoVrijeme->format('N'); 

    $blagdaniIPraznici = [
        '2023-01-01', // Nova godina
        '2023-01-06', // Sveta tri kralja
        '2023-04-09', // Uskrs
        '2023-04-10', // Uskrsni ponedjeljak
        '2023-05-01', // Praznik rada
        '2023-05-30', // Dan drzavnosti
        '2023-06-08', // Tijelovo
        '2023-06-22', // Dan antifasisticke borbe
        '2023-08-05', // Dan pobjede
        '2023-08-15', // Velika Gospa
        '2023-11-01', // Dan svih svetih
        '2023-11-18', // Dan sjecanja na zrtve
        '2023-12-25', // Bozic
        '2023-12-26', // Sveti Stjepan
    ];

    $trenutniDatum = $trenutnoVrijeme->format('Y-m-d');

    if (array_key_exists($trenutniDatum, $blagdaniIPraznici)) {
        // Dućan je zatvoren na blagdane i praznike
        echo "Dućan je zatvoren danas ({$blagdaniIPraznici[$trenutniDatum]}) u vremenu od 00:00 do 23:59.";
        return false;
    }

    echo "Trenutni dan: ";
    switch ($dan) {
        case 1: echo "Ponedjeljak"; break;
        case 2: echo "Utorak"; break;
        case 3: echo "Srijeda"; break;
        case 4: echo "Četvrtak"; break;
        case 5: echo "Petak"; break;
        case 6: echo "Subota"; break;
        case 7: echo "Nedjelja"; break;
    }

    echo "<br>Trenutni sat: " . $trenutnoVrijeme->format('H:i');
    echo "<br>";

    if ($dan == 6 && $trenutnoVrijeme->format('H') >= 9 && $trenutnoVrijeme->format('H') < 14) {
        // Radno vrijeme subotom od 9 do 14
        return true;
    } elseif ($dan == 6 && $trenutnoVrijeme->format('H') >= 14) {
        // Dućan je zatvoren nakon 14h subotom
        return false;
    } elseif ($dan == 7) {
        // Dućan je zatvoren nedjeljom
        return false;
    } elseif ($trenutnoVrijeme->format('H') >= 8 && $trenutnoVrijeme->format('H') < 20) {
        // Radno vrijeme od ponedjeljka do petka od 8 do 20
        return true;
    } else {
        // Dućan je zatvoren van radnog vremena
        return false;
    }
}

// Provjera radnog vremena
if (jeDucanOtvoren()) {
    echo "Dućan je trenutno otvoren.";
} else {
    echo "Dućan je trenutno zatvoren.";
}

?>
