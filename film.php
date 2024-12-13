<?php

use Film\FilmController;

include("./controller/FilmController.php");
$filmController = new FilmController;
$film = $filmController->displayOneFilm($_GET);
include("./templates/header.html");
// ... 
// au click dans index.php sur <a href="film.php" class="card-link">Plus d'Info</a>
// je souhaite ouvrir cette page et afficher l'id_movie du film selection

var_dump($film);


include("./templates/footer.html");