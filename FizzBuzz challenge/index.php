<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz | Challenge</title>
    <link rel="stylesheet" href="fizzbuzz.css">
</head>
<body>
    <section class="challenge-container">
        <div class="header">
            <h1>FizzBuzz Challenge</h1>
        </div>
        <form action="" method="post">
            <label for="number">Enter an integer number:</label>
            <input  type="number" name="integer" id="integer" step="1" placeholder="enter number">
            <input type="submit" name="submit" id="submit">
        </form>
        <div class="result">
            <?php 
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $integer = $_POST['integer'];
                for($i=1; $i <= $integer; $i++){
                    if($i % 3 === 0){
                        echo 'Fizz';
                        if($i % 5 === 0){
                            echo 'Buzz';
                        }
                    }else if ($i % 5 === 0) {
                        echo 'Buzz';
                    }else{
                        echo $i;
                    }
                    echo '<br>';
                }
            }else{
                echo 'CAUTION!!! errol!!';
            }
            ?>
        </div>
        <div>
            <h1></h1>
        </div>
    </section>
</body>
</html>