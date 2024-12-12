<?php
include_once("./repository/pdo.php");

class FilmRepository extends Connect
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = $this->connect();
    }
    protected function getRandomFilms()
    {
        $rq = "SELECT * FROM movies_full ORDER BY RAND() LIMIT 0,10";
        $statement = $this->pdo->prepare($rq);
        $statement->execute();
        return $statement->fetchAll();
    }
    protected function getAllFilms()
    {
        $rq = "SELECT * FROM movies_full";
        $statement = $this->pdo->prepare($rq);
        $statement->execute();
        return $statement->fetchAll();
    }
    protected function getFilm($id)
    {
        $rq = "SELECT * FROM movies_full WHERE id_movie = $id";
        $statement = $this->pdo->prepare($rq);
        $statement->execute();
        return $statement->fetch();
    }
    protected function getFilmsBy($key, $value)
    {
        $rq = "SELECT * FROM movies_full WHERE $key LIKE '%$value%'";
        $statement = $this->pdo->prepare($rq);

        $statement->execute();
        return $statement->fetchAll();
    }
}
