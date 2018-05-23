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
    <title>gar-delete-auto3.php</title>
</head>
<body>
<h1>garage delete auto 3</h1>
<p>op autoid gegevens zoeken uit de tabel auto's van de database garage zodat ze verwijderd kunnen worden</p>
<?php

$autoid = $_POST["autoidvak"];
$verwijderen = $_POST["verwijdervak"];

if ($verwijderen){
    require_once "../connect.php";

    $sql = $conn->prepare("DELETE FROM car1 WHERE autoid = :autoid");

    $sql->execute(["autoid" => $autoid]);
    echo "de gegevens zijn verwijderd <br>";
}else{
    echo "de gegevens zijn niet verwijderd<br>";
}
echo "<a href='../index.html'>terug naar het menu </a>";

?>
</body>
</html>
