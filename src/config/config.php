<?php 
//Configuração de data/hora padrão para o sistema
date_default_timezone_set('America/Sao_Paulo'); 
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');


require_once(realpath(dirname(__FILE__).'/database.php'));

//Configurações de pastas
define('MODEL_PATH', realpath(dirname(__FILE__,2).'/models'));

define('DATABASE_PATH', realpath(dirname(__FILE__,2).'/src/config/database.php'));

?>