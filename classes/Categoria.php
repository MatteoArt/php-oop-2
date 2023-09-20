<?php 

class Categoria {
    public $animale;
    public $razza;
    public $icona_categoria;

    public function __construct($_animale,$_razza,$_icona)
    {
        $this->animale = $_animale;
        $this->razza = $_razza;
        $this->icona_categoria = $_icona;
    }
}


?>