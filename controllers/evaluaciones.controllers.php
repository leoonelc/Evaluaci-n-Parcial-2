<?php
require_once("../models/evaluaciones.models.php");
$Eva = new Evaluaciones();

switch ($_GET["op"]) {

    case "listar":
        $datos = array();
        $resultado = $Eva->todos();

        while ($row = mysqli_fetch_assoc($resultado)) {
            $datos[] = $row;
        }

        echo json_encode(array("data" => $datos));
    break;

    case "insertar":
        echo json_encode(
            $Eva->insertar(
                $_POST["nombre"],
                $_POST["descripcion"],
                $_POST["fecha"]
            )
        );
    break;

    case "eliminar":
        echo json_encode($Eva->eliminar($_POST["id"]));
    break;
}
?>

