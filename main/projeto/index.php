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
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <?php include_once './partials/scripts.php'; ?>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
        <?php include_once './partials/header.php'; ?>
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Home
              </h1>
            </div>
            <div class="row row-cards">
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">                    
                    <div class="h1 m-0">
                      <?php 
                      if(count($products) > 0){
                        echo count($products);
                      } else {
                        echo 0;
                      }
                      ?>
                    </div>
                    <div class="text-muted mb-4">Produtos</div>
                  </div>
                </div>
              </div>
	            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">                    
                    <div class="h1 m-0">
                      <?php
                       $counter = 0;
                        foreach ($products as $product) {
                          if ($product['last_sell'] != null) {
                            $counter++;
                          }
                        }

                        echo $counter;
                      ?>
                    </div>
                    <div class="text-muted mb-4">Venda</div>
                  </div>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>
  </body>
</html>