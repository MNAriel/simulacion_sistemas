<!DOCTYPE html>
<html lang="en">

    <?php
        include "/modules/head.php";
    ?>

  <body>
    <?php
        include "/modules/nav.php";
        include "/modules/header.php";
        //include "/modules/inicio.php";
        
    ?>
    <!-- Navigation -->


    <!-- Page Header -->


    <!-- Main Content -->
    <?php

        require_once "controllers/controller.php";
            
        $template = new Controller();
        $template -> paginasController();
    ?>


    <hr>

    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    

  </body>

</html>
