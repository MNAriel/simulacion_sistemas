<?php
    require_once "models/model.php";
    class Controller {

        public function plantilla() {
            
            include "views/template.php";

        }
        public function paginasController() {

            if(isset($_GET["action"])){

                $enlaces = $_GET["action"];
        
                }
        
                else{
        
                $enlaces = "index";
                    
                }
        
                $respuesta = Enlaces::enlacesModel($enlaces);
        
                include $respuesta;
                
        }
    }

?>