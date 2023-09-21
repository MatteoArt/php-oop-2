<?php
require_once __DIR__ . '/Categoria.php';

class Prodotti
{
    public $titolo;
    public $prezzo;
    protected $img;
    public $categoria;

    public function __construct($_titolo, $_prezzo, Categoria $_categoria)
    {
        $this->titolo = $_titolo;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }

    public function getImgPath($path)
    {
        //gestione eccezione
        if (!is_string($path)) {
            throw new Exception("Errore, il path non può essere un numero!");
        }
        $this->img = './images/' . $path;
    }

    public function ctrTitle($title) {
        if (!$title) {
            throw new Exception("");
        } else {
            return;
        }
    }

    public function printInfoCard()
    {
?>      <div>
           <div class="img-container">
               <img src="<?php echo $this->img ?>" alt="img prodotto">
           </div>
           <div class="info">
              <h2><?php echo $this->titolo ?></h2>
              <div style="margin-top: 15px;">Ordine singolo: <span  class="price"><?php echo $this->prezzo ?></span></div>
               <div class="icon-container">
                  <div>Categoria: <span class="categoria"><?php echo $this->categoria->animale ?></span></div>
                  <span><?php echo $this->categoria->icona_categoria ?></span>
               </div>
               <div>Razza: <?php echo $this->categoria->razza ?></div>
           </div>
        </div>



<?php
    }
}



?>