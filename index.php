<?php 

// create un file index.php in cui:
// è definita una classe ‘Movie’
// all’interno della classe sono dichiarate delle variabili d’istanza
// all’interno della classe è definito un costruttore
// all’interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà


    // definisco classe movie
    class Movie {

        // definisco delle variabili - attributi della classse movie
        public $titolo;
        public $anno;
        public $genere;
        public $regista;
        public $durata;

        // definisco costruttore per eseguire una determinata azione, per titolo e regista
        function __construct($titolo, $regista) {
            $this->titolo =  $titolo;
            $this->regista = $regista;
        }

        // definisco un metodo, una funzione per inserire titolo e genere del film
        public function getTitoloGenere() {
            return $this->titolo . '<br>' . '<strong>Genere: </strong>' . $this->genere;
        }
    }

    // creo istanza, oggetto per tre diversi film utilizzando la stessa classe movie con le sue proprietà
    $AdamProject = new Movie('The Adam Project', 'Shawn Levy');
    $AdamProject->anno = 2022;
    $AdamProject->genere = 'Film di fantascienza';
    $AdamProject->durata = '1h e 46min';

    $Dynasty = new Movie('Dynasty', 'Josh Schwartz, Stephanie Savage, Sallie Patrick');
    $Dynasty->anno = 2017;
    $Dynasty->genere = 'Soap Opera';
    $Dynasty->durata = '4 stagioni';

    $BlackMirror = new Movie('Black Mirror', 'Charlie Brooker');
    $BlackMirror->anno = 2019;
    $BlackMirror->genere = 'Serie Tv, Thriller';
    $BlackMirror->durata = '5 stagioni';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<body>

    <h1>MOVIE</h1>
            
    <div class="container">
        <div class="singoloFilm uno">
            <!-- stampo a schermo i valori definiti -->
            <h3><?php echo $AdamProject->titolo; ?> </h3>
            <ul>
                <li><?php echo $AdamProject->anno; ?></li>
                <li><?php echo $AdamProject->genere; ?></li>
                <li>Regia di <?php echo $AdamProject->regista; ?></li>
                <li><?php echo $AdamProject->durata; ?></li>
                <li class="dettagli"><strong>Titolo:</strong> <?php echo $AdamProject->getTitoloGenere(); ?></li>
            </ul>
        </div>

        
        <div class="singoloFilm due">
            <h3> <?php echo $Dynasty->titolo; ?> </h3>
            <ul>
                <li><?php echo $Dynasty->anno ?></li>
                <li><?php echo $Dynasty->genere; ?></li> 
                <li>Regia di <?php echo $Dynasty->regista; ?></li>
                <li><?php echo $Dynasty->durata; ?></li>
                <li class="dettagli"><strong>Titolo:</strong> <?php echo $Dynasty->getTitoloGenere(); ?></li>
            </ul>
        </div>

       
        <div class="singoloFilm tre">
            <h3><?php echo $BlackMirror->titolo; ?> </h3>
            <ul>
                <li><?php echo $BlackMirror->anno ?></li>
                <li><?php echo $BlackMirror->genere; ?></li>
                <li>Regia di <?php echo $BlackMirror->regista; ?></li>
                <li><?php echo $BlackMirror->durata; ?></li>
                <li class="dettagli"><strong>Titolo:</strong> <?php echo $BlackMirror->getTitoloGenere(); ?></li>
            </ul>
        </div>
    </div>

</body>
</html>