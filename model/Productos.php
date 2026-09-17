<?php
//la clase producto hereda las funciones de la clase conectar
    class Producto extends Conectar{
        
        //Obtiene todos los productos activos de la base de datos
        public function get_productos(){
        
            //Establece la conexion con la base de datos
            $conectar = parent::conexion();
            
            //Codificacion de caracteres
            parent::set_names();
            
            //Consulta SQL para obtener todos los productos activos
            $sql = "SELECT * FROM tm_producto WHERE est = 1";

            //Prepara la consulta SQL
            $sql = $conectar->prepare($sql);

            //Ejecuta la consulta SQL
            $sql=execute();

            //Se obtiene y se retorna todos los registros encontrados en la base de datos
            $resultado = $sql->fetchAll();

            return $resultado;
        }
    }
?>