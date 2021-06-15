<?php
echo "<ul>";
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
echo "<html>";
echo "<body>";
echo "<form>";
echo "<label for='KlassenId'>Ik zit in klas:</label>";

echo "<select id='KlassenId' name='KlassenId'>";
foreach ($klassen as $klas) {
    echo "<option value = $klas> <li>$klas</li></option>";
    
   
}
echo "</ul>";
echo "</select>";
echo "<input type='submit'>";
echo "</form>";
echo "</html>";
echo "</body>";
?>