<?php
    
    print_r(realpath(dirname(__FILE__,2).'/src/config/database.php'));
    require_once realpath(dirname(__FILE__,2).'/src/config/database.php');
    
    Database::getConection();
    
?>