<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJP Feedbackseite - Bewertung abgeben</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
        h1 { font-size: 1.5em; }
        textarea { width: 100%; height: 100px; margin-bottom: 15px; }
        .radio-group { margin-bottom: 15px; }
        .star-rating { font-size: 24px; }
        .star-rating input { display: none; }
        .star-rating label { cursor: pointer; }
        .star-rating label:before { content: '☆'; }
        .star-rating input:checked ~ label:before { content: '★'; }
    </style>
</head>
<body>
    <h1>Bewertung abgeben - Deutschkurs</h1>
    <form action="submit_feedback.php" method="post">
        <div>
            <h2>Frage 1 - Freie Antworten</h2>
            <textarea name="frage1" required></textarea>
        </div>

        <div>
            <h2>Frage 2 - Vordefinierte Antworten</h2>
            <div class="radio-group">
                <input type="radio" id="antwort1" name="frage2" value="Antwort 1" required>
                <label for="antwort1">Antwort 1</label><br>
                <input type="radio" id="antwort2" name="frage2" value="Antwort 2">
                <label for="antwort2">Antwort 2</label><br>
                <input type="radio" id="antwort3" name="frage2" value="Antwort 3">
                <label for="antwort3">Antwort 3</label>
            </div>
        </div>

        <div>
            <h2>Frage 3 - Bewertung 1-5</h2>
            <div class="star-rating">
                <input type="radio" id="star5" name="frage3" value="5" required>
                <label for="star5"></label>
                <input type="radio" id="star4" name="frage3" value="4">
                <label for="star4"></label>
                <input type="radio" id="star3" name="frage3" value="3">
                <label for="star3"></label>
                <input type="radio" id="star2" name="frage3" value="2">
                <label for="star2"></label>
                <input type="radio" id="star1" name="frage3" value="1">
                <label for="star1"></label>
            </div>
        </div>

        <button type="submit">Abschicken</button>
    </form>
</body>
</html>