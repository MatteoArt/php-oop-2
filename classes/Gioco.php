<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__.'/traits/Caratteristiche.php';
class Gioco extends Prodotti
{
    use Caratteristiche;

    public $tipo;
    public $materiale;

    public function __construct($_tipo, $_materiale, $_eta)
    {
        $this->tipo = $_tipo;
        $this->materiale = $_materiale;
        $this->lifestage = $_eta;
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
            <div class="age">Lifestage: <?php echo $this->lifestage ?></div>
        </div>


<?php
    }
}

?>