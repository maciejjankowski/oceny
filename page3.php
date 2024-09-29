<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJP Feedbackseite - Programmangebot hinzufügen</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
        h1 { font-size: 1.5em; }
        input[type="text"] { width: 100%; padding: 5px; margin-bottom: 15px; }
        .radio-group, .checkbox-group { margin-bottom: 15px; }
        button { margin-right: 10px; }
    </style>
</head>
<body>
    <h1>Programmangebot hinzufügen</h1>
    <form action="add_program.php" method="post">
        <div>
            <label for="titel">Titel</label>
            <input type="text" id="titel" name="titel" value="Softwareentwicklung mit Python" required>
        </div>

        <div class="radio-group">
            <label>Kategorie</label><br>
            <input type="radio" id="kurse" name="kategorie" value="Kurse" checked required>
            <label for="kurse">Kurse</label>
            <input type="radio" id="freiheitsangebote" name="kategorie" value="Freiheitsangebote">
            <label for="freiheitsangebote">Freiheitsangebote</label>
            <input type="radio" id="projekte" name="kategorie" value="Projekte">
            <label for="projekte">Projekte</label>
        </div>

        <div class="checkbox-group">
            <label>Feedback Fragen</label><br>
            <input type="checkbox" id="frage1" name="feedback[]" value="Wie hat Ihnen der Kurs gefallen?" checked>
            <label for="frage1">Wie hat Ihnen der Kurs gefallen?</label><br>
            <input type="checkbox" id="frage2" name="feedback[]" value="Würden Sie den Kurs weiter empfehlen?">
            <label for="frage2">Würden Sie den Kurs weiter empfehlen?</label>
        </div>

        <button type="submit">Ok</button>
        <button type="button" onclick="window.history.back();">Abbrechen</button>
    </form>
</body>
</html>