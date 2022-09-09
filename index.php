<?php

class Movie
{
    public $id;
    public $title;
    public $desctiption;
    public $year;
    public $movie_director;
    public $rating;

    public function __construct($_id, $_title, $_description, $_year, $_movie_director, $_rating)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->description = $_description;
        $this->year = $_year;
        $this->movie_director = $_movie_director;
        $this->rating = $_rating;
    }

    public function getFilmAge(){
        return date("Y") - $this->year;
    }

    public function getAbstract($max = 100){
        return substr($this->description, 0, $max) . '...';
    }
}

$movie1_description = 'Le ali della libertà è anche e soprattutto una rappresentazione accurata del concetto di speranza, di come un uomo innocente possa trovare il modo di sopravvivere all’idea che la sua vita gli sia stata rubata e che si ritrovi a pagare per un crimine che non ha commesso.';
$movie2_description = 'Con l\'aiuto di un cacciatore di taglie tedesco, uno schiavo liberato si mette in viaggio per salvare sua moglie da un brutale proprietario di piantagione del Mississippi.';
$movie3_description = 'Fight Club è una storia che parla di alienazione, consumismo e alienazione causata dal consumismo, un vortice nel quale l’uomo moderno può facilmente rimanere invischiato se non equipaggiato per far fronte al proprio disagio interiore che, nel caso del protagonista del film, assume inaspettatamente la forma del disturbo da personalità multipla, spingendolo verso un baratro vendicativo del quale egli stesso finisce per rischiare seriamente di essere vittima.';


$movie1 = new Movie(1, 'The Shawshank Redemption', $movie1_description, 1994, 'Frank Darabont', 4.6);
$movie2 = new Movie(2, 'Django', $movie2_description, 2012, 'Quentin Tarantino', 4);
$movie3 = new Movie(3, 'Fight Club', $movie3_description, 1999, 'David Fincher', 5);

$movies = [$movie1, $movie2, $movie3]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi passi con la OOP</title>
</head>
<body>

    <?php foreach($movies as $movie) : ?>
        <h3>ID: <?= $movie->id ?></h3>
        <h2>Titolo: <?= $movie->title?></h2>
        <p>Descrizione: <?= $movie->getAbstract()?></p>
        <p>Anno: <?= $movie->year?></p>
        <p>Il film è uscito da: <?= $movie->getFilmAge()?> anni</p>
        <p>Diretto da: <?= $movie->movie_director?></p>
        <strong>Valutazione degli utenti: <?= $movie->rating?> / 5</strong>
    <?php endforeach; ?>

    
</body>
</html>