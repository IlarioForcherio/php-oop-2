<?php

include_once __DIR__ . '/prodotto.php';

class Accessori extends Prodotto{

  public $materiale;
  public $dimensioni;

  


  public function  __construct(

    String $immagine,
    String $nome, 
    Float $prezzo,
    Category $category,

    String $materiale,
    String $dimensioni

    )
    {
    $this->materiale = $materiale;
    $this->dimensioni = $dimensioni;
    parent::__construct($immagine,$nome,$prezzo,$category);

  }


  public function print(){
        
    echo 'materiale:' . $this->materiale . '<br>';
    echo   'dimensioni:' . $this->dimensioni;
}


}

?>