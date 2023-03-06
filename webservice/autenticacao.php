<?php


function autenticar_usuario(){
    $headers = apache_request_headers();
    $token = 'Token asdhjeyUYUegqnm22@ndk';
    
    if (isset($headers['authorization'])){

        if($token == $headers['authorization']){
            return true;
        }
    }

    return false;
}

?>