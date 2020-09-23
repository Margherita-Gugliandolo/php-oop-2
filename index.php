<?php
// nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni); definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto
// Nota Bene:
// area quadrato: lato * lato
// perimetro quadrato: 4 * lato
// volume cubo: lato * lato * lato
// superficie cubo: 6 * lato * lato

  class Square {
    public $lato;

    public function __construct($lato){
       $this -> lato = $lato;
    }

    public function getArea(){
      return $this -> lato * $this -> lato;
    }

    public function getPer(){
      return 4 * $this -> lato;
    }

    public function __toString() {
        return "SQUARE Area: " . $this -> getArea() . "<br>"
              . "SQUARE Perimetro: " . $this -> getPer();
    }
  }

  class Cube extends Square{
    public function getVol(){
      return parent::getArea() * $this -> lato;
    }
    public function getSuperf(){
      return 6 * parent::getArea();
    }
    public function __toString(){
      return "CUBE Volume : ". $this -> getVol(). "<br>"
      . "CUBE Superficie : ". $this -> getSuperf(). "<br>";
    }
  }



$sq1 = new Square (6);
$sq2 = new Square (4);
$sq3 = new Square (7);

$cub1 = new Cube (5);
$cub2 = new Cube (12);
$cub3 = new Cube (43);

echo $sq1 . "<br><br>" .
     $sq2 . "<br><br>" .
     $sq3 . "<br><br>" .
     $cub1 . "<br><br>" .
     $cub2 . "<br><br>" .
     $cub3;
?>
