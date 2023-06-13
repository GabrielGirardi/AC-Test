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
    <title>Produtos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="./assets/js/tabs.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <?php include_once './partials/scripts.php'; ?>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
        <?php include_once './partials/header.php';?>
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="row row-cards row-deck">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Produtos</h3>
                    <div class="card-options">
                      <a href="form-produto.php" class="btn btn-azure">Adicionar</a>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">#</th>
                          <th>Descrição</th>
                          <th>Valor unitário</th>
                          <th>Estoque</th>
                          <th>Data última venda</th>
                          <th>Total de vendas</th>                          
                          <th class="w-1"></th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php
                            $counter = 1;

                            foreach ($products as $product) {
                                $sales = number_format($product['sell'] * $product['price'], 2, ',', '.');
                                $productName = json_encode($product['name']);
                                $productPrice = number_format($product['price'], 2, ',', '.');
                                $productAmount = json_decode($product['amount'], true);
                                $productDate = json_encode($product['last_sell']);
                                $productActive = json_decode($product['active']);

                                if($productDate == 'null'){
                                    $productDate = 'Nenhuma Venda';
                                }

                                if($productAmount > 0 && $productActive == 1 ) {
                                    echo '<tr>';
                                    echo '<td><span class="text-muted">' . $counter . '</span></td>';
                                    echo '<td>' . json_decode($productName, true) . '</td>';
                                    echo '<td> R$ ' . $productPrice . '</td>';
                                    echo '<td>' . $productAmount . '</td>';
                                    echo '<td>' . $productDate . '</td>';
                                    echo '<td> R$ ' . $sales . '</td>';
                                    echo '<td><a class="icon" href="form-produto-edit.php"><i class="fe fe-edit"></i></a></td>';
                                    echo '<td class="delete-prod"><a class="icon" href="#"><i class="fe fe-trash"></i></a></td>';
                                    echo '</tr>';

                                    $counter++;
                                }
                            }
                            ?>
                      </tbody>
                    </table>
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