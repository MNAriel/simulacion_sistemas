<?php

    class Enlaces {
        static public function enlacesModel($enlaces) {

            if($enlaces == "inicio" ||
               $enlaces == "integrantes" ||
               $enlaces == "practicas") {

                $module = "views/modules/".$enlaces.".php";

		    }

            else if($enlaces == "index" ){

                $module = "views/modules/inicio.php";

            }

            else{

                $module = "views/modules/inicio.php";

            }

            return $module;
        }

    }

?>