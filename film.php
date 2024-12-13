<?php
include("./templates/header.html");
// ... 
// au click dans index.php sur <a href="film.php" class="card-link">Plus d'Info</a>
// je souhaite ouvrir cette page et afficher l'id_movie du film selection

echo $_GET["id_movie"];

include("./templates/footer.html");