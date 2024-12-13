<?php
namespace Film;
include("./repository/FilmRepository.php");


class FilmController extends FilmRepository {
    private $id;
    private $title;
    private $year;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getYear(){
        return $this->year;
    }
    
    public function setYear($year){
        $this->year = $year;
    }
    
    public function displayIndex(){
        $listFilms = $this->getRandomFilms();
        // je filtre, je trie, je controlle les données fournies par le repository
            /* var_dump($listFilms); */
        foreach ($listFilms as $key => $value){
            if(!file_exists("./assets/img/posters/" . $value['id_movie'] . ".jpg")){
                $listFilms[$key]['urlPoster'] = "./assets/img/default-movie.jpg";
            } else {
                $listFilms[$key]['urlPoster'] = "./assets/img/posters/".$value['id_movie'].".jpg";
            }
        }
        return $listFilms;
        
    }

}

class Info {
    public function displayInfoFilm(){
        return "Info sur les films ";
    }
}