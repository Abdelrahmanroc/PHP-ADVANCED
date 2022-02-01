<!DOCTYPE html>
<html>
<body>

<?php
$student = array ("voornaam"=>"Abdelrahman","achternaam"=>"Mohamed","Klas"=>"LCTSDO1C","leeftijd"=>"23");
echo "gegevens Abdelrahman Mohamed:";
echo "<br>";
echo "voornaam :" . $student["voornaam"];
echo "<br>";
echo "achternaam :" . $student["achternaam"];
echo "<br>";
echo "Klas :" . $student["Klas"];
echo "<br>";
echo "leeftijd :" . $student["leeftijd"] ."jaar";
echo "<br>";
?>

</body>
</html>