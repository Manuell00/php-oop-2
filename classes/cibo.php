<?php

// Definisco la classe Cibo che erediterà alcuni attributi dalla classe Prodotto
class Cibo extends Prodotto {

    // Inserisco l'unico attributo differente da Prodotti
    public $attributo_specifico;

    // Inserisco il construct  
    public function __construct($id, $immagine, $titolo, $prezzo, $categoria, $tipo, $attributo_specifico) {
       
        // Utilizzo il parent per prendere metodi e proprietà dalla classe Prodotto
        parent::__construct($id, $immagine, $titolo, $prezzo, $categoria, $tipo);

        // Associo i parametri agli attributi
        $this->attributo_specifico = $attributo_specifico;
    }
}
