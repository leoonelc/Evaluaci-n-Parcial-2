<?php
require_once("config/conexion.php");
$c=new ClaseConectar();
$db=$c->ProcedimientoConectar();
$est=@mysqli_fetch_row(mysqli_query($db,"SELECT COUNT(*) FROM estudiantes"))[0] ?? 0;
$eva=@mysqli_fetch_row(mysqli_query($db,"SELECT COUNT(*) FROM evaluaciones"))[0] ?? 0;
$res=@mysqli_fetch_row(mysqli_query($db,"SELECT COUNT(*) FROM resultados"))[0] ?? 0;
?><!DOCTYPE html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body class='p-4'>
<h3>Dashboard</h3><p class='text-muted'>Resumen general del sistema</p>
<div class='row'>
<div class='col-md-4'><div class='card p-3 shadow'><h5 class='text-primary'>Estudiantes</h5><h2><?= $est ?></h2></div></div>
<div class='col-md-4'><div class='card p-3 shadow'><h5 class='text-success'>Evaluaciones</h5><h2><?= $eva ?></h2></div></div>
<div class='col-md-4'><div class='card p-3 shadow'><h5 class='text-danger'>Resultados</h5><h2><?= $res ?></h2></div></div>
</div></body></html>