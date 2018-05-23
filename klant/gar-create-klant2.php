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
    <title>gar-create-klant2.php</title>
</head>
<body>

<h1>garage create klant 2</h1>
<p>een klant toevoegen aan de tabel klant in de database garage</p>

<?php

$klantid = NULL;
$klantnaam = $_POST["klantnaamvak"];
$klantadres = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats = $_POST["klantplaatsvak"];

require_once "connect.php";

$sql = $conn->prepare("INSERT INTO customer VALUES (

  :klantid, :klantnaam, :addres, :postalcode, :place
  
) ");

$sql ->bindParam(":klantid", $klantid);
$sql ->bindParam(":klantnaam", $klantnaam);
$sql ->bindParam(":addres", $klantadres);
$sql ->bindParam(":postalcode", $klantpostcode);
$sql ->bindParam(":place", $klantplaats);

$sql->execute();

echo "de klant is toegevoegd <br>";
echo "<a href='../index.html'> terug naar het menu"

?>

</body>
</html>
