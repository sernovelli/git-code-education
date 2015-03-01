<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site Simples - Code Education</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">

        <div class="masthead">
            <div class="col-lg-2">
                <h3 class="text-muted">Site Simples</h3>
            </div>
            <div class="col-lg-10">
                <nav>
                    <ul class="nav nav-justified">
                        <li class="active"><a href="<?php echo '?arquivo=home.php';?>">Home</a></li>
                        <li><a href="<?php echo '?arquivo=empresa.php';?>">Empresa</a></li>
                        <li><a href="<?php echo '?arquivo=produtos.php';?>">Produtos</a></li>
                        <li><a href="<?php echo '?arquivo=servicos.php';?>">Serviços</a></li>
                        <li><a href="<?php echo '?arquivo=contato.php';?>">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <?php if (isset($_GET['arquivo'])) {

                    if (file_exists($_GET['arquivo'])) {
                        require_once $_GET['arquivo'];
                    } else {
                        require_once '404.php';
                    }

                } else {
                    require_once 'home.php';
                } ?>
            </div>
        </div>

        <!-- Site footer -->
        <footer class="footer">
            <p>&copy; Todos os direitos reservados - Site Simples <?php echo date('Y'); ?></p>
        </footer>

    </div> <!-- /container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>