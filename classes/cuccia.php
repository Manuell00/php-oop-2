<?php

// Definisco la classe Cuccia che eridetà dalla classe Prodotto
class Cuccia extends Prodotto
{

    // Definisco l'attributo univoco rispetto alla classe Prodotto
    public $attributo_specifico;

    // Definisco il costruttore
    public function __construct($id, $immagine, $titolo, $prezzo, $categoria, $tipo, $attributo_specifico)
    {

        // definisco le proprietà e i metodi ereditati per gli attributi di Prodotto
        parent::__construct($id, $immagine, $titolo, $prezzo, $categoria, $tipo);

        // Inserisco la proprietà per l'attributo univoco
        $this->attributo_specifico = $attributo_specifico;
    }
}
