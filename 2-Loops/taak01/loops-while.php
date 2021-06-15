<?php
$leeftijd = 0;
echo "<ul>";

while ($leeftijd<18){
    echo "<li>Ik ben $leeftijd jaar, dus ik mag nog niet stemmen<br></li>";
    $leeftijd += 1;
}
echo "<li>Ik ben $leeftijd jaar oud, dus ik heb stemrecht!</li>";
echo "</ul>";
?>