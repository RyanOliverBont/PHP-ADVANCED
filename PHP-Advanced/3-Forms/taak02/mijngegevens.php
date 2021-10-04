<?php
if(isset($_POST['submit'])) {
    $naam=$_POST['Naam'];
    $achternaam=$_POST['Achternaam'];
    $klas=$_POST['Klas'];
    $leeftijd=$_POST['Leeftijd'];
    $adres=$_POST['Adres'];
    $Woonplaats=$_POST['Woonplaats'];
    $Geslacht=$_POST['Geslacht'];

    echo "Jouw voornaam is : ".$naam."<br>";
    echo "Jouw achternaam is : ".$achternaam."<br>";
    echo "Jouw email is : ".$email."<br>";

}if(empty($naam)) {
    echo "naam is empty";




?>
