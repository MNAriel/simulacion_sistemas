<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Los Borbotones</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.prepbootstrap.com/Content/shieldui-lite/dist/css/light/all.min.css" />
    <script type="text/javascript" src="https://www.prepbootstrap.com/Content/shieldui-lite/dist/js/shieldui-lite-all.min.js"></script>

    <script type="text/javascript" src="https://www.prepbootstrap.com/Content/data/shortGridData.js"></script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Los Borbotones</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Tareas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.dropbox.com/sh/87kikqokj7owrpg/AACzzZ4W0CsiRLNuxVxHcHUOa?dl=0">Material Docente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Integrantes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('https://i.ytimg.com/vi/gDDTXAZmst4/maxresdefault.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1 class="text-center">PRACTICA  NRO  2</h1>
              <h2 class="subheading text-center">Generador Congruencial Multiplicativo</h2>
              <span class="meta text-center">Publicado
                <!-- <a href="#">Start Bootstrap</a> -->
                09 de Septiembre, 2018</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8"> 
            <table class="table">
              <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="form-group col-xs-2"></div>

                <div class="form-group col-xs-2"> 
                  <p for="email_id" class="control-label text-center">a</p>
                  <input type="text" class="form-control" name="a" placeholder="const. multiplicativa">
                </div>

                <div class="form-group col-xs-2"> 
                  <p for="email_id" class="control-label text-center">m</p>
                  <input type="text" class="form-control" name="m" placeholder="modulo">
                </div>

                <div class="form-group col-xs-2"> 
                  <p for="email_id" class="control-label text-center">Xo</p>
                  <input type="text" class="form-control" name="xo" placeholder="semilla">
                </div>

                <div class="form-group col-xs-2"> 
                  <p for="variable_c" class="control-label text-center">c</p>
                  <input type="text" class="form-control" name="c" placeholder="constante">
                </div>
                
                <div class="form-group col-xs-5"></div>
                <div class="form-group col-xs-4"> 
                  <button type="submit" name="submit" class="btn btn-primary">Calcular</button>
                </div> 

              </form>
              <thead class="thead-dark">
                <tr>
                  <th class="col-md-2">#</th>
                  <th class="col-md-2">Xn</th>
                  <th class="col-md-2">a*Xn</th>
                  <th class="col-md-2">Xn+1</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                   <?php

                   function filtrado($datos){
                      $datos = trim($datos); 
                      $datos = stripslashes($datos); 
                      $datos = htmlspecialchars($datos);
                      return $datos;
                  }
                  if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST")
                  {
                    if(empty($_POST["a"])){
                      echo '<script language="javascript">alert("La const. multiplicativa es requerida");</script>'; 
                      $errores[] = "La const. multiplicativa es requerida";
                    }
                    if(empty($_POST["m"])){
                      echo '<script language="javascript">alert("El modulo es requerido");</script>'; 
                        $errores[] = "El modulo es requerido";
                    }
                    // El email es obligatorio y ha de tener formato adecuado
                    if(empty($_POST["xo"])){
                      echo '<script language="javascript">alert("La Semilla es requerida");</script>'; 
                        $errores[] = "La Semilla es requerida";
                    }
                    if(empty($_POST["c"])){
                      echo '<script language="javascript">alert("Constante es requerida");</script>'; 
                        $errores[] = "Constante es requerida";
                    }
                    function value($x0,$a,$m,$c){
                          return (($a * $x0 + $c) % $m);
                        }
                    if(empty($errores)) {

                          $a = filtrado($_POST["a"]);
                          $m = filtrado($_POST["m"]);
                          $x0 = filtrado($_POST["xo"]);
                          $c = filtrado($_POST["c"]);
                          $i = 1;
                          $aXi = value($x0,$a,$m,$c);
                          $aXn = $x0*$a;
                          //echo $x0 . ' ' .  $aXi .  ' ' . $aXn . ' ' . "\n";
                          echo '<tr>';
                          echo '<td> '.$i.'</td>';
                          echo '<td> '.$x0.'</td>';
                          echo '<td> '.$aXi.'</td>';
                          echo '<td> '.$aXn.'</td>';
                          echo '</tr>';
                          while ($aXi != $x0) {
                            $i = $i+1;
                            $xn = $aXi;
                            $aXn = $aXi*$a;
                            $aXi = value($aXi,$a,$m,$c);
                            // echo $i . ' ' . $xn . ' ' . $aXn . ' ' . $aXi . ' ' . "\n";
                            echo '<tr>';
                            echo '<td> '.$i.'</td>';
                            echo '<td> '.$xn.'</td>';
                            echo '<td> '.$aXn.'</td>';
                            echo '<td> '.$aXi.'</td>';
                            echo '</tr>';
                          } 
                    } 
                  } 
                 ?>
                </tr>
              </tbody>
            </table>


          </div>
        </div>
      </div>
    </article>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <!-- <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li> -->
              <!-- <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li> -->
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
