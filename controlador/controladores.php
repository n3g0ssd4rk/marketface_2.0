<?php
    class Controladores{
        static public function ctrIndex(){
            include 'vista/plantilla.php';
        }

        static public function ctrListado(){
            $tabla = "categoria";
            $respuesta = Modelos::mdlListado($tabla);
            return $respuesta;
        }

        static public function ctrComerciantes($item, $valor){
            $tabla = "comerciantes";
            $respuesta = Modelos::mdlComerciantes($tabla, $item, $valor);
            return $respuesta;
        }
    }
?>