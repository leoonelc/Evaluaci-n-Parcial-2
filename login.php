<?php
session_start();
if($_POST){
    $u=$_POST['usuario']; 
    $c=$_POST['clave'];
    if($u=='admin' && $c=='1234'){
        $_SESSION['usuario']='admin';
        header('Location: index.php');
        exit();
    } else { $error='Credenciales incorrectas'; }
}
?><!DOCTYPE html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
body{background:#003366;height:100vh;display:flex;justify-content:center;align-items:center;}
.card-login{width:380px;border-radius:12px;}
</style></head><body>
<div class='card shadow card-login p-4'>
<h4 class='text-center mb-3 text-primary'>Sistema de Evaluaciones</h4>
<form method='POST'>
<input class='form-control mb-2' name='usuario' placeholder='Usuario' required>
<input class='form-control mb-2' name='clave' type='password' placeholder='Clave' required>
<button class='btn btn-primary w-100'>Ingresar</button>
</form>
</div>
<?php if(isset($error)): ?>
<script>Swal.fire('Error','<?= $error ?>','error')</script>
<?php endif; ?>
</body></html>