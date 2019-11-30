<?php
    require_once realpath(dirname(__FILE__).'/config/config.php');
    require_once MODEL_PATH.'/usuario.php';


    $usuario = new Usuario(["primeiro_nome"=>"Welton","segundo_nome"=>"Castoldi"]);

    var_dump($usuario);
?>