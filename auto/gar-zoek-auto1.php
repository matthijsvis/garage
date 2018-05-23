<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 16-04-18
 * Time: 13:42
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-zoek-auto1</title>
</head>
<body>
<h1>garage zoek op autoid 1</h1>
<p>dit formulier zoekt een auto op uit de de tabel auto's van database garage</p>

<form action="gar-zoek-auto2.php" method="post">
    welke auto id zoekt u?
    <input type="text" name="autoidvak"> <br>
    <input type="submit">
</form>

</body>
</html>
