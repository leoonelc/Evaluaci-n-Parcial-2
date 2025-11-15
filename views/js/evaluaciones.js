$(document).ready(function () {

    let tabla = $("#tablaEvaluaciones").DataTable({
        destroy: true, // evita el warning de reinitialise
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
                        <button class="btn btn-warning btn-sm me-1" onclick="editarEva(${id})">
                            Actualizar
                        </button>
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

        let id = $("#idEva").val();
        let url = id === ""
            ? "../../controllers/evaluaciones.controllers.php?op=insertar"
            : "../../controllers/evaluaciones.controllers.php?op=actualizar";

        $.ajax({
            url: url,
            type: "POST",
            data: $(this).serialize(),
            success: function () {

                Swal.fire({
                    icon: "success",
                    title: "Correcto",
                    text: id === "" ? "Evaluación registrada" : "Evaluación actualizada"
                });

                $("#modalEva").modal("hide");
                $("#formEvaluacion")[0].reset();
                $("#idEva").val("");

                tabla.ajax.reload();
            }
        });
    });
});

function nuevaEva() {
    $("#idEva").val("");
    $("#nombreEva").val("");
    $("#descripcionEva").val("");
    $("#fechaEva").val("");

    $("#tituloModalEva").text("Nueva Evaluación");
    $("#btnGuardarEva").text("Guardar");
}

function editarEva(id) {

    $.ajax({
        url: "../../controllers/evaluaciones.controllers.php?op=mostrar",
        type: "POST",
        data: { id },
        dataType: "json",
        success: function (data) {

            $("#idEva").val(data.id);
            $("#nombreEva").val(data.nombre);
            $("#descripcionEva").val(data.descripcion);
            $("#fechaEva").val(data.fecha);

            $("#tituloModalEva").text("Actualizar Evaluación");
            $("#btnGuardarEva").text("Actualizar");

            $("#modalEva").modal("show");
        }
    });
}

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
