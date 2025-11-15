<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php"); exit();
}
?><!DOCTYPE html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<style>
.sidebar{height:100vh;width:250px;background:#003366;color:white;position:fixed;left:0;top:0;padding-top:20px;}
.sidebar a{display:block;color:white;padding:12px 25px;text-decoration:none;}
.sidebar a:hover{background:#004080;}
.main{margin-left:250px;}
.navbar-custom{background:white;border-bottom:1px solid #ddd;}
</style></head>
<body>
<div class='sidebar'>
<h4 class='text-center'>SISTEMA</h4>
<a href='dashboard.php' target='contenido'><i class='bi bi-speedometer2'></i> Dashboard</a>
<a href='views/Estudiantes/estudiantes.views.php' target='contenido'><i class='bi bi-people'></i> Estudiantes</a>
<a href='views/Evaluaciones/evaluaciones.views.php' target='contenido'><i class='bi bi-journal-bookmark'></i> Evaluaciones</a>
<a href='views/Resultados/resultados.views.php' target='contenido'><i class='bi bi-clipboard2-check'></i> Resultados</a>
<hr><a href='logout.php'><i class='bi bi-box-arrow-right'></i> Cerrar sesión</a>
</div>
<nav class='navbar navbar-custom main'>
<div class='container-fluid'>
<span class='navbar-brand'>Sistema de Evaluaciones Académicas</span>
</div>
</nav>
<div class='main p-4'>
<iframe name='contenido' style='width:100%;height:85vh;border:none;'></iframe>
</div>
</body></html>