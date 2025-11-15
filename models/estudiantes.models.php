<?php
require_once("../config/conexion.php");

class Estudiantes {

    public function todos() {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "SELECT * FROM estudiantes ORDER BY id DESC";
        return mysqli_query($con, $sql);
    }

    public function insertar($nombres, $apellidos, $correo, $identificacion) {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "INSERT INTO estudiantes (nombres, apellidos, correo, identificacion)
                VALUES ('$nombres', '$apellidos', '$correo', '$identificacion')";
        return mysqli_query($con, $sql);
    }

    public function obtener($id) {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "SELECT * FROM estudiantes WHERE id = $id";
        return mysqli_query($con, $sql);
    }

    public function actualizar($id, $nombres, $apellidos, $correo, $identificacion) {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "UPDATE estudiantes 
                SET nombres='$nombres',
                    apellidos='$apellidos',
                    correo='$correo',
                    identificacion='$identificacion'
                WHERE id = $id";
        return mysqli_query($con, $sql);
    }

    public function eliminar($id) {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "DELETE FROM estudiantes WHERE id = $id";
        return mysqli_query($con, $sql);
    }
}
?>
