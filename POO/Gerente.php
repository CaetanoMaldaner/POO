<?php

include "Usuario.php";

class Gerente extends Usuario {

    function demitir(Administrador $administrador) {
        return "O gerente demitiu o administrador: " . $administrador->getNome();
    }

}

?>