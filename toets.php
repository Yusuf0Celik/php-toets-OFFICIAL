<?php
    if (isset($_POST["submit"])) {
        
        if (isset($_POST["operator"])) {
            $firstNumber = filter_input(INPUT_POST, "firstNumber", FILTER_VALIDATE_FLOAT);
            $secondNumber = filter_input(INPUT_POST, "secondNumber", FILTER_VALIDATE_FLOAT);
            $operator = $_POST["operator"];

            if (!is_numeric($firstNumber) || !is_numeric($firstNumber)) {
                $message = 'Vul een getal in!(komma veranderen naar punten)';
            } else {
                if ($firstNumber == 0 || $secondNumber == 0) {
                $message = 'Niet delen door nul!';
            } else {
                if ($operator == '+') {
                    $message = "$firstNumber + $secondNumber = " . ($firstNumber + $secondNumber);
                } else if ($operator == '-') {
                    $message = "$firstNumber - $secondNumber = " . ($firstNumber - $secondNumber);
                } else if ($operator == '*') {
                    $message = "$firstNumber x $secondNumber = " . ($firstNumber * $secondNumber);
                } else if ($operator == '/') {
                    $message = "$firstNumber : $secondNumber = " . ($firstNumber / $secondNumber);
                }
            }
            }

        } else {
            $message = 'Selecteer een operator en vul dan een getal in!';
        }

    } else {
        $message = '';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 2</title>
</head>
<body>
    <form action="" method="post">
        <label>Getal 1</label>
        <input type="text" name="firstNumber">
        <br>
        <input type="radio" name="operator" value="+">Optellen
        <input type="radio" name="operator" value="-">Aftrekken
        <input type="radio" name="operator" value="*">Vermenigvuldigen
        <input type="radio" name="operator" value="/">Delen
        <br>
        <label>Getal 2</label>
        <input type="text" name="secondNumber">
        <br>
        <br>
        <button type="submit" name="submit">Berekenen</button>
    </form>

    <?php
        echo $message;  
    ?>
</body>
</html>