<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 17-04-18
 * Time: 09:26
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-klant2.php</title>
</head>
<body>
<h1>garage update klan 2</h1>
<p>dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel klant van de databse garage</p>

<?php

$klantid = $_POST["klantidvak"];
//var_dump($klantid);
require_once "connect.php";

$klant = $conn->prepare("
SELECT * FROM customer WHERE klantid = :klantid
");

$klant->execute(["klantid" => $klantid]);
$result = $klant->fetch(PDO::FETCH_ASSOC);
//var_dump($result);
echo "<form action='gar-update-auto3.php' method='post'>";

    echo "klantid:" . $result["klantid"];
    echo "<input type='hidden' name='klantidvak' ";
    echo " value='" . $result ["klantid"] . " '> <br/> ";

    echo "klantnaam: <input type='text'";
    echo "name = 'klantnaamvak'";
    echo "value='" . $result ["klantnaam"] . "'";
    echo "><br/>";

    echo "addres: <input type='text'";
    echo "name = 'klantadresvak'";
    echo " value='" . $result ["addres"] . "'";
    echo "><br/>";

    echo "postalcode: <input type='text'";
    echo "name = 'klantpostcodevak'";
    echo " value='" . $result ["postalcode"] . "'";
    echo "><br/>";

    echo "place: <input type='text'";
    echo "name = 'klantplaatsvak'";
    echo " value='" . $result ["place"] . "'";
    echo "><br/>";

echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>
