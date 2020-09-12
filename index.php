<?php

require_once 'safe.php';
require_once 'api.php';

$hg = new  MY_API(KEY_API);
$dolar = $hg->dolar_cot();
$euro = $hg->dolar_cot();
$libra = $hg->dolar_cot();


if ($hg->is_error() == false){
    $variation = ( $dolar['variation'] < 5 ) ? 'danger' : 'info';
    $variation = ( $euro['variation'] < 5 ) ? 'danger' : 'info';
    $variation = ( $libra['variation'] < 5 ) ? 'danger' : 'info';
}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

  <div class="container">
          <p><h1>COTAÇÕES DO MERCADO</h1></p>
          <div class="row">
                
              <div class="col-12 ">
                  <p>Dólar</p>
                    <?php if ($hg->is_error() == false): ?>
                    <p><span class="badge badge-pill badge-<?php echo ($variation); ?>"><?php echo ($dolar['buy']);?></span></p>
                    <?php else: ?>
                   
                    <?php endif; ?>
              </div>
              <div class="col-12 ">
                  <p>euro</p>
                    <?php if ($hg->is_error() == false): ?>
                    <p><span class=""><?php echo ($euro['buy']);?></span></p>
                    <?php else: ?>
                   
                    <?php endif; ?>
              </div>
              <div class="col-12 ">
                  <p>libra</p>
                    <?php if ($hg->is_error() == false): ?>
                    <p><span class="badge badge-pill badge-<?php echo ($variation); ?>"><?php echo ($libr\['buy']);?></span></p>
                    <?php else: ?>
                   
                    <?php endif; ?>
              </div>

              </div>
      </div>
      







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>