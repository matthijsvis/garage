<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 17-04-18
 * Time: 11:10
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-delete-klant3.php</title>
</head>
<body>
<h1>garage delete klant 3</h1>
<p>op klantid gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden</p>
<?php

$klantid = $_POST["klantidvak"];
$verwijderen = $_POST["verwijdervak"];

if ($verwijderen){
    require_once "connect.php";

    $sql = $conn->prepare("DELETE FROM customer WHERE klantid = :klantid");

    $sql->execute(["klantid" => $klantid]);
    echo "de gegevens zijn verwijderd <br>";
}else{
    echo "de gegevens zijn niet verwijderd<br>";
}
echo "<a href='../index.html'>terug naar het menu </a>";

?>
</body>
</html>
