<?php

    class Conectar{
        protected $dbh;
        
        protected function conexion()
        {
            try {
                $conectar = $this->dbh= new PDO("mysql:local=localhost;dbname=bdpokemon","root","");
                return $conectar;
            } catch (Exception $e) {
                print "¡Erro BD!: ".$e->getMessage()."<br/>";
                die();
            }
        }

        protected function set_names()
        {
            return $this->dbh->query("SET NAMES 'utf8'");
        }

    }


?>