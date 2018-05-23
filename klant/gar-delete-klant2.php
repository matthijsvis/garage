<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 17-04-18
 * Time: 10:57
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-delete-klant2.php</title>
</head>
<body>

<h1>garage delete klant 2</h1>
<p>op klantid gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden.</p>
<?php

$klantid = $_POST["klantidvak"];

require_once "connect.php";

$klanten = $conn->prepare("
SELECT klantid, klantnaam, addres, postalcode, place FROM customer WHERE klantid = :klantid
");
$klanten->execute(["klantid" => $klantid]);

echo "<table>";
foreach ($klanten as $klant) {
    echo "<tr>";
    echo "<td>" . $klant["klantid"] . "<td>";
    echo "<td>" . $klant["klantnaam"] . "<td>";
    echo "<td>" . $klant["addres"] . "<td>";
    echo "<td>" . $klant["postalcode"] . "<td>";
    echo "<td>" . $klant["place"] . "<td>";
    echo "</tr>";
}
echo "</table><br>";

echo "<form action='gar-delete-auto3.php' method='post'>";
echo "<input type='hidden' name='klantidvak' value='$klantid'>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "verwijder de klant <br>";
echo "<input type='submit'>";
echo "</form>";

?>
</body>
</html>
