<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
     {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
   
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    font-family: Arial, sans-serif;
    background-color: #c0c0c0;
}
body h3 {
    width: 230px;
}





.calculator input[type="text"] {
    width: 50%;
    height: 40px;
    font-size: 24px;
    text-align: right;
    margin-bottom: 10px;
    padding: 5px;
    border: none;
    border-radius: 5px;
   
    
}

.buttons {
    width: 50%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
}


.calculator button {
   
    color: black;
    cursor: pointer;
}






    </style>
</head>
<body>
<h2>
         <a href ="/home">Home</a>

         <a href ="/Kalkulator">Kalkulator</a> 

         <a href ="/uts">UTS</a>

         <a href ="/mobil">Mobil</a>

    </h2>
   
    <div class="calculator">
        <input type="text" id="display" readonly>
        <div class="buttons">      
            <button onclick="appendNumber('1')">1</button>
            <button onclick="appendNumber('2')">2</button>
            <button onclick="appendNumber('3')">3</button>
            <button onclick="appendNumber('4')">4</button>
            <button onclick="appendNumber('5')">5</button>
            <button onclick="appendNumber('6')">6</button>
            <button onclick="appendNumber('7')">7</button>
            <button onclick="appendNumber('8')">8</button>
            <button onclick="appendNumber('9')">9</button>
            <button onclick="appendNumber('0')">0</button>
            <button onclick="appendNumber('00')">00</button>
            <button onclick="appendNumber('000')">000</button>
            <button onclick="appendOperator('+')">+</button>
            <button onclick="appendOperator('-')">-</button>
            <button onclick="appendOperator('*')">x</button>
            <button onclick="appendOperator('/')">/</button>     
            <button onclick="appendNumber('.')">.</button>
            <button onclick="calculateResult()">=</button>
            <button onclick="clearDisplay()">C</button>
        
        </div>
    </div>

    <script>
        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        function appendNumber(number) {
            document.getElementById('display').value += number;
        }

        function appendOperator(operator) {
            document.getElementById('display').value += operator;
        }

        function calculateResult() {
            try {
                const result = eval(document.getElementById('display').value);
                document.getElementById('display').value = result;
            } catch (error) {
                document.getElementById('display').value = 'Error';
            }
        }
    </script>
</body>
</html><?php /**PATH C:\laragon\www\2301100037\resources\views/Kalkulator.blade.php ENDPATH**/ ?>