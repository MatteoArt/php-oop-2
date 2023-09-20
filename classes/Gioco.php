<?php
require_once __DIR__ . '/Prodotti.php';

class Gioco extends Prodotti
{
    public $tipo;
    public $eta;
    public $materiale;
    public $articolo;

    public function __construct($_tipo, $_materiale, $_eta)
    {
        $this->tipo = $_tipo;
        $this->materiale = $_materiale;
        $this->eta = $_eta;
    }

    public function printProdotto()
    {
?>
        <div class="article">
            <h3>Articolo: <?php echo $this->articolo ?></h3>
            <div>
                <div class="tipo"><?php echo $this->tipo ?></div>
                <div>Materiale: <?php echo $this->materiale ?></div>
            </div>
            <div class="age">Lifestage: <?php echo $this->eta ?></div>
        </div>


<?php
    }
}

?>