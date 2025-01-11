<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        Route::get("/kalkulator/{bil1}/{bil2}/{kondisi}", function($bil1, $bil2, $kondisi){
            $proses;
            if($kondisi == "tambah"){
                $proses = $bil1 + $bil2;
            }elseif($kondisi == "kurang"){
                $proses = $bil1 - $bil2;
            }elseif($kondisi == "kali"){
                $proses = $bil1 * $bil2;
            }elseif($kondisi == "bagi"){
                $proses = $bil1 / $bil2;
            }
        return "Bilangan 1 : "
        . $bil1 ."<br>Bilangan 2 : ". $bil2 . "<br>Hasil : ".$proses;
    
        });

        Route::post("kalkulator/action", function(Request $request){
            $proses;
            if($request->tambah){
                $proses = $request->bil1 + $request->bil2;
            }elseif($request->kurang){
                $proses = $request->bil1 - $request->bil2;
            }elseif($request->kali){
                $proses = $request->bil1 * $request->bil2;
            }elseif($request->bagi){
                $proses = $request->bil1 / $request->bil2;
            }
        
        
            return "Bilangan 1 : "
            . $request->bil1 ."<br>Bilangan 2 : ". $request->bil2
            ."<br>Hasil : ".$proses;
        });    

        Route::get("/kalkulator/{bil1}/{bil2}/{kondisi}"
, function($bil1, $bil2, $kondisi){
    $proses;
    if($kondisi == "tambah"){
        $proses = $bil1 + $bil2;
    }elseif($kondisi == "kurang"){
        $proses = $bil1 - $bil2;
    }elseif($kondisi == "kali"){
        $proses = $bil1 * $bil2;
    }elseif($kondisi == "bagi"){
        $proses = $bil1 / $bil2;
    }
    return "Bilangan 1 : "
    . $bil1 ."<br>Bilangan 2 : ". $bil2 . "<br>Hasil : ".$proses;
}
);
    ?>
    <form action='kalkulator/action' method='post'>
            <input type='hidden' name='_token' value='".csrf_token()."' />
               <lable>Bilangan 1</lable><br>
               <input name='bil1' type='text' /><br>
               <lable>Bilangan 2</lable><br>
               <input name='bil2' type='text' /><br><br>
               <input type='submit' name='tambah' value='tambah' />
               <input type='submit' name='kurang' value='kurang' />
               <input type='submit' name='kali' value='kali' />
               <input type='submit' name='bagi' value='bagi' />
        </form>

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
</html><?php /**PATH C:\laragon\www\laravel11\resources\views/KL.blade.php ENDPATH**/ ?>