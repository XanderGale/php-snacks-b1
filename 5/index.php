<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<!-- ## Snack 5
Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>


<div class="red">

    <?php for($i=0; $i < count($db['teachers']); $i++) { ?>
        <h5> <?php echo $db['teachers'][$i]['name'] . ' - ' . $db['teachers'][$i]['lastname'] ; ?> </h5>
    <?php } ?>

</div>

<div class="green">

    <?php for($i=0; $i < count($db['pm']); $i++) { ?>
        <h5> <?php echo $db['pm'][$i]['name'] . ' - ' . $db['pm'][$i]['lastname'] ; ?> </h5>
    <?php } ?>

</div>


</body>
</html>