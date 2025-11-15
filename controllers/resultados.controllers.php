<?php
require_once("../models/resultados.models.php");
$Res = new Resultados();

switch ($_GET["op"]) {

    case "listar":
        $datos = array();
        $resultado = $Res->todos();
        while ($row = mysqli_fetch_assoc($resultado)) {
            $datos[] = $row;
        }
        echo json_encode(array("data" => $datos));
    break;

    case "mostrar":
        $resultado = $Res->obtener($_POST["id"]);
        $row = mysqli_fetch_assoc($resultado);
        echo json_encode($row);
    break;

    case "insertar":
        echo json_encode(
            $Res->insertar(
                $_POST["id_estudiante"],
                $_POST["id_evaluacion"],
                $_POST["nota"]
            )
        );
    break;

    case "actualizar":
        echo json_encode(
            $Res->actualizar(
                $_POST["id"],
                $_POST["id_estudiante"],
                $_POST["id_evaluacion"],
                $_POST["nota"]
            )
        );
    break;

    case "eliminar":
        echo json_encode($Res->eliminar($_POST["id"]));
    break;
}
?>
