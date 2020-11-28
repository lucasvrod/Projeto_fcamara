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

<header class="header">
    <div class="container ">
        <div class="col-md-12" >
            <div class="row" >
                <div>
                    <a href="index_fila.php" >
                        <div class="logo">
                            <img src="img/LOGO.png" id="img_logo" alt="FIFO Logo">
                        </div>
                    </a>
                </div>    
                
                <div id="headar_espacamento">
                    <h6 id="header_nome" >Olá, MARCOS. <br>Bem vindo(a)</h6>
                </div>

                <div class="btn-group dropdowns_btn ">
                    <button type="button" class="btn dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="img/Vector.png">
                    </button>

                    <div class="dropdown-menu header_dropdowns">
                        <a class="dropdown-item header_dropdowns" href="index_fila.php" >PÁGINA INICIAL</a>
                        <a class="dropdown-item header_dropdowns" href="editar_perfil.php">EDITAR PERFIL</a>
                        <a class="dropdown-item header_dropdowns" href="index.php">SAIR</a>  
                    </div>

                </div> 
                
                <div>
                    <img src="img/teste.png" id="perfil" alt="FIFO Logo">
                </div>
                
            </div>
        </div>
    </div>
</header>