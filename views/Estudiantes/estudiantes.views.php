<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Estudiantes</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="p-3">

<h3 class="mb-3">Gestión de Estudiantes</h3>

<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalEst" onclick="nuevoEst()">
  Nuevo Estudiante
</button>

<table id="tablaEstudiantes" class="table table-striped table-bordered" style="width:100%">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Identificación</th>
            <th>Acción</th>
        </tr>
    </thead>
</table>

<div class="modal fade" id="modalEst" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
        
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="tituloModalEst">Nuevo Estudiante</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form id="formEstudiante">
      <div class="modal-body">

        <input type="hidden" name="id" id="idEst">

        <input type="text" class="form-control mb-2" name="nombres" id="nombres" placeholder="Nombres" required>
        <input type="text" class="form-control mb-2" name="apellidos" id="apellidos" placeholder="Apellidos" required>
        <input type="email" class="form-control mb-2" name="correo" id="correo" placeholder="Correo">
        <input type="text" class="form-control mb-2" name="identificacion" id="identificacion" placeholder="Identificación">

      </div>

      <div class="modal-footer">
        <button type="submit" id="btnGuardarEst" class="btn btn-success">Guardar</button>
      </div>
      </form>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="../../views/js/estudiantes.js"></script>

</body>
</html>
