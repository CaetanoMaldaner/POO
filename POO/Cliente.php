<?php

include "Usuario.php";

class Cliente extends Usuario {
    function comprar() {
        return "O cliente realizou uma compra!";
    }
}


?>