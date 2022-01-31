<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>

<!-- # Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

    <?php
        $p = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis tempora eum cupiditate sed dignissimos distinctio optio odit odio sapiente incidunt, quas deserunt dolor labore illum laudantium cumque, iste doloribus fugit.';
        
        $splitted_p = explode('. ', $p );

        var_dump($splitted_p);
    ?>

    <?php for ($i=0; $i < count($splitted_p); $i++ ) {?>
        <p> <?php echo $splitted_p[$i] ?> </p>
    <?php } ?>

    
</body>
</html>