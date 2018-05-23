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
    <title>gar-update-auto2.php</title>
</head>
<body>
<h1>garage update klan 2</h1>
<p>dit formulier wordt gebruikt om autogegevens te wijzigen in de tabel auto van de databse garage</p>

<?php

$autoid = $_POST["autoidvak"];
//var_dump($autoid);
require_once "../connect.php";

$auto = $conn->prepare("
SELECT * FROM car1 WHERE autoid = :autoid
");

$auto->execute(["autoid" => $autoid]);
$result = $auto->fetch(PDO::FETCH_ASSOC);
//var_dump($result);
echo "<form action='gar-update-auto3.php' method='post'>";

    echo "autoid:" . $result["autoid"];
    echo "<input type='hidden' name='autoidvak' ";
    echo " value='" . $result ["autoid"] . " '> <br/> ";

    echo "kenteken: <input type='text'";
    echo "name = 'kentekenvak'";
    echo "value='" . $result ["kenteken"] . "'";
    echo "><br/>";

    echo "addres: <input type='text'";
    echo "name = 'merkvak'";
    echo " value='" . $result ["merk"] . "'";
    echo "><br/>";

    echo "postalcode: <input type='text'";
    echo "name = 'typevak'";
    echo " value='" . $result ["type"] . "'";
    echo "><br/>";

    echo "place: <input type='text'";
    echo "name = 'kmvak'";
    echo " value='" . $result ["km"] . "'";
    echo "><br/>";

echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>
