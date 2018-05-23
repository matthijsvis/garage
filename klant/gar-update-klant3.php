<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 17-04-18
 * Time: 09:45
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-klant3.php</title>
</head>
<body>
<h1>garage update klant 3</h1>
<p>klantgegevens wijzigen in de tabel klant van de database garage</p>

<?php
$klantid = $_POST["klantidvak"];
$klantnaam = $_POST["klantnaamvak"];
$klantadres = $_POST["klantadresvak"];
$klantpostocde = $_POST["klantpostcodevak"];
$klantplaats = $_POST["klantplaatsvak"];

require_once "connect.php";

$sql = $conn->prepare("UPDATE customer SET klantnaam=:klantnaam, addres=:addres, postalcode=:postalcode, place=:place WHERE klantid=:klantid");
$sql->bindParam(":klantnaam", $klantnaam);
$sql->bindParam(":addres",$klantadres );
$sql->bindParam(":postalcode",$klantpostocde );
$sql->bindParam(":place", $klantplaats);
$sql->bindParam(":klantid",$klantid );
$sql->execute();

echo "de klant is gewijzigd. <br>";
echo "<a href='../index.html'>terug naar het menu </a>";
?>

</body>
</html>
