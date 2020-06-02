<?php
    include 'cnx.php';
    class Modelos{
        static public function mdlListado($tabla){
            $query = con::cnx()->prepare("SELECT * FROM $tabla");
            $query ->execute();
            return $query ->fetchAll();
        }

        static public function mdlComerciantes($tabla, $item, $valor){
            if ($item == null and $valor == null) {
                $query = con::cnx()->prepare("SELECT * FROM $tabla");
                $query ->execute();
                return $query ->fetchAll();
            }else{
                $query = con::cnx()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
                $query -> bindParam(":".$item, $valor, PDO::PARAM_STR);
                $query ->execute();
                return $query ->fetchAll();
            }
            
        }

    }