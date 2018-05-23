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
    <title>gar-read-auto.php</title>
</head>
<body>

<h1>garage read auto</h1>
<p>dit zijn alle gegevens uit de tabel autoen van de database garage</p>

<?php

require_once "../connect.php";

$sql = $conn->prepare("
    SELECT autoid, kenteken, merk, type, km FROM car1
");

$sql->execute();

echo "<table>";
    foreach ($sql as $rij) {
        echo "<tr>";
        echo "<td>" . $rij["autoid"] . "<td>";
        echo "<td>" . $rij["kenteken"] . "<td>";
        echo "<td>" . $rij["merk"] . "<td>";
        echo "<td>" . $rij["type"] . "<td>";
        echo "<td>" . $rij["km"] . "<td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<a href='../index.html'> terug naar het menu";

?>

</body>
</html>
