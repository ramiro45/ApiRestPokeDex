<?php

    class Pokemon extends Conectar {

        public function get_pokemon()
        {
            $conectar= parent ::conexion();
            $sql = "SELECT * FROM tm_pokemon LIMIT 151";
            $sql= $conectar->prepare($sql);
            $sql -> execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }



    }

?>