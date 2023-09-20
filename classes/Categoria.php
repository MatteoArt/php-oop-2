<?php 

class Categoria {
    public $animale;
    public $razza;

    public function __construct($_animale,$_razza)
    {
        $this->animale = $_animale;
        $this->razza = $_razza;
    }
}


?>