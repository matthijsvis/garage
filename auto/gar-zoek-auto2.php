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
    <title>gar-zoek-auto2.php</title>
</head>
<body>

<h1>garage zoek op auto id 2</h1>
<p>op autoid gegevens zoeken uit de tabel auto's van de database garage</p>

<?php

$autoid = $_POST["autoidvak"];

require_once "../connect.php";

$sql = $conn->prepare("
SELECT autoid, kenteken, merk, type, km FROM car1 WHERE autoid = :autoid
");

$sql->execute(["autoid" => $autoid]);

echo "<table>";
foreach ($sql as $rij){
    echo "<tr>";
    echo "<td>" . $rij["autoid"] . "</td>";
    echo "<td>" . $rij["kenteken"] . "</td>";
    echo "<td>" . $rij["merk"] . "</td>";
    echo "<td>" . $rij["type"] . "</td>";
    echo "<td>" . $rij["km"] . "</td>";
    echo "</tr>";
}
echo "</table><br />";
echo "<a href='../index.html'>terug naar het menu</a>";

?>
</body>
</html>
