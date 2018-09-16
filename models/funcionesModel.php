<?php

    class NumeroAleatoriosModel {

        static public function validarDatos($dato) {

            $dato = trim($dato); 
            $dato = stripslashes($dato); 
            $dato = htmlspecialchars($dato);

            return $dato;
        }
        
        static public function generadorCongruencialLineal($x0,$a,$m,$c) {
            
            $aXi =  (($a * $x0 + $c) % $m);
            $aXn = $x0*$a;
            $respuesta = array($aXi, $aXn );
                               
            return $respuesta;
        } 

        static public function generadorCongruencialLinealII($x0,$a,$m,$c) {
            
            $aXi =  (($a * $x0 + $c) % $m);
            //$aXn = $x0*$a;
            $respuesta = $aXi;
                               
            return $respuesta;
        }
        
        static public function generadorCongruencialMultiplicativo($x0,$a,$m) {
            
            $aXi =  (($a * $x0) % $m);
            $aXn = $x0*$a;
            $respuesta = array($aXi, $aXn );
                               
            return $respuesta;
        } 

        static public function generadorCongruencialMultiplicativoII($x0,$a,$m) {
            
            $aXi =  (($a * $x0) % $m);
            //$aXn = $x0*$a;
            $respuesta = $aXi;
                               
            return $respuesta;
        }
    }
?>