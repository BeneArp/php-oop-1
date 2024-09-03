<?php

    require_once __DIR__ . '/../Model/Movie.php';

    $db = [
        new Movie('The Other', 'English', ['Horror', 'Thriller', 'Drama'], 2001),
        new Movie('The Good, The Bad and the Ugly', 'English', ['Western', 'Action'], 1966),
        new Movie('Treasure Planet', 'English', ['Animated', 'Adventure', 'Comedy'], 2002),
    ]
    
?>