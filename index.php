<?php
include("./controller/FilmController.php");
include("./controller/UserController.php");
$film = new Film\FilmController();
include("./templates/header.html");
?>
<div id="random-films" class="d-flex flex-wrap">
    <?php foreach ($film->displayIndex() as $value) : ?>
        <div class="card mb-3 w-25">
            <h3 class="card-header"><?= $value["title"]; ?></h3>
            <div class="card-body">
                <h5 class="card-title"><?= $value["directors"]; ?></h5>
                <h6 class="card-subtitle text-muted"><?= $value["year"]; ?></h6>
            </div>
            <img class="img-fluid" src=<?= $value["urlPoster"]; ?> alt="">
            <div class="card-body">
                <p class="card-text"><?= $value["plot"]; ?></p>
            </div>
            <div class="card-body">
                <a href="film.php?id_movie=<?= $value["id_movie"]; ?>&message=bonjour" class="card-link">Plus d'Info</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
// ici je souhaite appeler mes 2 classes Info pour User et Film
$filmInfo = new Film\Info;
echo($filmInfo->displayInfoFilm());
$userInfo = new User\Info;
echo($userInfo->displayInfoUser());
include("./templates/footer.html");
?>