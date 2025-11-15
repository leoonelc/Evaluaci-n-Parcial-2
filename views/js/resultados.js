$(document).ready(function () {

    let tabla = $("#tablaResultados").DataTable({
        ajax: {
            url: "../../controllers/resultados.controllers.php?op=listar",
            type: "GET",
            dataSrc: "data"
        },
        columns: [
            { data: "id" },
            { data: "estudiante" },
            { data: "evaluacion" },
            { data: "nota" },
            {
                data: "id",
                render: function (id) {
                    return `
                        <button class="btn btn-warning btn-sm me-1" onclick="editarRes(${id})">Actualizar</button>
                        <button class="btn btn-danger btn-sm" onclick="eliminarRes(${id})">Eliminar</button>`;
                }
            }
        ],
        responsive: true,
        dom: "Bfrtip",
        buttons: ["excel", "pdf", "print"]
    });

    $("#formResultado").on("submit", function (e) {
        e.preventDefault();

        let id = $("#idRes").val();
        let url = id === ""
            ? "../../controllers/resultados.controllers.php?op=insertar"
            : "../../controllers/resultados.controllers.php?op=actualizar";

        $.ajax({
            url: url,
            type: "POST",
            data: $(this).serialize(),
            success: function () {

                Swal.fire({
                    icon: "success",
                    title: "Correcto",
                    text: id === "" ? "Resultado registrado" : "Resultado actualizado"
                });

                $("#modalRes").modal("hide");
                $("#formResultado")[0].reset();
                $("#idRes").val("");

                tabla.ajax.reload();
            }
        });
    });
});

function nuevoRes() {
    $("#idRes").val("");
    $("#id_estudiante").val("");
    $("#id_evaluacion").val("");
    $("#nota").val("");

    $("#tituloModalRes").text("Nuevo Resultado");
    $("#btnGuardarRes").text("Guardar");
}

function editarRes(id) {

    $.ajax({
        url: "../../controllers/resultados.controllers.php?op=mostrar",
        type: "POST",
        data: { id },
        dataType: "json",
        success: function (data) {

            $("#idRes").val(data.id);
            $("#id_estudiante").val(data.id_estudiante);
            $("#id_evaluacion").val(data.id_evaluacion);
            $("#nota").val(data.nota);

            $("#tituloModalRes").text("Actualizar Resultado");
            $("#btnGuardarRes").text("Actualizar");

            $("#modalRes").modal("show");
        }
    });
}

function eliminarRes(id) {

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
                url: "../../controllers/resultados.controllers.php?op=eliminar",
                type: "POST",
                data: { id },
                success: function () {

                    Swal.fire({
                        icon: "success",
                        title: "Eliminado",
                        text: "El resultado ha sido eliminado"
                    });

                    $("#tablaResultados").DataTable().ajax.reload();
                }
            });

        }
    });
}
