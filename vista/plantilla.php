<?php
    $listado = Controladores::ctrListado();
    $comerciantes = Controladores::ctrComerciantes(null, null);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146469453-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-146469453-1');
    </script>
    <meta charset="UTF-8">
    <meta name="marketFace" content="todos los comerciantes en un solo lugar"/>
    <meta name="keywords" content="marketface, juegos, inflables, tortas, cosas dulces, tejidos, mercado"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, mini-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="demas/index.css">
    <script src="https://kit.fontawesome.com/f3f3afcb68.js" crossorigin="anonymous"></script>
    <title>2.0_FaceMarket</title>
</head>
<body>
    <div class="container-fluid">
        <!-- cabecera (estatica, va en todas las paginas) -->
        <div class="row">
            <div class="col-md-3 m-0">
                <img src="demas/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-9 mt-4">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav font-weight-bolder mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown font-weight-bolder active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorias
                            </a>
                            <div class="dropdown-menu rounded" aria-labelledby="navbarDropdown">
                                <?php foreach ($listado as $key => $value): ?>
                                    <a class="dropdown-item" href="index.php?pagina=listado&id=<?php echo $value["id"]; ?>"><?php echo $value["categoria"]; ?></a>
                                    <div class="dropdown-divider"></div>
                                <?php endforeach ?>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?pagina=soy">Quien Soy</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?pagina=contacto" tabindex="-1" aria-disabled="true">Contacto</a>
                        </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0 mr-auto">
                        <input class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Search">
                        <button class="btn btn-info my-2 my-sm-0" type="submit">Busqueda</button>
                        </form>
                        <a href="index.php?pagina=form"><button class="btn btn-info my-2 my-sm-0" type="submit">Agrega tu emprendimiento</button></a>
                    </div>
                </nav>
            </div>
        </div>
        <hr class="w-75 float-left">
        <!-- contenido dinamico -->
        <div class="row mt-5 justify-content-center">
            <?php 
                if(isset($_GET["pagina"])){
                    if ($_GET["pagina"] == "comercio" ||
                        $_GET["pagina"] == "soy" ||
                        $_GET["pagina"] == "contacto" ||
                        $_GET["pagina"] == "form" ||
                        $_GET["pagina"] == "listado" ||
                        $_GET["pagina"] == "info_comerciante") {
                        include 'vista/'.$_GET["pagina"].'.php';
                    }else{
                        include 'vista/404.php';
                    }
                }else{
                    include 'vista/index.php';
                }
            ?>
        </div>
        <!-- pie de pagina (estatica, va en todas las paginas) -->
        <div class="row text-center mt-5 py-5 bg-dark text-white font-weight-bolder">
            <div class="col-md-6 pt-2">
                MarketFace | 2020 &copy; N3g0ssd4rkDesing
            </div>
            <div class="col-md-6">
            <i class="fab fa-facebook-square h1 text-primary shadow"></i></div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>