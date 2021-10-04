<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "naam: ";
    $achternaam = $_POST['Naam2'];
    echo $achternaam;
    if (empty($achternaam)) {
        echo "achteraam is empty";
        echo "<br>";
    } else {
    }
    echo "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Achternaam: ";
    $achternaam = $_POST['Achternaam'];
    echo $achternaam;
    if (empty($achternaam)) {
        echo "achteraam is empty";
        echo "<br>";
    } else {
    }
    echo "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Klas: ";
    $klas = $_POST['Klas'];
    echo $klas;
    if (empty($klas)) {
        echo "Klas is empty";
        echo "<br>";
    } else {
    }
    echo "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Leeftijd: ";
    $leeftijd = $_POST['Leeftijd'];
    echo $leeftijd;
    if (empty($leeftijd)) {
        echo "Leeftijd is empty";
        echo "<br>";
    } else {
    }
    echo "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Woonplaats: ";
    $woonplaats= $_POST['Woonplaats'];
    echo $woonplaats;
    if (empty($woonplaats)) {
        echo "woonplaats is empty";
        echo "<br>";
    } else {
    }
    echo "<br>";
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Adres: ";
        $adres = $_POST['Adres'];
        echo $adres;
        if (empty($adres)) {
            echo "adres is empty";
            echo "<br>";
        } else {
        }
        echo "<br>";
}
?>
