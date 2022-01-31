<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<body>

<!-- ## Snack 6
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
    

<?php
 
    $students = [
        [
            'name' => 'Alessandro',
            'lastname' => 'Pippone',
            'ratings' => [ 8, 7, 8, 9],
        ],
        [
            'name' => 'Giada',
            'lastname' => 'Fantino',
            'ratings' => [ 6, 7, 4, 9],
        ],
        [
            'name' => 'Davide',
            'lastname' => 'Biscotto',
            'ratings' => [ 5, 9, 3, 10],
        ],
    ];

    $student_rating = 

?>

<div class="container">
    <?php for ($i=0; $i < count($students); $i++) { ?>
        <h2> <?php echo $students[$i]['name'] . ' ' . $students[$i]['lastname']; ?> </h2>
        <div class="student-rating">
            <?php for($j = 0; $j < count($students[$i]['ratings']); $j++) {
                $ratings_sum += $students[$i]['ratings'][$j];
            }?>
        </div>
    <?php } ?>
</div>


</body>
</html>