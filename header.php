<!DOCTYPE HTML>
<html>
<head>
    <?php
        session_start();

        if(!isset($_SESSION["idUsuario"])){
            header("Location: index.php?erro=Você precisa estar logado");
        }
    ?>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agenda de Contatos Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">	 -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	
	<!-- Custom Styles -->
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #dd356e;
            color: white;
        }

		.imprimir {
			background-color: #DD356E;
			color: white !important;
			border-radius: 20px;
		}
		nav a {
			font-weight: bold;
			padding: 10px 15px !important;
		}
    </style>

</head>
<body>

<!--<div class="fh5co-loader"></div>-->

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 menu-1">
                        <ul>
                            <li><a href="inicio.php">Início</a></li>
                            <li><a href="cadastro.php">Cadastro</a></li>
                            <li><a href="niver.php">Aniversários</a></li>
							<li><a class="imprimir" href="imprimircontatos.php">Imprimir contatos</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <form action="logout.php" method="GET">
                            <button class="btn btn-primary logout">Sair</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>