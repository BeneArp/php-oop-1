<?php

    require_once __DIR__ . '/data/db.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <?php foreach($db as $movie) : ?>
    
        <h2><?php echo $movie->title ?></h2>
        <h4>Original Language: <?php echo $movie->language ?></h4>
        <h5>Geners:</h5>
        <ul>
            <?php $movie->getGeners() ?>
        </ul>
        <h5>Relase Year: <?php echo $movie->relaseYear ?></h5>

    <?php endforeach ; ?>

</body>
</html>