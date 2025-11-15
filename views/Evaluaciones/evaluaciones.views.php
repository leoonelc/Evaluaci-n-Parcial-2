<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Evaluaciones</title>

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<!-- DATATABLES CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<!-- DATATABLES JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>

<!-- EXPORTACIONES -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<!-- SWEETALERT -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="p-3">

<h3 class="mb-3">Gestión de Evaluaciones</h3>

<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalEva" onclick="nuevaEva()">
  Nueva Evaluación
</button>

<table id="tablaEvaluaciones" class="table table-striped table-bordered" style="width:100%">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Acción</th>
        </tr>
    </thead>
</table>

<!-- MODAL -->
<div class="modal fade" id="modalEva" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
        
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="tituloModalEva">Nueva Evaluación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form id="formEvaluacion">
      <div class="modal-body">

        <input type="hidden" name="id" id="idEva">

        <input type="text" class="form-control mb-2" name="nombre" id="nombreEva" placeholder="Nombre" required>
        <textarea class="form-control mb-2" name="descripcion" id="descripcionEva" placeholder="Descripción"></textarea>
        <input type="date" class="form-control mb-2" name="fecha" id="fechaEva" required>

      </div>

      <div class="modal-footer">
        <button type="submit" id="btnGuardarEva" class="btn btn-success">Guardar</button>
      </div>
      </form>

    </div>
  </div>
</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS PROPIO -->
<script src="../../views/js/evaluaciones.js"></script>

</body>
</html>
