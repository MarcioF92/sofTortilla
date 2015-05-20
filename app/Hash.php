<?php

/* Clase Hash para mayor seguridad en las contraseñas */

class Hash
{
    public static function getHash($algoritmo, $data, $key){
        $hash = hash_init($algoritmo, HASH_HMAC, $key);
        hash_update($hash, $data);

        return hash_final($hash); //Devuelve encriptación
    }

}

?>