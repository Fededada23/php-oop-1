<?php


    include './classi/film.php';


    $film1 = new Movie('Ritorno al Futuro', 1985, 'fantascienza, commedia', 'https://e7.pngegg.com/pngimages/250/66/png-clipart-back-to-the-future-coupe-illustration-car-t-shirt-sticker-delorean-motor-company-decal-spots-compact-car-car.png');
    var_dump($film1);

    $film2 = new Movie('Zohan', 2008, 'commedia', 'https://e7.pngegg.com/pngimages/86/594/png-clipart-zohan-comedy-film-hollywood-movies-miscellaneous-physical-fitness.png');
    var_dump($film2);

    $film3 = new Movie('Piovono polpette', 2009, 'animazione, commedia, fantascienza', 'https://e7.pngegg.com/pngimages/298/262/png-clipart-cloudy-with-a-chance-of-meatballs-nintendo-ds-computer-software-figurine-cloudy-with-a-chance-of-meatballs-nintendo-cartoon.png');
    var_dump($film3);

?>