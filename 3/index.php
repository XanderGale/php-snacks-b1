<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>

<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
    
    <?php

        $array = [];

        while ( count($array) < 15 ) {
            $newNumber = rand(1, 50);
            if ( in_array($newNumber, $array) == false ) {
                $array[] = $newNumber;
            };
        };

        var_dump($array);
    ?>


</body>
</html>