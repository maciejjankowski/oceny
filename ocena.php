<!DOCTYPE html>
<html>
<head>
    <title>Zbieranie opinii</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ocena = $_POST["ocena"];
    $uwagi = $_POST["uwagi"];
    $imie_nazwisko = $_POST["imie_nazwisko"];
?>
<h1>Dziękuję za opinię</h1>
<h2>Twoja opinia:</h2>
Ocena: <?php echo $ocena; ?><br>
Uwagi: <?php echo $uwagi; ?><br>
Imię i nazwisko / Nick: <?php echo $imie_nazwisko; ?>

<?php
} else {
?>

<h1>Podziel się swoją opinią</h1>

<form method="post">
<label for="ocena">Ocena:</label>
<div>
    <input type="radio" id="ocena1" name="ocena" value="1" required>
    <label for="ocena1">1</label>
    <input type="radio" id="ocena2" name="ocena" value="2">
    <label for="ocena2">2</label>
    <input type="radio" id="ocena3" name="ocena" value="3">
    <label for="ocena3">3</label>
    <input type="radio" id="ocena4" name="ocena" value="4">
    <label for="ocena4">4</label>
    <input type="radio" id="ocena5" name="ocena" value="5">
    <label for="ocena5">5</label>
</div>
<br>

<label for="uwagi">Uwagi:</label><br>
<textarea id="uwagi" name="uwagi" rows="4" cols="50"></textarea><br><br>

<label for="imie_nazwisko">Imię i nazwisko / Nick:</label><br>
<input type="text" id="imie_nazwisko" name="imie_nazwisko"><br><br>

<button type="submit">Wyślij</button>
</form>
<?php
}
?>

</body>
</html>