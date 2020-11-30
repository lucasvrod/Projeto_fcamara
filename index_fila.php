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
                <H4 align="left" class="cor_prin_02_texto">Escolha uma fila para jogar!</H2>
                <h6 align="left" id="texto_fila_a">A Fcamara oferece uma <b>variedade de jogos</b> para ajudar na sua rotina de  <br> 
                    trabalho. <b>Escolha uma fila,</b> acompanhe-a, saiba quando chegar sua vez e  <br>
                     <span class="cor_prin_02_texto">desestreeessa!!</span></h6>
            </div>
        </div>
    </div>
<!-- Começo  CARD -->
    <div class="espaco_grid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Card normal -->
                            <div class="card mb-3 card_fila" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" >
                                        <img src="img/fila/videogame1.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo">VIDEOGAME 01 </h5>
                                            <h6 id="card_subtitulo">sala de descompressão</h6>                                
                                            <div class="card_numero_fila">
                                                <H1><span>4 </span></H1>
                                                <div class="card_conteudo_fila">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_fila_VIDEOGAME01">Entrar na fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_videogame1">
                                                 
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card fila -->
                            <!-- <div class="card mb-3 card_fila_dentro" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/videogame1.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo cor_braco">VIDEOGAME 01 </h5>
                                            <h6 id="card_subtitulo" class="cor_braco">sala de descompressão</h6>                                
                                            <div class="card_numero_fila cor_braco">
                                                <H1 ><span>4 </span></H1>
                                                <div class="card_conteudo_fila cor_braco">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_sair_da_fila" data-toggle="modal" data-target="#modal_sair_fila_videogame1">Sair da fila</button>
                                            </div>
                                            <div class="card_modaldetalhe" >
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_videogame1_ativo">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto_ativo">
                                                        <span id="detalhe_texto" class="cor_braco">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                        <div class="col-md-6">
                            <!-- Card normal -->
                            <div class="card mb-3 card_fila" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/videogame2.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo">VIDEOGAME 02 </h5>
                                            <h6 id="card_subtitulo">escritório</h6>                                
                                            <div class="card_numero_fila">
                                                <H1><span>4 </span></H1>
                                                <div class="card_conteudo_fila">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_fila_VIDEOGAME02">Entrar na fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_videogame2">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card fila -->
                            <!-- <div class="card mb-3 card_fila_dentro" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/videogame2.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo cor_braco">VIDEOGAME 02 </h5>
                                            <h6 id="card_subtitulo" class="cor_braco">escritório</h6>                                
                                            <div class="card_numero_fila cor_braco">
                                                <H1><span>4 </span></H1>
                                                <div class="card_conteudo_fila cor_braco">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_sair_da_fila" data-toggle="modal" data-target="#modal_sair_fila_videogame2">Sair da fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_videogame2_ativo">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto"class="cor_braco">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Card normal -->
                            <div class="card mb-3 card_fila" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/fliperama.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo">FLIPERAMA </h5>
                                            <h6 id="card_subtitulo"><br></h6>                                
                                            <div class="card_numero_fila">
                                                <H1><span>4 </span></H1>
                                                <div class="card_conteudo_fila">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_fila_FLIPERAMA">Entrar na fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_FLIPERAMA">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card fila -->
                            <!-- <div class="card mb-3 card_fila_dentro" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/fliperama.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo cor_braco">FLIPERAMA </h5>
                                            <h6 id="card_subtitulo" class="cor_braco"><br></h6>                                
                                            <div class="card_numero_fila cor_braco">
                                                <H1><span>4 </span></H1>
                                                <div class="card_conteudo_fila cor_braco">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_sair_fila_FLIPERAMA">Entrar na fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_FLIPERAMA_ativo">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto" class="cor_braco">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                        <div class="col-md-6">
                            <!-- Card normal -->
                            <div class="card mb-3 card_fila" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/sinuca.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo">MESA DE JOGOS </h5>
                                            <h6 id="card_subtitulo">sinuca | ping pong</h6>                                
                                            <div class="card_numero_fila">
                                                <H1><span>4 </span></H1>
                                                <div class="card_conteudo_fila">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_fila_MESA_DE_JOGOS">Entrar na fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_MESADEJOGOS">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card fila -->
                            <!-- <div class="card mb-3 card_fila_dentro" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" id="card_img_fila">
                                        <img src="img/fila/sinuca.png" class="card_img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body "> 
                                            <h5 class="card_titulo cor_braco">MESA DE JOGOS </h5>
                                            <h6 id="card_subtitulo" class="cor_braco">sinuca | ping pong</h6>                                
                                            <div class="card_numero_fila cor_braco">
                                                <H1><span>4 </span></H1>
                                                <div class="card_conteudo_fila cor_braco">
                                                    <span>Jogador</span>  <br>      
                                                    <span >na fila</span><br>
                                                </div>
                                            </div>
                                            <div class="card_button">                           
                                                <button type="button" class="btn button_fila" data-toggle="modal" data-target="#modal_detalhe_fila_MESADEJOGOS">Entrar na fila</button>
                                            </div>

                                            <div class="card_modaldetalhe">
                                                <a href="#" data-toggle="modal" data-target="#modal_detalhe_fila_MESADEJOGOS_ativo">
                                                    <img src="img/icones/eye-4x.png" width="16" height="16" class="card_olho_icone" alt="Icone olho">
                                                    
                                                    <div class="card_detalhe_texto">
                                                        <span id="detalhe_texto" class="cor_braco">Ver mais detalhes</span>  <br>      
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Final -->

    <div class="espaco_grid calendario">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div >
                                <H4 id="titulo_calen"> CALENDÁRIO DE ATIVIDADES</H4>
                                <h6 id="calen_texto">Aqui você pode agendar uma noite de board games, organizar um<BR>
                                    campeonato de videogame ou checar quando haverá ginástica laboral na
                                    sede. Encontre seus amigos e divirta-se! </h6>
                                <div>
                                    <a href="calendario.php" type="button" class="btn button_fila" id="caledario_acesso" alt="button para acessar tela do calendario">Acessar aqui</a>
                                </div>
                            </div>      
                        </div>
                        <div class="col-md-6">
                            <div  class="calendario_img">
                                <img src="img/caledario.png"alt="caledario">
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
                            <h6 class="cor_braco"> Jogando <br><b> Joana</b><br> Jogo: FIFA </h6>
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
                            <h6 class="cor_braco"> Jogando <br><b> Joana</b><br> Jogo: FIFA </h6>
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
                            <h6 class="cor_braco"> Jogando <br><b> Joana</b><br> Jogo: FIFA </h6>
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




