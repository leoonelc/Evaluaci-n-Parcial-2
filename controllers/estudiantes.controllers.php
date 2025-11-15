<?php
require_once("../models/estudiantes.models.php");
$Est = new Estudiantes();

switch ($_GET["op"]) {

    case "listar":
        $datos = array();
        $resultado = $Est->todos();
        while ($row = mysqli_fetch_assoc($resultado)) {
            $datos[] = $row;
        }
        echo json_encode(array("data" => $datos));
    break;

    case "mostrar":
        $id = $_POST["id"];
        $resultado = $Est->obtener($id);
        $row = mysqli_fetch_assoc($resultado);
        echo json_encode($row);
    break;

    case "insertar":
        echo json_encode(
            $Est->insertar(
                $_POST["nombres"],
                $_POST["apellidos"],
                $_POST["correo"],
                $_POST["identificacion"]
            )
        );
    break;

    case "actualizar":
        echo json_encode(
            $Est->actualizar(
                $_POST["id"],
                $_POST["nombres"],
                $_POST["apellidos"],
                $_POST["correo"],
                $_POST["identificacion"]
            )
        );
    break;

    case "eliminar":
        echo json_encode($Est->eliminar($_POST["id"]));
    break;
}
?>
