<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 17-04-18
 * Time: 09:12
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-zoek-klant2.php</title>
</head>
<body>

<h1>garage zoek op klant id 2</h1>
<p>op klantid gegevens zoeken uit de tabel klanten van de database garage</p>

<?php

$klantid = $_POST["klantidvak"];

require_once "connect.php";

$sql = $conn->prepare("
SELECT klantid, klantnaam, addres, postalcode, place FROM customer WHERE klantid = :klantid
");

$sql->execute(["klantid" => $klantid]);

echo "<table>";
foreach ($sql as $rij){
    echo "<tr>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["addres"] . "</td>";
    echo "<td>" . $rij["postalcode"] . "</td>";
    echo "<td>" . $rij["place"] . "</td>";
    echo "</tr>";
}
echo "</table><br />";
echo "<a href='../index.html'>terug naar het menu</a>";

?>
</body>
</html>
