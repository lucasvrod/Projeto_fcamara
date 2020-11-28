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
    <div class="container ">
        <div class="col-md-12" >
            <div class="texto_fila">
                <H4 align="left" class="cor_prin_02_texto">ENTRE NA FILA E COMECE A JOGAR!</H2>
                <p align="left">A FCÂMARA OFERECE UMA VARIEDADE DE JOGOS PARA AJUDAR NA ROTINA <br>
                                DE TRABALHO. ESCOLHA UMA FILA, ACOMPANHE-A EM TEMPO REAL, SAIBA <br>
                                QUANDO CHEGAR SUA VEZ, E <span class="cor_prin_02_texto">DESESTREESSA!</span></p>
            </div>
        </div>
    </div>
    <div class="espaco_grid">
        <div class="container-fluid">
            <div class="row">
                <div class="card mb-3 card_fila" >
                    <div class="row no-gutters">
                        <div class="col-md-4 ">
                            <img src="img/fila/fila_videogame.jpg" class="card_img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body "> 
                                <H4 class="card_titulo">VIDEOGAME 01 </H4>
                                <h6 class="card_titulo">sala de descompressão</h6>                                
                                <div class="card_numero_fila">
                                    <H1><span class="">4 </span></H1>
                                    <div class="card_conteudo_fila">
                                        <span>PESSOAS</span>  <br>      
                                        <span >NA FILA</span><br>
                                    </div>
                                </div>
                                <div class="card_button">                           
                                    <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_fila_VIDEOGAME01">ENTRA NA FILA</button>
                                </div>
                                <div class="card_detalhe_icone">
                                    <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_videogame1">
                                        <H1><span class="">  <img src="img/icones/eye-4x.png" width="20" height="20" alt="Icone olho" > </span></H1>
                                        <div class="card_detalhe_texto">
                                            <span>Ver mais detalhes</span>  <br>      
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            

                <div class="card mb-3 card_fila" >
                    <div class="row no-gutters">
                        
                        <div class="col-md-4 ">
                            <img src="img/fila/fila_videogame1.jpg" class="card_img" alt="...">
                        </div>
                    
                        <div class="col-md-8">
                            <div class="card-body ">
                                
                                <H4 class="card_titulo">VIDEOGAME 02 </H4>
                                <h6 class="card_titulo">escritório</h6>
                                
                                <div class="card_numero_fila">
                                    <H1><span >5 </span></H1>
                                    <div class="card_conteudo_fila">
                                        <span>PESSOAS</span>  <br>      
                                        <span >NA FILA</span><br>
                                    </div>
                                </div>

                                <div class="card_button"> 
                                    <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_fila_VIDEOGAME02">ENTRA NA FILA</button>
                                </div>

                                <div class="card_detalhe_icone">
                                    <a href="#"  data-toggle="modal" data-target="#modal_detalhe_fila_videogame2">
                                        <H1><span >  <img src="img/icones/eye-4x.png" width="20" height="20" alt="Icone olho" > </span></H1>
                                        
                                        <div class="card_detalhe_texto">
                                            <span>Ver mais detalhes</span>  <br>      
                                        
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            

                <div class="card mb-3 card_fila" >
                    <div class="row no-gutters">
                        
                        <div class="col-md-4 ">
                            <img src="img/fila/fliperama7.jpg" class="card_img" alt="...">
                        </div>
                    
                        <div class="col-md-8">
                            <div class="card-body ">
                                
                                <H4 class="card_titulo">FLIPERAMA</H4>
                                <h6 class="card_titulo"><br></h6>
                                
                                <div class="card_numero_fila">
                                    <H1><span class="">4 </span></H1>
                                    <div class="card_conteudo_fila">
                                        <span>PESSOAS</span>  <br>      
                                        <span >NA FILA</span><br>
                                    </div>
                                </div>

                                <div class="card_button">
                                    <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_fila_FLIPERAMA">ENTRA NA FILA</button>
                                </div>

                                <div class="card_detalhe_icone">
                                    <a href="#"  data-toggle="modal" data-target="#modal_detalhe_fila_FLIPERAMA">
                                        <H1><span class="">  <img src="img/icones/eye-4x.png" width="20" height="20" alt="Icone olho" > </span></H1>
                                        
                                        <div class="card_detalhe_texto">
                                            <span>Ver mais detalhes</span>  <br>      
                                        
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                
                <div class="card mb-3 card_fila" >
                    <div class="row no-gutters">
                        
                        <div class="col-md-4 ">
                            <img src="img/fila/sinu.png" class="card_img" alt="...">
                        </div>
                    
                        <div class="col-md-8">
                            <div class="card-body ">
                                
                                <H4 class="card_titulo">MESA DE JOGOS </H4>
                                <h6 class="card_titulo">sinuca | ping pong</h6>
                                
                                <div class="card_numero_fila">
                                    <H1><span class="">4 </span></H1>
                                    <div class="card_conteudo_fila">
                                        <span>PESSOAS</span>  <br>      
                                        <span >NA FILA</span><br>
                                    </div>
                                </div>

                                <div class="card_button">
                                    <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_fila_MESA_DE_JOGOS">ENTRA NA FILA</button>
                                </div>

                                <div class="card_detalhe_icone">
                                    <a href="#"  data-toggle="modal" data-target="#modal_detalhe_fila_MESADEJOGOS">
                                        <H1><span class="">  <img src="img/icones/eye-4x.png" width="20" height="20" alt="Icone olho" > </span></H1>
                                        
                                        <div class="card_detalhe_texto">
                                            <span>Ver mais detalhes</span>  <br>      
                                        
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="espaco_grid calendario">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="calendario_conteudo">
                                <H3 class="cor_prin_01_texto" id="titulo_calen"> CALENDÁRIO DE <BR>ATIVIDADES</H3>
                                <h5 id="calen_texto">Agende uma noite de board game, organize um 
                                    campeonato de videogame ou cheque quando 
                                    haverá ginástica laboral na sede: </h5>
                                <div id="calen_button">
                                    <a href="calendario.php" type="button" class="btn button_fila calen_button" >ACESSAR AQUI</a>
                                </div>
                            </div>      
                        </div>
                        <div class="col-md-6">
                            <div  class="calendario_img">
                                <img src="img/caledario.jpg "alt="caledario">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <?php include 'layout/footer.php';?>


    <!--MODAL ENTRA NA FILA 1 -->
    <div class="modal fade" id="modal_fila_VIDEOGAME01" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FILA VIDEOGAME 01<br> sala de descompressão</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                    
                       <ul class=" modal_fila_numero">
                        <li class="">
                            <H1 class="cor_prin_02_texto">1</H1>
                        </li>
                        <li class="modal_fila_texto">
                           <h6 class="cor_braco">SUA POSIÇÃO<BR> NA FILA</h6>
                        </li>
                    </ul>

                    <div class="modal_fila_espaco">
                        <input name="equipamento" type="text" value="1" hidden>

                        <label> Que jogo gostaria de jogar?</label>
                        <input type="text" class="form-control" placeholder="Nome do Jogo" aria-label="JOGO" aria-describedby="basic-addon1">
                    </div>
                    <div class=" d-flex justify-content-center">
                        <button type="button " class="btn button_fila modal_tamanho_botao">ENTRA NA FILA</button>
                    </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>
    <!--MODAL VIDEOGAME 02 -->
    <div class="modal fade" id="modal_fila_VIDEOGAME02" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FILA VIDEOGAME 02<br> escritório</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                    
                       <ul class=" modal_fila_numero">
                        <li class="">
                            <H1 class="cor_prin_02_texto">1</H1>
                        </li>
                        <li class="modal_fila_texto">
                           <h6 class="cor_braco">SUA POSIÇÃO<BR> NA FILA</h6>
                        </li>
                    </ul>

                    <div class="modal_fila_espaco">
                        <input name="equipamento" type="text" value="1" hidden>

                        <label> Que jogo gostaria de jogar?</label>
                        <input type="text" class="form-control" placeholder="Nome do Jogo" aria-label="JOGO" aria-describedby="basic-addon1">
                    </div>
                    <div class=" d-flex justify-content-center">
                        <button type="button " class="btn button_fila modal_tamanho_botao">ENTRA NA FILA</button>
                    </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>
    <!--MODAL FILA FLIPERAMA -->
    <div class="modal fade" id="modal_fila_FLIPERAMA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FLIPERAMA<br></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                    
                       <ul class=" modal_fila_numero">
                        <li class="">
                            <H1 class="cor_prin_02_texto">4</H1>
                        </li>
                        <li class="modal_fila_texto">
                           <h6 class="cor_braco">SUA POSIÇÃO<BR> NA FILA</h6>
                        </li>
                    </ul>

                    <div class="modal_fila_espaco">
                        <input name="equipamento" type="text" value="1" hidden>

                        <label> Que jogo gostaria de jogar?</label>
                        <input type="text" class="form-control" placeholder="Nome do Jogo" aria-label="JOGO" aria-describedby="basic-addon1">
                    </div>
                    <div class=" d-flex justify-content-center">
                        <button type="button " class="btn button_fila modal_tamanho_botao">ENTRA NA FILA</button>
                    </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>
    <!--MODAL ENTRA NA FILA MESA DE JOGOS -->
    <div class="modal fade" id="modal_fila_MESA_DE_JOGOS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">MESA DE JOGOS<br> sinuca | ping pong</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                    
                    <ul class=" modal_fila_numero">
                        <li class="">
                            <H1 class="cor_prin_02_texto">1</H1>
                        </li>
                        <li class="modal_fila_texto">
                           <h6 class="cor_braco">SUA POSIÇÃO<BR> NA FILA</h6>
                        </li>
                    </ul>

                    <div class="modal_fila_espaco">
                        <input name="equipamento" type="text" value="1" hidden>

                        <label> Que jogo gostaria de jogar?</label>
                        <input type="text" class="form-control" placeholder="Nome do Jogo" aria-label="JOGO" aria-describedby="basic-addon1">
                    </div>
                    <div class=" d-flex justify-content-center">
                        <button type="button " class="btn button_fila modal_tamanho_botao">ENTRA NA FILA</button>
                    </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>

    <!--MODAL de detalhe na fila video game1 -->
    <div class="modal fade" id="modal_detalhe_fila_videogame1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal ">
                    <div class="modal-header text-center ">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FILA VIDEOGAME 01<br> sala de descompressão</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <ul class="modal_detalhe_ul">
                            <li class="modal_espaco_img">
                                <img src="img/teste.png" class="modal_detalhe_img">
                            </li>
                            <li class="modal_fila_texto ">
                            <h6 class="cor_braco">JOANA JOGO:<br> FIFA <br> STATUS: JOGANDO</h6>
                            </li>
                        </ul>
                        <div class=" d-flex justify-content-center">
                            <button type="button " class="btn button_fila modal_tamanho_botao">ENTRA NA FILA</button>
                        </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>
    
    <!--MODAL de detalhe na fila videogame2-->
    <div class="modal fade" id="modal_detalhe_fila_videogame2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal ">
                    <div class="modal-header text-center ">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FILA VIDEOGAME 02<br> escritório</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <ul class="modal_detalhe_ul">
                            <li class="modal_espaco_img">
                                <img src="img/teste.png" class="modal_detalhe_img">
                            </li>
                            <li class="modal_fila_texto ">
                            <h6 class="cor_braco">JOANA JOGO:<br> FIFA <br> STATUS: JOGANDO</h6>
                            </li>
                        </ul>
                        <div class=" d-flex justify-content-center">
                            <button type="button " class="btn button_fila modal_tamanho_botao">ENTRA NA FILA</button>
                        </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>
    <!--MODAL de detalhe na fila FLIPERAMA-->
    <div class="modal fade" id="modal_detalhe_fila_FLIPERAMA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal ">
                    <div class="modal-header text-center ">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">FLIPERAMA<br></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <ul class="modal_detalhe_ul">
                            <li class="modal_espaco_img">
                                <img src="img/teste.png" class="modal_detalhe_img">
                            </li>
                            <li class="modal_fila_texto ">
                            <h6 class="cor_braco">JOANA JOGO:<br> FIFA <br> STATUS: JOGANDO</h6>
                            </li>
                        </ul>
                        <div class=" d-flex justify-content-center">
                            <button type="button " class="btn button_fila modal_tamanho_botao">ENTRA NA FILA</button>
                        </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>
    

        <!--MODAL de detalhe na fila MESADEJOGOS-->
    <div class="modal fade" id="modal_detalhe_fila_MESADEJOGOS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal ">
                    <div class="modal-header text-center ">
                        <h6 class="modal-title w-100 font-weight-bold modal_texto cor_braco">MESA DE JOGOS<br>sinuca | ping pong</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png" class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <ul class="modal_detalhe_ul">
                            <li class="modal_espaco_img">
                                <img src="img/teste.png" class="modal_detalhe_img">
                            </li>
                            <li class="modal_fila_texto ">
                            <h6 class="cor_braco">JOANA JOGO:<br> FIFA <br> STATUS: JOGANDO</h6>
                            </li>
                        </ul>
                        <div class=" d-flex justify-content-center">
                            <button type="button " class="btn button_fila modal_tamanho_botao">ENTRA NA FILA</button>
                        </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>
        window.jQuery || document.write('<script src="jr/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>  

</body>

</html>