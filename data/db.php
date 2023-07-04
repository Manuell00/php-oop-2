<?php

require_once __DIR__ . '/../classes/product.php';
require_once __DIR__ . '/../classes/category.php';
require_once __DIR__ . '/../classes/cibo.php';
require_once __DIR__ . '/../classes/gioco.php';
require_once __DIR__ . '/../classes/cuccia.php';
require_once __DIR__ . '/../classes/shop.php';



// Creare le istanze dei prodotti, categorie e dello shop
$prodotto1 = new Cibo(1, 'immagine1.jpg', 'Cibo per cani', 10, 'Cane', 'Cibo', 'Croccantini');
$prodotto2 = new Gioco(2, 'immagine2.jpg', 'Palla da gioco', 15, 'Cane', 'Gioco', 'Gomma');
$prodotto3 = new Cuccia(3, 'immagine3.jpg', 'Cuccia per gatti', 20, 'Gatto', 'Cuccia', 'Morbidosa');
$arrayProdotti = [$prodotto1, $prodotto2, $prodotto3];

$categoriaCane = new Categoria(1, 'Cane');
$categoriaGatto = new Categoria(2, 'Gatto');

$shop = new Shop();
foreach ($arrayProdotti as $prod) {
    $shop->aggiungiProdotto($prod);
    echo '<br>';
}
