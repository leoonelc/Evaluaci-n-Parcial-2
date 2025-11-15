<?php
class ClaseConectar {
    private $host = "localhost";
    private $usu = "root";
    private $clave = "";
    private $base = "SistemaEvaluaciones";
    public function ProcedimientoConectar() {
        $c = mysqli_connect($this->host,$this->usu,$this->clave,$this->base);
        mysqli_set_charset($c,"utf8");
        return $c;
    }
}
?>