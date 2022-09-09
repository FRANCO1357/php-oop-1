<?php

// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
// metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movie
{
    public $id;
    public $title;
    public $year;
    public $movie_director;
    public $rating;

    public function __construct($_id, $_title, $_year, $_movie_director, $_rating)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->year = $_year;
        $this->movie_director = $_movie_director;
        $this->rating = $_rating;
    }

    public function getFilmAge(){
        return 2022 - $this->year;
    }
}

$movie1 = new Movie(1, 'The Shawshank Redemption', 1994, 'Frank Darabont', 5);
$movie2 = new Movie(2, 'Django', 2012, 'Quentin Tarantino', 4);
$movie3 = new Movie(3, 'Fight Club', 1999, 'David Fincher', 5);

$film_age_1 = $movie1->getFilmAge();
$film_age_2 = $movie2->getFilmAge();
$film_age_3 = $movie3->getFilmAge();

echo($film_age_1);
echo($film_age_2);
echo($film_age_3);

?>