<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJP Feedbackseite - Frage hinzufügen</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { font-size: 1.5em; }
        input[type="text"], input[type="radio"] { margin-bottom: 10px; }
        input[type="text"] { width: 100%; padding: 5px; }
        .predefined-answers { margin-top: 10px; }
        .answer-row { margin-bottom: 5px; }
        .action-buttons { margin-top: 5px; }
        button { margin-right: 10px; }
    </style>
</head>
<body>
    <h1>Frage hinzufügen</h1>
    <form action="add_question.php" method="post">
        <label for="question">Frage</label>
        <input type="text" id="question" name="question" value="Wo haben Sie über den Kurs erfahren?" required>

        <div>
            <label>Fragetyp</label><br>
            <input type="radio" id="free_answer" name="question_type" value="free_answer">
            <label for="free_answer">Freie Antwort</label>
            <input type="radio" id="predefined_answers" name="question_type" value="predefined_answers" checked>
            <label for="predefined_answers">Vordefinierte Antworten</label>
            <input type="radio" id="rating" name="question_type" value="rating">
            <label for="rating">Bewertung 1-5</label>
        </div>

        <div id="predefinedAnswersSection" class="predefined-answers">
            <label>Vordefinierte Antworten</label>
            <div id="answerList">
                <div class="answer-row">
                    <input type="text" name="answers[]" value="Antwort 1" required>
                    <span class="action-buttons">
                        <button type="button" onclick="editAnswer(this)">Bearbeiten</button>
                        <button type="button" onclick="deleteAnswer(this)">Löschen</button>
                    </span>
                </div>
                <div class="answer-row">
                    <input type="text" name="answers[]" value="Antwort 2" required>
                    <span class="action-buttons">
                        <button type="button" onclick="editAnswer(this)">Bearbeiten</button>
                        <button type="button" onclick="deleteAnswer(this)">Löschen</button>
                    </span>
                </div>
            </div>
            <div>
                <input type="text" id="newAnswer" placeholder="Antwort 3">
                <button type="button" onclick="addAnswer()">Hinzufügen</button>
            </div>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit">Ok</button>
            <button type="button" onclick="window.history.back()">Abbrechen</button>
        </div>
    </form>

    <script>
        function addAnswer() {
            const newAnswer = document.getElementById('newAnswer').value;
            if (newAnswer) {
                const answerList = document.getElementById('answerList');
                const newRow = document.createElement('div');
                newRow.className = 'answer-row';
                newRow.innerHTML = `
                    <input type="text" name="answers[]" value="${newAnswer}" required>
                    <span class="action-buttons">
                        <button type="button" onclick="editAnswer(this)">Bearbeiten</button>
                        <button type="button" onclick="deleteAnswer(this)">Löschen</button>
                    </span>
                `;
                answerList.appendChild(newRow);
                document.getElementById('newAnswer').value = '';
            }
        }

        function editAnswer(button) {
            const input = button.parentElement.previousElementSibling;
            input.focus();
        }

        function deleteAnswer(button) {
            button.closest('.answer-row').remove();
        }

        document.querySelectorAll('input[name="question_type"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.getElementById('predefinedAnswersSection').style.display = 
                    this.value === 'predefined_answers' ? 'block' : 'none';
            });
        });
    </script>
</body>
</html>