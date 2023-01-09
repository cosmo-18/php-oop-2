<?php


include_once __DIR__ . './prodotto.php';

class Accessori extends Prodotto{
    public $materiale;
    public $dimensioni;


    public function __construct(


        String $immagine,
        String $nome,
        Float $prezzo, 
        Categoria $category,


        //own
        String $materiale,
        String $dimensioni
    )
    {
        $this->materiale= $materiale;
        $this->dimensioni= $dimensioni;
        parent::__construct($immagine,$nome,$prezzo,$category);
    }
}

?>