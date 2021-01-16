<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
funzioni d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
        => all'interno della classe sono dichiarate delle variabili d'istanza
        => all'interno della classe è definito un costruttore
        => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
class Movie {
    public $title;
    public $year;
    public $language;
    public $rate;

    public function getAllData() {
        return get_object_vars($this);
    }

    function __construct($_title, $_year, $_language, $_rate) {
        $this -> title = strtolower($_title);
        $this -> year = $_year;
        $this -> language = $_language;
        $this -> rate = $_rate;
    }
}

$movies = [
    new Movie('Soul', 2020, 'it', 4),
    new Movie('Tenet', 2020, 'it', 3)
];


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        foreach ($movies as $movie) {
            $movieData = $movie -> getAllData(); ?>
            <div>
                <?php
                foreach ($movieData as $key => $data) {
                    ?>
                    <p>
                        <?php
                        echo $key." = ".$data; ?>
                    </p> <?php
                } ?>
            </div> <?php
        } ?>
    </body>
</html>
