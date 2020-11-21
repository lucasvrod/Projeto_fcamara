<?php
require __DIR__ . "/../vendor/autoload.php";
    if(isset($_POST['id']) && !empty($_POST['id']))
    {
        $fila = new \_api\Classes\Fila();
    
        $fila->setUsuario($_POST['id']);
        $fila->setEquipamento(1);
    
        $filaDao = new \_api\Classes\FilaDao();
        $filaDao->delete($fila);
        
    
    }
?>