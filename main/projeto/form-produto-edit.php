<!doctype html>
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
    <title>Novo produto</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
     <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="./assets/js/sell.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <?php include_once './partials/scripts.php'; ?>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
            <?php include_once './partials/header.php'; ?>
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="row">              
            <div class="col-lg-12">
              <form class="card">
                <div class="card-body">
                  <h3 class="card-title">Editar produto - Batata</h3>
                  <div class="row">
		              <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Descrição</label>
                      <input type="text" class="form-control" name="example-text-input" placeholder="Arroz.." value="Batata">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                      <label class="form-label">Estoque</label>
                      <input type="number" class="form-control" placeholder="10.." value="2000">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                      <label class="form-label">Código de barras</label>
                      <input type="number" class="form-control" placeholder="78978978978978">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                      <label class="form-label">Valor unitário</label>
                      <div class="input-group">
                        <span class="input-group-prepend">
                          <span class="input-group-text">R$</span>
                        </span>
                        <input type="text" class="form-control text-right" aria-label="Valor" value="1,50">                          
                      </div>    
                    </div>
                  </div>                    
                </div>
              </div>
              <div class="card-footer text-left" style="display: flex; justify-content: space-between">
		          <div>
		            <a href="produtos.php" class="btn btn-secondary">Voltar para produtos</a>
		          </div>
		           <div>
		           <button type="submit" class="btn btn-primary">Confirmar alteração</button>
		           </div>                                    
                </div>                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>