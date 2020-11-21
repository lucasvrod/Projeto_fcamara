<?php
require __DIR__ . "/../vendor/autoload.php";
if(isset($_POST['id']) && !empty($_POST['id']))
{
    $fila = new \_api\Classes\Fila();

    $fila->setUsuario($_POST['id']);
    $fila->setHora(date("H:i:s"));
    $fila->setEquipamento('1');
    $fila->setStatus('Ativo');

    $filaDao = new \_api\Classes\FilaDao();
    $filaDao->create($fila);
    $filaDao->read();
    

}
$cont = 0;
foreach($filaDao->read() as $filas):
    $cont = $cont + 1;
    echo $cont."<br> Nome: ".$filas['nome']."<br>".$filas['status']."<br>".$filas['hora']."<hr>";
endforeach;

 
?>