<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>

<body>
    <?php
    require_once("data/db.php");

    // Ottieni tutti i prodotti dallo shop
    $prodotti = $shop->prodotti;

    // Itera sui prodotti e crea una card per ciascuno
    foreach ($prodotti as $prodotto) {
    ?>

        <!-- Stampo la card -->
        <div class="product-card">
            <img src="<?php echo $prodotto->immagine; ?>" alt="Immagine Prodotto" width="200">
            <h3><?php echo $prodotto->titolo; ?></h3>
            <p><strong>Prezzo: </strong><?php echo $prodotto->prezzo; ?>€</p>
            <p><strong>Categoria: </strong><?php echo $prodotto->categoria; ?></p>
            <p><strong>Tipo: </strong><?php echo $prodotto->tipo; ?></p>
            <?php
            // Verifica il tipo di prodotto e mostra l'attributo specifico
            if ($prodotto instanceof Cibo) {
                echo "<p><strong>Attributo specifico: </strong>{$prodotto->attributo_specifico}</p>";
            } elseif ($prodotto instanceof Gioco) {
                echo "<p><strong>Attributo specifico: </strong>{$prodotto->attributo_specifico}</p>";
            } elseif ($prodotto instanceof Cuccia) {
                echo "<p><strong>Attributo specifico: </strong>{$prodotto->attributo_specifico}</p>";
            }
            ?>
            <button>Aggiungi al carrello</button>
        </div>
    <?php
    }
    ?>

    <!-- STYLE -->
    <style>
        .product-card {
            border: 1px solid black;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</body>

</html>