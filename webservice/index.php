<?php
require_once('autenticacao.php');
require_once('clientes.php');


if (autenticar_usuario()){
    
    if(isset($_GET['cpf'])){
        $cpf = $_GET['cpf'];

        if(isset($clientes[$cpf])){
            // Retorna a resposta como JSON
            header('Content-Type: application/json');
            echo json_encode($clientes[$cpf]);
        }else{
            header('HTTP/1.0 404 Not Found');
        }
    }else{
        header('HTTP/1.0 400 Bad Request');
    }
}else{
    header('HTTP/1.0 403 Forbidden');
}


?>