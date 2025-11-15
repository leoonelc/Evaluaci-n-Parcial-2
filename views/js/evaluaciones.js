$(document).ready(function () {

    let tabla = $("#tablaEvaluaciones").DataTable({
        ajax: {
            url: "../../controllers/evaluaciones.controllers.php?op=listar",
            type: "GET",
            dataSrc: "data"
        },
        columns: [
            { data: "id" },
            { data: "nombre" },
            { data: "descripcion" },
            { data: "fecha" },
            {
                data: "id",
                render: function (id) {
                    return `
                        <button class="btn btn-danger btn-sm" onclick="eliminarEva(${id})">
                            Eliminar
                        </button>`;
                }
            }
        ],
        responsive: true,
        dom: "Bfrtip",
        buttons: ["excel", "pdf", "print"]
    });

    $("#formEvaluacion").on("submit", function (e) {
        e.preventDefault();

        $.ajax({
            url: "../../controllers/evaluaciones.controllers.php?op=insertar",
            type: "POST",
            data: $(this).serialize(),
            success: function () {

                Swal.fire({
                    icon: "success",
                    title: "Guardado",
                    text: "Evaluación registrada correctamente"
                });

                $("#modalEva").modal("hide");
                $("#formEvaluacion")[0].reset();
                tabla.ajax.reload();
            }
        });
    });
});

function eliminarEva(id) {

    Swal.fire({
        title: "¿Eliminar?",
        text: "Esta acción no se puede deshacer",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar"
    }).then((result) => {

        if (result.isConfirmed) {

            $.ajax({
                url: "../../controllers/evaluaciones.controllers.php?op=eliminar",
                type: "POST",
                data: { id },
                success: function () {

                    Swal.fire({
                        icon: "success",
                        title: "Eliminado",
                        text: "La evaluación ha sido eliminada"
                    });

                    $("#tablaEvaluaciones").DataTable().ajax.reload();
                }
            });

        }
    });
}
