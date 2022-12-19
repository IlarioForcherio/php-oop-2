<?php

include_once __DIR__ . '/prodotto.php';

class Accessori{

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
    

  }


}

?>