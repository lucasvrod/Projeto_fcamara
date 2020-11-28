<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>FIFO - Fcamara</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <?php if(isset($_GET['idPerfil'])){ $idclicado = $_GET['idPerfil'];}?>
</head>


<body>
    <header>
        <?php include 'layout/header.php';?>
    </header>
    <form>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/teste.png" id="perfil">
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <H3>EDITAR PERFIL</H3>
                                    <h5>INFORMAÇÕES PESSOAIS</h3>

                                    <div class="">
                                        <label for="formGroupExampleInput2">Como você quer ser chamado *</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Email *</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5> SUA SENHA</h5>

                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Sua senha atual *</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                    </div> 

                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Nova senha</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Repetir nova senha *</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>










    
    <?php include 'layout/footer.php';?>

</body>

</html>