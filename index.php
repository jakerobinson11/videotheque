<?php
include("./controller/FilmController.php");
include("./controller/UserController.php");
$film = new Film\FilmController();
include("./templates/header.html");
// ... 
$film->displayIndex();
// ici je souhtaite appeller mes 2 class Info pour User et Film
$filmInfo = new Film\Info;
echo($filmInfo->displayInfoFilm());
$userInfo = new Info;
echo($userInfo->displayInfoUser());
include("./templates/footer.html");
