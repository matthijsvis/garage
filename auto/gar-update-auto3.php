<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 17-04-18
 * Time: 09:45
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-auto3.php</title>
</head>
<body>
<h1>garage update auto 3</h1>
<p>autogegevens wijzigen in de tabel auto van de database garage</p>

<?php
$autoid = $_POST["autoidvak"];
$kenteken = $_POST["kentekenvak"];
$merk = $_POST["merkvak"];
$type = $_POST["typevak"];
$km = $_POST["kmvak"];

require_once "../connect.php";

$sql = $conn->prepare("UPDATE car1 SET kenteken=:kenteken, merk=:merk, type=:type, km=:km WHERE autoid=:autoid");
$sql->bindParam(":kenteken", $kenteken);
$sql->bindParam(":merk",$merk );
$sql->bindParam(":type",$type);
$sql->bindParam(":km", $km);
$sql->bindParam(":autoid",$autoid );
$sql->execute();

echo "de auto is gewijzigd. <br>";
echo "<a href='../index.html'>terug naar het menu </a>";
?>

</body>
</html>
