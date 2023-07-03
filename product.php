<?php
class Prodotto {
    public $id;
    public $immagine;
    public $titolo;
    public $prezzo;
    public $categoria;
    public $tipo;

    public function __construct($id, $immagine, $titolo, $prezzo, $categoria, $tipo) {
        $this->id = $id;
        $this->immagine = $immagine;
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        
        // Verifica se la categoria è valida
        if ($categoria !== 'Cane' && $categoria !== 'Gatto') {
            throw new Exception("La categoria può essere solo 'Cane' o 'Gatto'");
        }
        
        $this->categoria = $categoria;
        $this->tipo = $tipo;
    }
}
