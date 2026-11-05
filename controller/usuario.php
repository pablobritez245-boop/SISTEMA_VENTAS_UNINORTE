<?php

require_once("../config/conexion.php");
require_once("../model/Usuario.php");

$usuario = new Usuario();

switch ($_GET["op"]) {

    case "listar":
        $datos = $usuario->get_usuario();

        $data = array();

        foreach ($datos as $row) {
            $sub_array = array();

            $sub_array[] = $row["us_nom"];
            $sub_array[] = $row["us_ape"];
            $sub_array[] = '<button type="button" onClick="editar(' . $row["us_id"] . ');" id="' . $row["us_id"] . '" class="btn btn-outline-primary btn-icon"><div class="fa fa-edit"></div></button>';
            $sub_array[] = '<button type="button" onClick="eliminar(' . $row["us_id"] . ');" id="' . $row["us_id"] . '" class="btn btn-outline-danger btn-icon"><div class="fa fa-trash"></div></button>';

            $data[] = $sub_array;
        }

        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );

        echo json_encode($results);

        break;

    case "guardaryeditar":
        $datos = $usuario->get_usuario_x_id($_POST["us_id"]);
        if (empty($_POST["us_id"])) {
            if (is_array($datos) == true and count($datos) == 0) {
                $usuario->insert_usuario($_POST["us_nom"]);
            }
        } else {
            $usuario->update_usuario($_POST["us_id"], $_POST["us_nom"]);
        }
        break;

    case "mostrar":
        $datos = $usuario->get_usuario_x_id($_POST["us_id"]);
        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["us_id"] = $row["us_id"];
                $output["us_nom"] = $row["us_nom"];
            }
        }
        break;

    case "eliminar":
        $usuario->delete_usuario($_POST["us_id"]);
        break;
}