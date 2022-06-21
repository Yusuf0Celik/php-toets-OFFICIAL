<?php
if (isset($_POST["submit"])) {

    if (isset($_POST["price"]) && isset($_POST["sale"])) {
        $sale = filter_input(INPUT_POST, "sale", FILTER_VALIDATE_INT);
        $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT);
        
        if ($price == '') {
            $message = 'Vul een prijs in euro in!';
        } else {
            if ($sale === 20) {
                $message = "Bedrag inclusief $sale% korting: €" . round(($price * 0.8), 2);
            } else if ($sale === 30) {
                $message = "Bedrag inclusief $sale% korting: €" . round(($price * 0.7), 2);
            } else if ($sale === 40) {
                $message = "Bedrag inclusief $sale% korting: €" . round(($price * 0.6), 2);
            } else if ($sale === 50) {
                $message = "Bedrag inclusief $sale% korting: €" . round(($price * 0.5), 2);
            }
        }

    } else {
        $message = "Niet alle velden ingevuld";
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
    <title>Opdracht 1</title>
</head>
<body>
    <form action="" method="post">
        <label>Prijs in euro(MET PUNT EN GEEN KOMMA)</label>
        <input type="number" name="price" value="">
        <br>
        <input class="nostyle" type="radio" name="sale" value="20"> 20%
        <br>
        <input class="nostyle" type="radio" name="sale" value="30"> 30%
        <br>
        <input class="nostyle" type="radio" name="sale" value="40"> 40%
        <br>
        <input class="nostyle" type="radio" name="sale" value="50"> 50%
        <br><br>
        <button type="submit" name="submit">Uitrekenen</button>
    </form>
    <br>
    <br>
    <?php 
        echo $message;
    ?>
</body>
</html>