<?php

class verurl{
    public function trocarUrl($url){
        if(empty($url)){
            $url = "secoes/principal.php";
        }else{
            $url = "secoes/$url.php";
        }
        include_once($url);
    }
}

?>