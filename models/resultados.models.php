<?php
require_once("../config/conexion.php");

class Resultados {

    public function todos() {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "SELECT r.id,
                       r.id_estudiante,
                       r.id_evaluacion,
                       e.nombres AS estudiante,
                       ev.nombre AS evaluacion,
                       r.nota
                FROM resultados r
                INNER JOIN estudiantes e ON r.id_estudiante = e.id
                INNER JOIN evaluaciones ev ON r.id_evaluacion = ev.id
                ORDER BY r.id DESC";
        return mysqli_query($con, $sql);
    }

    public function insertar($id_estudiante, $id_evaluacion, $nota) {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "INSERT INTO resultados (id_estudiante, id_evaluacion, nota)
                VALUES ($id_estudiante, $id_evaluacion, $nota)";
        return mysqli_query($con, $sql);
    }

    public function obtener($id) {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "SELECT * FROM resultados WHERE id = $id";
        return mysqli_query($con, $sql);
    }

    public function actualizar($id, $id_estudiante, $id_evaluacion, $nota) {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "UPDATE resultados
                SET id_estudiante=$id_estudiante,
                    id_evaluacion=$id_evaluacion,
                    nota=$nota
                WHERE id = $id";
        return mysqli_query($con, $sql);
    }

    public function eliminar($id) {
        $con = (new ClaseConectar())->ProcedimientoConectar();
        $sql = "DELETE FROM resultados WHERE id = $id";
        return mysqli_query($con, $sql);
    }
}
?>
