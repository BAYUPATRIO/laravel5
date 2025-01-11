<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eLearning Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }

        nav {
            display: flex;
            background-color: #333;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
        }

        nav a:hover {
            background-color: #575757;
        }

        .content {
            padding: 20px;
        }

        .module {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .module h3 {
            margin-top: 0;
        }

        .quiz {
            margin-top: 20px;
        }

        .quiz button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .quiz button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Elearning UPGRISBA</h1>
    </header>

    <nav>
        <a href="tampilan">Login</a>
        <a href="#Home">Home</a>
        <a href="#Mata_Pelajaran">Mata Pelajaran</a>
        <a href="#module3">Module 3</a>
    </nav>

    <div class="content">
        <div class="Home" id="Home">
            <h3>Module 1: Introduction to HTML</h3>
            <p>Learn the basics of HTML, the foundation of web development.</p>
            <div class="quiz">
                <button onclick="showResult('Home')">Take Quiz</button>
                <div class="result" id="result-module1"></div>
            </div>
        </div>

        <div class="Mata_Pelajaran" id="Mata_Pelajaran">
            <h3>Module 2: CSS Fundamentals</h3>
            <p>Explore how to style websites using CSS.</p>
            <div class="quiz">
                <button onclick="showResult('Mata_Pelajaran')">Take Quiz</button>
                <div class="result" id="result-module2"></div>
            </div>
        </div>

        <div class="module" id="module3">
            <h3>Module 3: JavaScript Basics</h3>
            <p>Get started with JavaScript and add interactivity to your webpages.</p>
            <div class="quiz">
                <button onclick="showResult('module3')">Take Quiz</button>
                <div class="result" id="result-module3"></div>
            </div>
        </div>
    </div>

    <script>
        function showResult(moduleId) {
            const resultElement = document.getElementById(`result-${moduleId}`);
            resultElement.textContent = 'Quiz feature coming soon!';
        }
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\laravel11\resources\views/elearning.blade.php ENDPATH**/ ?>