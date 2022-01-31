<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60 -->
    

    <!-- Dichiaro Array -->
    <?php
        $matches = [
            [
                'homeTeamName' => 'Salerno',
                'homeTeamPoints' => 40,
                'guestTeamName' => 'Palermo',
                'guestTeamPoints' => 90,
            ],
            [
                'homeTeamName' => 'Bologna',
                'homeTeamPoints' => 80,
                'guestTeamName' => 'Torino',
                'guestTeamPoints' => 50,
            ],
            [
                'homeTeamName' => 'Trento',
                'homeTeamPoints' => 93,
                'guestTeamName' => 'Venezia',
                'guestTeamPoints' => 10,
            ],
            [
                'homeTeamName' => 'Verona',
                'homeTeamPoints' => 20,
                'guestTeamName' => 'Ascoli',
                'guestTeamPoints' => 98,
            ],
        ];

        var_dump($matches);
    ?>

    <!-- Stampo i match in array -->
    <?php for ( $i = 0; $i < count($matches); $i++ ) { ?>
        <div class="match-container">
            <h2> 
                <!-- Home Team -->
                <?php echo $matches[$i]['homeTeamName']; echo ' - ' . $matches[$i]['homeTeamPoints'] . ' | ';  ?>

                <!-- Guest Team -->
                <?php echo $matches[$i]['guestTeamName']; echo ' - ' . $matches[$i]['guestTeamPoints'];  ?> 
            
            </h2>
        </div>
    <?php } ?>




</body>
</html>