<?php 
require_once __DIR__.'/Prodotti.php';

class Cibo extends Prodotti {
    public $articolo;
    public $tipologia_cibo;
    public $gusto;
    public $lifestage;

    public function __construct($_tip_cibo,$_gusto,$_lifestage)
    {
        $this->tipologia_cibo = $_tip_cibo;
        $this->gusto = $_gusto;
        $this->lifestage = $_lifestage;
    }


    public function printProdotto() {
        ?>     
                <div class="article">
                    <h3>Articolo: <?php echo $this->articolo ?></h3>
                    <div>
                       <div class="tipo"><?php echo $this->tipologia_cibo?></div>
                       <div>Gusto: <?php echo $this->gusto ?></div>
                    </div>
                    <div class="age">Lifestage: <?php echo $this->lifestage ?></div>
                </div>
<?php 
    } 
} ?>