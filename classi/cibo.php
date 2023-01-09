nes (20 sloc)  460 Bytes

<?php

class Cibo extends Prodotto{
    public $peso_netto;
    public $ingredienti;

    public function __construct(


        String $immagine,
        String $nome,
        Float $prezzo, 
        Categoria $category,


        //own
        Float $peso_netto,
        String $ingredienti
    )
    {
        $this->peso_netto=$peso_netto;
        $this->ingredienti=$ingredienti;
        parent::__construct($immagine,$nome,$prezzo,$category);
    }
}

?>