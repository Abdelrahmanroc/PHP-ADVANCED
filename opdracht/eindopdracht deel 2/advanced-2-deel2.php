<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<center>

<?php
echo "<table style=border-spacing:" . $_POST['tabelrand'] . "px>";

$gegevens = array(
    "Naam" => "Abdelrahman Mohamed<br>",
    "Leeftijd" => "23 jaar<br>",
    "Woonplaats" => "Amstelveen<br>",
    "Muzieksmaak" => "Rapmuziek<br>",
    "Sport" => "Zwemen en Voetballen<br>"
);

function maakRij($key, $value){
    echo "<body style=background-color:" . $_POST['color2'] . ">
    <tr>
    <td style=padding:" . $_POST['padding'] . "px> <p style=color:" . $_POST['color'] . ">" . $key . "</p> </td>
    <td style=padding:" . $_POST['padding'] . "px> <p style=color:" . $_POST['color'] . ">" . $value . "</p> </td>
    </tr>";

}
foreach ($gegevens as $keys => $values) {
    maakRij($keys, $values);
    }

echo "</table>";
?>

</center>

</body>
</html>