<!--________________________________________________________________________________  -->
<!-- ________________________________Modal ativo para quando o usuario esta na fila  -->
<!--_______________________________________________________________________________ -->
    <!--MODAL salvar videogame1 -->
    <div class="modal fade" id="modal_sair_fila_videogame1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content modal_tamanho_cor_sair">
                    <div class=" text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_titulo">Você tem certeza que deseja cancelar?</h5>
                        <!-- <button type="button" class="close d-none d-sm-block" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button> -->
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <h6 class="cor_braco" id="modal_texto_h7"></h6>
                        <button type="button" class="btn button_sair_da_fila modal_sair_fila_button" data-dismiss="modal">Calcelar</button>
                        <button type="button" class="btn button_salvar_modal modal_sair_fila_button" >Sair</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--MODAL de detalhe na fila videogame1 fila -->
    <div class="modal fade" id="modal_detalhe_fila_videogame1_ativo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <h6 class="cor_braco"> Jogando <br><b> Joana</b><br> Jogo: FIFA </h6>
                            </li>
                        </ul>
                        <div class=" d-flex justify-content-center">
                        </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>


    <!--MODAL salvar videogame2 -->
    <div class="modal fade" id="modal_sair_fila_videogame2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content modal_tamanho_cor_sair">
                    <div class=" text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_titulo">Você tem certeza que deseja cancelar?</h5>
                        <!-- <button type="button" class="close d-none d-sm-block" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button> -->
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <h6 class="cor_braco" id="modal_texto_h7"></h6>
                        <button type="button" class="btn button_sair_da_fila modal_sair_fila_button" data-dismiss="modal">Calcelar</button>
                        <button type="button" class="btn button_salvar_modal modal_sair_fila_button" >Sair</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--MODAL de detalhe na fila videogame2 fila  modal_detalhe_fila_FLIPERAMA_ativo-->
    <div class="modal fade" id="modal_detalhe_fila_videogame2_ativo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <h6 class="cor_braco"> Jogando <br><b> Joana</b><br> Jogo: FIFA </h6>
                            </li>
                        </ul>
                        <div class=" d-flex justify-content-center">
                        </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>

    <!--MODAL salvar FLIPERAMA -->
    <div class="modal fade" id="modal_sair_fila_FLIPERAMA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content modal_tamanho_cor_sair">
                    <div class=" text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_titulo">Você tem certeza que deseja cancelar?</h5>
                        <!-- <button type="button" class="close d-none d-sm-block" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button> -->
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <h6 class="cor_braco" id="modal_texto_h7"></h6>
                        <button type="button" class="btn button_sair_da_fila modal_sair_fila_button" data-dismiss="modal">Calcelar</button>
                        <button type="button" class="btn button_salvar_modal modal_sair_fila_button" >Sair</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!--MODAL de detalhe na fila FLIPERAMA-->
    <div class="modal fade" id="modal_detalhe_fila_FLIPERAMA_ativo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <h6 class="cor_braco"> Jogando <br><b> Joana</b><br> Jogo: FIFA </h6>
                            </li>
                        </ul>
                        <div class=" d-flex justify-content-center">
                        </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>



    <!--MODAL salvar MESADEJOGOS -->
    <div class="modal fade" id="modal_sair_fila_MESADEJOGOS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content modal_tamanho_cor_sair">
                    <div class=" text-center ">
                        <h5 class="modal-title w-100 font-weight-bold modal_titulo">Você tem certeza que deseja cancelar?</h5>
                        <!-- <button type="button" class="close d-none d-sm-block" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button> -->
                    </div>
                    <div class="modal-body mx-3 ">
                        
                        <h6 class="cor_braco" id="modal_texto_h7"></h6>
                        <button type="button" class="btn button_sair_da_fila modal_sair_fila_button" data-dismiss="modal">Calcelar</button>
                        <button type="button" class="btn button_salvar_modal modal_sair_fila_button" >Sair</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!--MODAL de detalhe na fila MESADEJOGOS-->
    <div class="modal fade" id="modal_detalhe_fila_MESADEJOGOS_ativo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <h6 class="cor_braco"> Jogando <br><b> Joana</b><br> Jogo: FIFA </h6>
                            </li>
                        </ul>
                        <div class=" d-flex justify-content-center">
                        </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>



















    <!-- Modal salvar fila -->
    <div class="modal fade" id="modal_sair_fila123" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/checked4.png" alt="Sucesso" class="modal_salvar_fila_img">
                            </div>
                                <div class="col-md-9">
                                    <H4 class="cor_braco modal_salvar_fila_texto">Você entrou<br> na fila na<br> posição:</H4>
                                    <H1 class="modal_salvar_fila_numero">2</H1>
                                </div>
                                </div>
                                <h6 class="modal_salvar_fila_footer">Agora é só aguardar que<br> jajá é sua vez de jogar!</h6>
                            </div>
                        </div>
                    <div class=" d-flex justify-content-center">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal ERRO -->
    <div class="modal fade" id="modal_erro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="_api/api.php" method="post">
                <div class="modal-content cormodal">
                    <div class="modal-header text-center ">
                        <img class="modal-title modal_salvar_fila_logo" src="img/LOGOBRANCASEMFCAMARA3.png"  alt="FIFO Logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="img/close.png"  class="modal_icone_close">
                        </button>
                    </div>
                    <div class="modal-body mx-3 ">
                        <img src="img/001-close.png" alt="Erro" class="modal_erro_img">
                        <h6 class="modal_erro_texto">Erro Erro Erro</h6>
                    <div class=" d-flex justify-content-center">
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