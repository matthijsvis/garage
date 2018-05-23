<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 16-04-18
 * Time: 12:57
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-klant1.php</title>
</head>
<body>

<h1>garage create klant 1</h1>
<p>
    Dit formulier wordt gebruikt om klantgegevens in te voeren.
</p>

<form action="gar-create-klant2.php" method="post">
    Klantnaam: <input type="text" name="klantnaamvak"> <br>
    Klantadres: <input type="text" name="klantadresvak"> <br>
    Klantpostcode: <input type="text" name="klantpostcodevak"> <br>
    Klantplaats: <input type="text" name="klantplaatsvak"> <br>
    <input type="submit">
</form>

</body>
</html>