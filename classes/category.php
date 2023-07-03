<?php
// Creo la classe Categoria 
class Categoria
{
    public $id;
    public $nome;

    public function __construct($id, $nome)
    {
        $this->id = $id;

        // Verifica se il nome della categoria è valido (come in Prodotti)
        if ($nome !== 'Cane' && $nome !== 'Gatto') {
            throw new Exception("Il nome della categoria può essere solo 'Cane' o 'Gatto'");
        }
        $this->nome = $nome;
    }
}
