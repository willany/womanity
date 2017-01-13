<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ecossistema</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/sweetalert.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/sweetalert.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!--<script src="assets/js/validator.min.js"></script>-->
        <script src="assets/js/jquery.maskedinput.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/js/config-messages.js" type="text/javascript"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </head>

    <body>
<?php
    session_start();

    require_once "classes/Conexao.class.php";
    require_once "classes/Usuario.class.php";


    if(!isset($_SESSION['logado'])):
        header("Location: index.php");
    else:

        if (isset($_GET['logout'])){
            $l = new Login;
            $l->deslogar();
        }


?>
		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Ecossistema</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>

                            <span>Seja bem-vindo(a)</span><br>
                            <span title="Sair do Sistema"><a href="?logout=sair" class="logout">Sair do sistema</a></span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Ecossistema de iniciativas </strong>para equidade de gênero e empoderamento da mulher</h1>
                        <div class="description">
                       	   <!--  <p>
                                <strong>Ecossistema de Atores pelos Direitos e Empoderamento das Mulheres:</strong>:<br>
                                 Interconexões para maximizar impacto</br>
                            
                            </p> -->
                        </div>
                    </div>
                </div>
                
<!--HEAD -->



                <!--  dependendo do tipo, irá carregar o form da iniciativa ou organização -->
                <?php
                    if ($_SESSION['usuario_tipo'] == 1 && $_SESSION['cadastro'] == 0){
                        include 'form_organizacao.php';
                    }else if($_SESSION['usuario_tipo'] == 2 && $_SESSION['cadastro'] == 0){
                        include 'form_iniciativa.php';
                    }else if($_SESSION['usuario_tipo'] == 1 && $_SESSION['cadastro'] == 1){
                        include 'form_organizacao_edit.php';
                    }else if($_SESSION['usuario_tipo'] == 2 && $_SESSION['cadastro'] == 1){
                        include 'form_iniciativa_edit.php';
                    }
                ?>
<!-- origin/master--> 
                    
            </div>
        </div>

    </body>

    <?php
        endif;
    ?>

</html>