<?php

include "Usuario.php";

class Administrador extends Usuario {


    function cadastro($nome, $email) {
        return "O administrador cadastrou o usuário: $nome,com o email: $email";
    }


}



?>