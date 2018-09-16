<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<article>
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="site-heading">
              <h1 class="text-center text-capitalize">Algoritmo Congruencial Multiplicativo</h1>
              <span class="subheading"></span>
            </div> 
            <table class="table">
              <form class="form-inline"  method="post">

                <div class="form-group col-xs-3"></div>

                <div class="form-group col-xs-2"> 
                  <p for="email_id" class="control-label text-center">Xo</p>
                  <input type="text" class="form-control" name="xo" placeholder="semilla">
                </div>

                <div class="form-group col-xs-2"> 
                  <p for="email_id" class="control-label text-center">a</p>
                  <input type="text" class="form-control" name="a" placeholder="const. multiplicativa">
                </div>

                <!-- <div class="form-group col-xs-2"> 
                  <p for="variable_c" class="control-label text-center">c</p>
                  <input type="text" class="form-control" name="c" placeholder="constante">
                </div> -->
                
                <div class="form-group col-xs-2"> 
                  <p for="email_id" class="control-label text-center">m</p>
                  <input type="text" class="form-control" name="m" placeholder="modulo">
                </div>

                <div class="form-group col-xs-5"></div>
                <div class="form-group col-xs-4"> 
                  <button type="submit" name="submit" class="btn btn-primary">Calcular</button>
                </div> 
              </form>
              <thead class="thead-dark">
                <tr>
                  <th class="col-md-2 text-center">#</th>
                  <th class="col-md-2 text-center">Xn</th>
                  <th class="col-md-2 text-center">a*Xn</th>
                  <th class="col-md-2 text-center">Xn+1</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php

                $generar = new NumeroAleatoriosController();
                $generar -> algoritmoCongruencialMultiplicativo();

                ?>
          </div>
        </div>
      </div>
    </article>