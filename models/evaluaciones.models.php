<?php
require_once("../config/conexion.php");

class Evaluaciones {

    public function todos() {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "SELECT * FROM evaluaciones ORDER BY id DESC";
        return mysqli_query($con, $sql);
    }

    public function insertar($nombre, $descripcion, $fecha) {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "INSERT INTO evaluaciones (nombre, descripcion, fecha)
                VALUES ('$nombre', '$descripcion', '$fecha')";
        return mysqli_query($con, $sql);
    }

    public function obtener($id) {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "SELECT * FROM evaluaciones WHERE id = $id";
        return mysqli_query($con, $sql);
    }

    public function actualizar($id, $nombre, $descripcion, $fecha) {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "UPDATE evaluaciones
                SET nombre='$nombre',
                    descripcion='$descripcion',
                    fecha='$fecha'
                WHERE id = $id";
        return mysqli_query($con, $sql);
    }

    public function eliminar($id) {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "DELETE FROM evaluaciones WHERE id = $id";
        return mysqli_query($con, $sql);
    }
}
?>
