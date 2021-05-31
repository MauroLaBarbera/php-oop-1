<?php
/* Ripassare i primi concetti di classe e di attributi e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
    => all'interno della classe sono dichiarati degli attributi
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà*/

class Movie {
    /**
     * ATTRIBUTI
    */
    public $title;
    public $description;
    public $vote;

    /**
     * CONSTRUCT
     */
     function __construct( $title, $description , $vote ) {
        $this->title = $title;
        $this->description = $description;
        $this->vote = $vote;
     }

     /**
      * GET EXCERPT FOR MOVIE
      */
      public function getExcerpt() {
          $sub = substr($this->description , 0 , 20);
          
          return $sub;
      }
}

//INSTANZA 1 
$movie1 = new Movie('Lorem Ipsum' , 'Description Movie 1 dsjkghsdhjkl sdjkhgihdsgh hdlskhg hsdlghsd hsdghksdj' , 4);
//$movie1->title ='Lorem Ipsum';
//$movie1->description = 'gkldhjsgkjlsdigsdhgkdkghdhgdjkh dsjkghsdhjkl sdjkhgihdsgh hdlskhg hsdlghsd hsdghksdj';
//$movie1->vote = 4;

var_dump($movie1);

echo '<h2>' .$movie1->title . '</h2>';

echo '<p>' . $movie1->getExcerpt() . '</p>';

//INSTANZA 2
$movie2 = new Movie('Ipsum Lorem' , 'Description Movie 2 sdf sdfsdfsdfsdf sdfsdfsdf dsgsahdfh adj' , 5);
//$movie2->title = 'Ipsum Lorem';
//$movie2->description = 'dgsdgsd sdf sdfsdfsdfsdf sdfsdfsdf dsgsahdfh adj ';
//$movie2->vote = 5;

var_dump($movie2);

echo '<h2>' .$movie2->title . '</h2>';

echo '<p>' . $movie2->getExcerpt() . '</p>';
