<?php
include("./controller/FilmController.php");
$film = new FilmController();
include("./templates/header.html");
// ... 
$film->displayIndex();

include("./templates/footer.html");