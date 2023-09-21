<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__.'/traits/Caratteristiche.php';
class Cuccia extends Prodotti
{
    use Caratteristiche;

    public $tipologia;
    public $materiale;


    public function __construct($_tip, $_materiale, $_age)
    {
        $this->tipologia = $_tip;
        $this->materiale = $_materiale;
        $this->lifestage = $_age;
    }

    public function printProdotto()
    {
?>
        <div class="article">
            <h3>Articolo: <?php echo $this->articolo ?></h3>
            <div>
                <div class="tipo"><?php echo $this->tipologia ?></div>
                <div>Materiale: <?php echo $this->materiale ?></div>
            </div>
            <div class="age">Lifestage: <?php echo $this->lifestage ?></div>
        </div>
<?php
    }
}

?>