<?php

class Shop
{
    // Definisco l'attributo prodotti
    public $prodotti;

    // Al construct associo un'array all'attributo
    public function __construct()
    {
        $this->prodotti = [];
    }

    // Creo un metodo per l'aggiunta di un'istanza alla lista
    public function aggiungiProdotto($prodotto)
    {
        $this->prodotti[] = $prodotto;
    }


    // Creo un metodo per rimuovere ua determinata istanza dalla lista
    public function rimuoviProdotto($prodotto)
    {
        $index = array_search($prodotto, $this->prodotti);
        if ($index !== false) {
            unset($this->prodotti[$index]);
        }
    }

    public function salvaECaricaSuFileJson($arrayDaCaricare, $nomeFile)
    {
        // Carica i dati dal file
        if (file_exists($nomeFile)) {
            $data = file_get_contents($nomeFile);
            $this->prodotti = json_decode($data);
        }

        // Sovrascrive i dati nel file
        $data = json_encode($arrayDaCaricare);
        file_put_contents($nomeFile, $data);
    }
}
