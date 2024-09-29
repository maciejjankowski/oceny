<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJP Feedbackseite</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .action-btn { margin-right: 5px; }
    </style>
</head>
<body>
    <h1>TJP Feedbackseite</h1>
    
    <h2>Programmangebote</h2>
    <table>
        <tr>
            <th>Titel</th>
            <th>Kategorie</th>
            <th>Aktionen</th>
        </tr>
        <?php
        $programmangebote = [
            ['Deutschkurs', 'Kurse'],
            ['Basteln', 'Projekte']
        ];

        foreach ($programmangebote as $angebot) {
            echo "<tr>
                    <td>{$angebot[0]}</td>
                    <td>{$angebot[1]}</td>
                    <td>
                        <button class='action-btn'>Bearbeiten</button>
                        <button class='action-btn'>Löschen</button>
                        <button class='action-btn'>Feedback ansehen</button>
                        <button class='action-btn'>Bewerten lassen</button>
                    </td>
                  </tr>";
        }
        ?>
    </table>
    <button>Programmangebot hinzufügen</button>

    <h2>Fragen</h2>
    <table>
        <tr>
            <th>Frage</th>
            <th>Aktionen</th>
        </tr>
        <?php
        $fragen = [
            'Wie hat Ihnen der Kurs gefallen?',
            'Würden Sie den Kurs weiter empfehle'
        ];

        foreach ($fragen as $frage) {
            echo "<tr>
                    <td>{$frage}</td>
                    <td>
                        <button class='action-btn'>Bearbeiten</button>
                        <button class='action-btn'>Löschen</button>
                        <button class='action-btn'>Feedback ansehen</button>
                    </td>
                  </tr>";
        }
        ?>
    </table>
    <button>Frage hinzufügen</button>
</body>
</html>