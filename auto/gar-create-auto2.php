<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 16-04-18
 * Time: 13:03
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
</head>
<body>

<h1>garage create auto 2</h1>
<p>een auto toevoegen aan de tabel auto in de database garage</p>

<?php

$autoid = NULL;
$autokenteken = $_POST["autokentekenvak"];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];

require_once "../connect.php";

$sql = $conn->prepare("INSERT INTO car1 VALUES (

 :autoid, :kenteken, :merk, :type, :km
  
) ");

$sql ->bindParam(":autoid", $autoid);
$sql ->bindParam(":kenteken", $autokenteken);
$sql ->bindParam(":merk", $automerk);
$sql ->bindParam(":type", $autotype);
$sql ->bindParam(":km", $autokmstand);

$sql->execute();

echo "de auto is toegevoegd <br>";
echo "<a href='../index.html'> terug naar het menu"

?>

</body>
</html>
