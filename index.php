<?php
require_once __DIR__ . '/classes/Prodotti.php';
require_once __DIR__ . '/classes/Categoria.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Cuccia.php';
require_once __DIR__ . '/classes/Gioco.php';
include __DIR__ . '/db/products.php';

$productsList = array_map(function ($el) {
    //array contenente oggetto prodotto e oggetto articolo
    $arr_el = [];

    $prodotto = new Prodotti($el['nome_prodotto'], $el['prezzo'], new Categoria($el['categoria'], $el['razza'], $el['icona']));
    try {
        $prodotto->getImgPath($el['img']);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    
    $arr_el[] = $prodotto;

    if ($el['articolo'] === 'cibo') {
        $cibo = new Cibo($el['tipo'], $el['varietà'], $el['lifestage']);
        $cibo->setArticolo($el['articolo']);
        $arr_el[] = $cibo;
    } else if ($el['articolo'] === 'gioco') {
        $gioco = new Gioco($el['tipo'], $el['varietà'], $el['lifestage']);
        $gioco->setArticolo($el['articolo']);
        $arr_el[] = $gioco;
    } else if ($el['articolo'] === 'cuccie') {
        $cuccia = new Cuccia($el['tipo'], $el['varietà'], $el['lifestage']);
        $cuccia->setArticolo($el['articolo']);
        $arr_el[] = $cuccia;
    }
    return $arr_el;
}, $rawProdList);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Php OOP Animali</h1>
    <div class="container">
        <div class="card-container">
            <?php
            foreach ($productsList as $product) {
               try {
                $product[0]->ctrTitle($product[0]->titolo);
            ?> <div class="card">
                <?php
                    $product[0]->printInfoCard();
                    $product[1]->printProdotto();
                ?>
                </div>
            <?php
                } catch(Exception $e) {
                    echo $e->getMessage();
                }}
            ?>
        </div>
    </div>
</body>

</html>