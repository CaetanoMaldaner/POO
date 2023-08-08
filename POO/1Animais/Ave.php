<?php



class Ave extends Animal {
    var $penas;

    function __construct($nome, $idade, $penas) {
        parent::__construct($nome, $idade);
        $this->penas = $penas;
    }

    function voar() {
        return "A Ave voa!";
    }

}



?>