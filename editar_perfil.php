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
                                <div>
                                    <img src="img/teste.png" id="img_perfil_usuario">
                                </div>
                                <div class="alterar_foto_button">
                                    
                                    <label for="fotoo"  title="Mudar Foto">
                                        <a class="button_alterar_foto" >ALTERAR FOTO</a>
       
                                    </label> 
                                    <input name="arquivo" type="file" id="fotoo" hidden>
                                </div>
  
                            </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                            <H3 id="titulo_editar_perfil">EDITAR PERFIL</H3>
                                      
                                            <h5 id="subtitulo_espaco">INFORMAÇÕES PESSOAIS</h5>
                                            
                                        <div>
                                            <label for="formGroupExampleInput2">Como você quer ser chamado</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nome">
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group " id="div_email" >
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
                                        <div class="form-group " id="div_repetir_senha">
                                            <label for="formGroupExampleInput2">Repetir nova senha *</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Repetir nova senha">
                                        </div>
                                        <div class="row">
                                            <div>
                                                <a href="index_fila.php" class="d-none d-lg-block" id="button_CANCELAR">CANCELAR</a>
                                            </div>
                                            <div>
                                                <button type="button" class="btn button_salvar" data-toggle="modal" data-target="#modal_salvar">SALVAR ALTERAÇÕES</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php include 'layout/footer.php';?>

    <!--MODAL salvar -->
    <div class="modal fade" id="modal_salvar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content modal_tamanho_cor">
                    <div class=" text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_titulo">Confirma que deseja<br> salvar suas alterações?</h5>
                        <!-- <button type="button" class="close d-none d-sm-block" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button> -->
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <h6 class="cor_braco" id="modal_texto_h7">Elas não poderão ser desfeitas.</h6>
        
                        <button type="button" class="btn button_salvar_modal posicao_button_salvar_modal" data-dismiss="modal">RETONAR</button>
                        <button type="button" class="btn button_salvar_modal posicao_button_salvar_modal" >SALVAR</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

    

</body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>
        window.jQuery || document.write('<script src="jr/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>  
</html>