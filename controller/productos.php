<?php

    require_once("../config/conexion.php");
    require_once("../models/Productos.php");

    $producto = new Producto();
    
    switch($_GET["op"]){

        case "listar":
            $datos = $producto->get_productos();
            $data = Array();
            
            $data = Array();
            foreach($datos as $row){
            $sub_array[] = $row["pro_nom"];
            $sub_array[] = $row["pro_id"];
            $sub_array[] = $row["pro_id"];

            $data[] = $sub_array;
            }
            
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data
            );

            echo json_encode($results);
        break;

    }


?>