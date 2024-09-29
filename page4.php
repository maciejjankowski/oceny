<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJP Feedbackseite - Feedback ansehen</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { font-size: 1.5em; }
        .accordion { margin-bottom: 10px; }
        .accordion-header { background-color: #e6f2ff; padding: 10px; cursor: pointer; }
        .accordion-content { display: none; padding: 10px; border: 1px solid #e6f2ff; }
        button { display: block; margin: 20px auto; }
    </style>
</head>
<body>
    <h1>Feedback ansehen - Deutschkurs</h1>

    <div class="accordion">
        <div class="accordion-header">Frage 1 - Freie Antworten</div>
        <div class="accordion-content">
            <p>Antwort 1: bla bla bla</p>
            <p>Antwort 2: Lorem ipsum</p>
            <p>Antwort 3: lala</p>
        </div>
    </div>

    <div class="accordion">
        <div class="accordion-header">Frage 2 - Vordefinierte Antworten</div>
        <div class="accordion-content">
        <div class="accordion-content">
    <div class="bar-chart">
        <div class="bar-container">
            <div class="bar" style="width: 20%;">10</div>
            <span class="bar-label">Antwort 1</span>
        </div>
        <div class="bar-container">
            <div class="bar" style="width: 70%;">35</div>
            <span class="bar-label">Antwort 2</span>
        </div>
        <div class="bar-container">
            <div class="bar" style="width: 10%;">5</div>
            <span class="bar-label">Antwort 3</span>
        </div>
    </div>
</div>

<style>
    .bar-chart {
        margin-top: 10px;
    }
    .bar-container {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }
    .bar {
        background-color: #4CAF50;
        color: white;
        padding: 3px;
        text-align: right;
        font-size: 14px;
        min-width: 30px;
    }
    .bar-label {
        margin-left: 10px;
        font-size: 14px;
    }
</style>
        </div>
    </div>

    <div class="accordion">
        <div class="accordion-header">Frage 3 - Bewertung 1-5</div>
        <div class="accordion-content">
        <div class="accordion-content">
    <div class="rating-chart">
        <div class="rating-bar-container">
            <span class="rating-label">5</span>
            <div class="rating-bar" style="width: 10%;">5</div>
        </div>
        <div class="rating-bar-container">
            <span class="rating-label">4</span>
            <div class="rating-bar" style="width: 10%;">5</div>
        </div>
        <div class="rating-bar-container">
            <span class="rating-label">3</span>
            <div class="rating-bar" style="width: 10%;">5</div>
        </div>
        <div class="rating-bar-container">
            <span class="rating-label">2</span>
            <div class="rating-bar" style="width: 50%;">25</div>
        </div>
        <div class="rating-bar-container">
            <span class="rating-label">1</span>
            <div class="rating-bar" style="width: 20%;">10</div>
        </div>
    </div>
</div>

<style>
    .rating-chart {
        margin-top: 10px;
    }
    .rating-bar-container {
        display: flex;
        align-items: center;
        margin-bottom: 5px;
    }
    .rating-label {
        min-width: 20px;
        text-align: right;
        margin-right: 10px;
    }
    .rating-bar {
        background-color: #4CAF50;
        color: white;
        padding: 3px;
        text-align: right;
        font-size: 14px;
        min-width: 30px;
    }
</style>
        </div>
    </div>

    <button onclick="window.close()">Schließen</button>

    <script>
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                content.style.display = content.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>