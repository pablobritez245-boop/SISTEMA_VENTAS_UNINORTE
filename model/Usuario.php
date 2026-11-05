<?php

// La clase Producto hereda las funciones de la clase Conectar
class Usuario extends Conectar
{
    // Obtiene todos los usuarios de la base de datos
    public function get_usuario()
    {
        // Establece la conexión con la base de datos
        $conectar = parent::conexion();

        // Configura la codificación de caracteres
        parent::set_names();

        // Consulta SQL para obtener todos los usuarios
        $sql = "SELECT * FROM tm_usuario WHERE est = 1";

        // Prepara la consulta SQL
        $sql = $conectar->prepare($sql);

        // Ejecuta la consulta
        $sql->execute();

        // Obtiene y retorna todos los registros encontrados
        $resultado = $sql->fetchAll();

        return $resultado;
    }

    // Obtiene un producto específico mediante su ID
    public function get_usuario_x_id($us_id)
    {
        // Establece la conexión con la base de datos
        $conectar = parent::conexion();

        // Configura la codificación de caracteres
        parent::set_names();

        // Consulta SQL utilizando un parámetro
        $sql = "SELECT * FROM tm_usuario WHERE us_id = ?";

        // Prepara la consulta
        $sql = $conectar->prepare($sql);

        // Asigna el ID recibido al parámetro de la consulta
        $sql->bindValue(1, $us_id);

        // Ejecuta la consulta
        $sql->execute();

        // Obtiene y retorna el resultado
        $resultado = $sql->fetchAll();

        return $resultado;
    }

    // Elimina un producto según su ID
    public function delete_usuario($us_id)
    {
        // Establece la conexión con la base de datos
        $conectar = parent::conexion();

        // Configura la codificación de caracteres
        parent::set_names();

        // Consulta SQL para eliminar el producto
        $sql = "UPDATE tm_usuario
                SET
                    est = 0,
                    fech_elim = now()
                WHERE
                    us_id = ?";
    
        // Prepara la consulta
        $sql = $conectar->prepare($sql);

        // Asigna el ID del usuario al parámetro
        $sql->bindValue(1, $us_id);

        // Ejecuta la consulta
        $sql->execute();

        // Obtiene el resultado de la operación
        $resultado = $sql->fetchAll();

        return $resultado;
    }


    // Inserta un nuevo producto
    public function insert_usuario($us_nom)
    {
        // Establece la conexión con la base de datos
        $conectar = parent::conexion();

        // Configura la codificación de caracteres
        parent::set_names();

        // Consulta SQL para insertar un producto
        $sql = "INSERT INTO tm_usuario
                (us_id, us_nom, fech_crea, fech_modi, fech_elim, est)
                VALUES (NULL, ?, now(), NULL, NULL, 1)";

        // Prepara la consulta
        $sql = $conectar->prepare($sql);

        // Asigna el nombre del producto al parámetro
        $sql->bindValue(1, $us_nom);

        // Ejecuta la consulta
        $sql->execute();

        // Obtiene el resultado de la operación
        $resultado = $sql->fetchAll();

        return $resultado;
    }

    public function update_usuario($us_id, $us_nom)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE tb_usuario
            SET
                us_nom=?,
                fech_modi=now()
            WHERE
                us_id = ?;";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $us_nom);
        $sql->bindValue(2, $us_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}