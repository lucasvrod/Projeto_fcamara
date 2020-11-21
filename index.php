<?php
require __DIR__ . "/vendor/autoload.php";
$filaDao = new \_api\Classes\FilaDao();
$fila = new \_api\Classes\Fila();
$fila->setUsuario(2);
$id = 1;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<?php if($filaDao->read_dentro($fila) == FALSE){?>
    <form action="_api/fila.php" method="post">
        <?php
            $filaDao->read();
            $cont = 0;
            foreach($filaDao->read() as $filas):

                $cont = $cont + 1; 
            endforeach;
            echo "Pessoas na fila: ". $cont;
        ?>
    <label>Entrar:</label>
        <input name="id" type="name" id="defaultForm-apelido" class="form-control validate">
        <input type="submit" name="entrar">
    </form>
<?php }else{ ?>
    <form action="_api/sair_fila.php" method="post">

           <?php $filaDao->read();
            $cont = 0;
            $a = true;
            foreach($filaDao->read() as $filas):
                if($a == true)
                {
                    if($filas['fk_usuario'] == $id)
                    {
                        $a = false;
                        $cont = $cont + 1;
                    }
                    else
                    {
                        $cont = $cont + 1;
                    }
                }
            endforeach;
            echo "Sua posição na fila: ". $cont;?>

        <label>Sair:</label>
            <input name="id" type="name" id="defaultForm-apelido" class="form-control validate">
            <input type="submit" name="entrar">
        </form>
<?php } ?>  
</body>

</html>