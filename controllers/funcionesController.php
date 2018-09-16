<?php

    class NumeroAleatoriosController {

        public function algoritmoCongruencialLinealMixto() {
            
            if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
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
                if(empty($errores)) {

                    $a = NumeroAleatoriosModel::validarDatos($_POST["a"]);
                    $m = NumeroAleatoriosModel::validarDatos($_POST["m"]);
                    $x0 = NumeroAleatoriosModel::validarDatos($_POST["xo"]);
                    $c = NumeroAleatoriosModel::validarDatos($_POST["c"]);
                    $A = $a; 
                    $M = $m; 
                    $X = $x0; 
                    $C = $c;    
                    $respuesta = NumeroAleatoriosModel::generadorCongruencialLineal($x0,$a,$m,$c);
                    $i = 1;

                    $aXi = $respuesta[0];
                    $aXn = $respuesta[1];
                    echo '<tr>';
                    echo '<td class="text-center"> '.$i.'</td>';
                    echo '<td class="text-center"> '.$x0.'</td>';
                    echo '<td class="text-center"> '.$aXi.'</td>';
                    echo '<td class="text-center"> '.$aXn.'</td>';
                    echo '</tr>';
                    while ($aXi != $x0) {
                        $i = $i+1;
                        $xn = $aXi;
                        $aXn = $aXi*$a;
                        $aXi = NumeroAleatoriosModel::generadorCongruencialLinealII($aXi,$a,$m,$c);
                        // echo $i . ' ' . $xn . ' ' . $aXn . ' ' . $aXi . ' ' . "\n";
                        echo '<tr>';
                        echo '<td class="text-center"> '.$i.'</td>';
                        echo '<td class="text-center"> '.$xn.'</td>';
                        echo '<td class="text-center"> '.$aXn.'</td>';
                        echo '<td class="text-center"> '.$aXi.'</td>';
                        echo '</tr>';
                    }
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';
                    echo '<ul class="list-group list-group-flush">';
                    echo '<li class="list-group-item list-group-item-success">El ciclo del generadores es ' .$i. '</li>';
                    echo '<li class="list-group-item list-group-item-info">Con la semilla ' .$X. '</li>';
                    echo '<li class="list-group-item list-group-item-info">El Multiplicador ' .$A. '</li>';
                    echo '<li class="list-group-item list-group-item-info">La constante aditiva ' .$C. '</li>';
                    echo '<li class="list-group-item list-group-item-info">El modulo ' .$M. '</li>';
                    echo '</ul>';                                          
                }
            }
        }
        public function algoritmoCongruencialMultiplicativo() {
            
            if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
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
                if(empty($errores)) {

                    $a = NumeroAleatoriosModel::validarDatos($_POST["a"]);
                    $m = NumeroAleatoriosModel::validarDatos($_POST["m"]);
                    $x0 = NumeroAleatoriosModel::validarDatos($_POST["xo"]);
                    $A = $a; 
                    $M = $m; 
                    $X = $x0;    
                    $respuesta = NumeroAleatoriosModel::generadorCongruencialMultiplicativo($x0,$a,$m);
                    $i = 1;

                    $aXi = $respuesta[0];
                    $aXn = $respuesta[1];
                    echo '<tr>';
                    echo '<td class="text-center"> '.$i.'</td>';
                    echo '<td class="text-center"> '.$x0.'</td>';
                    echo '<td class="text-center"> '.$aXi.'</td>';
                    echo '<td class="text-center"> '.$aXn.'</td>';
                    echo '</tr>';
                    while ($aXi != $x0) {
                        $i = $i+1;
                        $xn = $aXi;
                        $aXn = $aXi*$a;
                        $aXi = NumeroAleatoriosModel::generadorCongruencialMultiplicativoII($aXi,$a,$m);
                        // echo $i . ' ' . $xn . ' ' . $aXn . ' ' . $aXi . ' ' . "\n";
                        echo '<tr>';
                        echo '<td class="text-center"> '.$i.'</td>';
                        echo '<td class="text-center"> '.$xn.'</td>';
                        echo '<td class="text-center"> '.$aXn.'</td>';
                        echo '<td class="text-center"> '.$aXi.'</td>';
                        echo '</tr>';
                    }
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';
                    echo '<ul class="list-group list-group-flush">';
                    echo '<li class="list-group-item list-group-item-success">El ciclo del generadores es ' .$i. '</li>';
                    echo '<li class="list-group-item list-group-item-info">Con la semilla ' .$X. '</li>';
                    echo '<li class="list-group-item list-group-item-info">El Multiplicador ' .$A. '</li>';
                    echo '<li class="list-group-item list-group-item-info">El modulo ' .$M. '</li>';
                    echo '</ul>';                                          
                }
            }
        }

    }
?>
