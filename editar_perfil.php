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

    <div class="espaco_grid">
        <form>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/teste.png" id="img_perfil_usuario">
                                <br>
                                <a href="#" id="alterar_foto" class="stretched-link ">ALTERAR FOTO</a>
                            </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                            <H3 id="titulo_espaco">EDITAR PERFIL</H3>
                                      
                                            <h5 id="subtitulo_espaco">INFORMAÇÕES PESSOAIS</h5>
                                            
                                        <div class="">
                                            <label for="formGroupExampleInput2">Como você quer ser chamado</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nome">
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group div_email" >
                                            <label for="formGroupExampleInput2">Email *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="email">
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
                                        <h5 id="subtitulo_espaco"> SUA SENHA</h5>

                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Sua senha atual </label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Senha atual">
                                        </div> 

                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Nova senha</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nova senha">
                                        </div> 

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group  " id="div_repetir_senha">
                                            <label for="formGroupExampleInput2">Repetir nova senha *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Repetir nova senha">
                                        </div>
                                        <a href="index_fila.php" class="aliamento_button" id ="">CANCELAR</a>

                                        <button type="button" class="btn aliamento_button button_salvar"  data-toggle="modal" data-target="#modal_salvar">SALVAR ALTERAÇÕES</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--MODAL salvar -->
    <!-- <div class="modal fade" id="modal_salvar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">Confirma que deseja salvar suas <br>alterações? </h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>

                    <div class="modal-body mx-3 ">
                        <h6>  Elas não poderão ser desfeitas.</h6>
                        <div class=" d-flex justify-content-center">
                        <button type="button " class="btn button_fila modal_tamanho_botao">ENTRA NA FILA</button>
                    </div>
                    </div>   
                </div>
            </form>
        </div>
    </div> -->
    <div class="modal fade" id="modal_salvar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_texto">Confirma que deseja salvar suas alterações?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        
                       <h6 class="cor_braco">Elas não poderão ser desfeitas.</h6>
                        
                    </div>
                    <div class=" d-flex justify-content-center">

                        <button type="button" class="btn button_salvar modal_tamanho_botao" id="button_modal_salvar" data-dismiss="modal">RETONAR</button>
                        <button type="button" class="btn button_salvar modal_tamanho_botao" id="button_modal_salvar" >SALVAR</button>


                    </div>
                </div>
            </form>
        </div>
    </div>









    
    <?php include 'layout/footer.php';?>

</body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>
        window.jQuery || document.write('<script src="jr/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>  
</html>