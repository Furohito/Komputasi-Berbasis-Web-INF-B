<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET dan POST</title>
</head>
<body>

<? php
 if (isset($_POST['submit'])) {
     echo $_POST['nama'];
 }
?>

<h2>Form dengan Metode POST</h2>
<form action="latihan_post.php" method="POST">
    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Submit GET</button>
</form>
</body>
</html>
