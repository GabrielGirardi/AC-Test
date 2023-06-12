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
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Venda</title>
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
            <div class="row">              
            <div class="col-lg-12">
              <form class="card" action="./form-venda.php" method="POST">
                <div class="card-body">
                  <h3 class="card-title">Realizar venda de um produto</h3>
                  <div class="row">
		    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-label">Produto</label>
                        <select class="form-control custom-select">
                        <?php
                        foreach ($products as $product) {
                            if ($product['amount'] > 0) {
                                echo '<option value="' . $product['id'] . '">' . $product['name'] . '</option>';
                            }
                        }
                        ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Quantidade</label>
                        <input type="number" name="quantity" class="form-control" placeholder="Digite aqui a quantidade">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Valor unitário</label>
                        <div class="input-group">
                          <span class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                          </span>
                          <input type="text" class="form-control text-right" name="valor" aria-label="Valor">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Valor total</label>
                        <div class="input-group">
                          <span class="input-group-prepend">
                            <span class="input-group-text">
                                <?php
                                    $valor = $_POST['valor'];
                                    $quantidade = $_POST['quantity'];
                                    $total = $valor * $quantidade;

                                    echo $total;
                                ?>
                            </span>
                          </span>
                          <input type="text" class="form-control text-right" aria-label="Valor" disabled="disabled" title="Este campo não pode ser alterado">                          
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                      <div class="form-group">                        
                        <div class="form-label">&nbsp;</div>
                        <div class="custom-controls-stacked">
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                            <span class="custom-control-label">Atualizar valor unitário do produto</span>
                          </label>
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
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                  </div>
                </div>                
              </form>
            </div>
          </div>
        </div>
      </div>
	<div class="my-3 my-md-5">
          <div class="container">
            <div class="row row-cards row-deck">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Últimas vendas realizadas</h3>		                        
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">#</th>
                          <th>Produto</th>
                          <th>Quantidade</th>
                          <th>Valor unitário</th>
                          <th>Valor total da venda</th>                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $counter = 1;

                        foreach ($products as $product) {
                            $sales = number_format($product['sell'] * $product['price'], 2, ',', '.');
                            $productName = json_encode($product['name']);
                            $productPrice = number_format($product['price'], 2, ',', '.');
                            $productSale = json_decode($product['sell'], true);

                            if ($product['last_sell'] != null) {
                                echo '<tr>';
                                echo '<td><span class="text-muted">' . $counter . '</span></td>';
                                echo '<td>' . json_decode($productName, true) . '</td>';
                                echo '<td>' . $productSale . '</td>';
                                echo '<td> R$ ' . $productPrice . '</td>';
                                echo '<td> R$ ' . $sales . '</td>';
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