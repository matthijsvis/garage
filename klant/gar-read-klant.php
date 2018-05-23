<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 16-04-18
 * Time: 13:19
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-read-klant.php</title>
</head>
<body>

<h1>garage read klant</h1>
<p>dit zijn alle gegevens uit de tabel klanten van de database garage</p>

<?php

require_once "connect.php";

$sql = $conn->prepare("
    SELECT klantid, klantnaam, addres, postalcode, place FROM customer
");

$sql->execute();

echo "<table>";
    foreach ($sql as $rij) {
        echo "<tr>";
        echo "<td>" . $rij["klantid"] . "<td>";
        echo "<td>" . $rij["klantnaam"] . "<td>";
        echo "<td>" . $rij["addres"] . "<td>";
        echo "<td>" . $rij["postalcode"] . "<td>";
        echo "<td>" . $rij["place"] . "<td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<a href='../index.html'> terug naar het menu";

?>

</body>
</html>
