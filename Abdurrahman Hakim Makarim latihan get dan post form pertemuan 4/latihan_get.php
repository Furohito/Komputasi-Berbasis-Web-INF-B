<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET dan POST</title>
</head>
<body>

<? php

echo $_GET ["nama"];
?>
<h2>Form dengan Metode GET</h2>
<form action="latihan_get.php" method="GET">
    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Submit GET</button>
</form>

</body>
</html>
