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
    <title>gar-delete-auto2.php</title>
</head>
<body>

<h1>garage delete auto 2</h1>
<p>op autoid gegevens zoeken uit de tabel auto's van de database garage zodat ze verwijderd kunnen worden.</p>
<?php

$autoid = $_POST["autoidvak"];

require_once "../connect.php";

$autos = $conn->prepare("
SELECT autoid, kenteken, merk, type, km FROM car1 WHERE autoid = :autoid
");
$autos->execute(["autoid" => $autoid]);

echo "<table>";
foreach ($autos as $auto) {
    echo "<tr>";
    echo "<td>" . $auto["autoid"] . "<td>";
    echo "<td>" . $auto["kenteken"] . "<td>";
    echo "<td>" . $auto["merk"] . "<td>";
    echo "<td>" . $auto["type"] . "<td>";
    echo "<td>" . $auto["km"] . "<td>";
    echo "</tr>";
}
echo "</table><br>";

echo "<form action='gar-delete-auto3.php' method='post'>";
echo "<input type='hidden' name='autoidvak' value='$autoid'>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "verwijder de auto <br>";
echo "<input type='submit'>";
echo "</form>";

?>
</body>
</html>
