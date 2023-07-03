<?php
// Definisco la classe Gioco che eredita da Prodotto
class Gioco extends Prodotto
{

    // Definisco l'attributo univoco rispetto alla classe Prodotto
    public $attributo_specifico;

    // Creo il construct
    public function __construct($id, $immagine, $titolo, $prezzo, $categoria, $tipo, $attributo_specifico)
    {

        // Inserisco le proprietà e i metodi ereditati
        parent::__construct($id, $immagine, $titolo, $prezzo, $categoria, $tipo);

        // Associo l'attributo al parametro
        $this->attributo_specifico = $attributo_specifico;
    }
}
