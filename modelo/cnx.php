<?php
    class con{
        static public function cnx(){
            $link = new PDO("mysql:host=localhost; dbname=comerciantes", "root", "");
            $link ->exec("set name utf8");
            return $link;
        }
    }