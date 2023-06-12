<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="pt-br" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <link rel="stylesheet" href="./assets/css/error.css" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Produtos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <!-- SW2 -->
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="./assets/js/alerts.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <?php include_once './partials/scripts.php'; ?>
</head>
<body class="">
    <div class="page">
        <div class="page-main">
            <?php include_once './partials/header.php';?>
            <div class="error-content">
                <h2>
                    <?php
                        switch ($GLOBALS['product_error']) {
                            case 1:
                                echo "Erro ao inserir Produto, verifique os campos e tente novamente...";
                                break;
                            case 2:
                                echo "Não foi possível processar o formulário!";
                                break;
                            default:
                                echo "Ocorreu um erro...";
                        }
                    ?>
                </h2>
                <img class="error-img" src="./assets/images/6428224.jpg" alt="" width="320" height="320"/>
                <a class="button-back" href="./index.php">
                    Voltar a tela inicial
                </a>
            </div>
        </div>
    </div>
</body>
</html>
