$(document).ready(function () {

    let tabla = $("#tablaEstudiantes").DataTable({
        destroy: true, // 👈 CLAVE: permite reinicializar sin error
        ajax: {
            url: "../../controllers/estudiantes.controllers.php?op=listar",
            type: "GET",
            dataSrc: "data"
        },
        columns: [
            { data: "id" },
            { data: "nombres" },
            { data: "apellidos" },
            { data: "correo" },
            { data: "identificacion" },
            {
                data: "id",
                render: function (id) {
                    return `
                        <button class="btn btn-warning btn-sm me-1" onclick="editarEst(${id})">
                            Actualizar
                        </button>
                        <button class="btn btn-danger btn-sm" onclick="eliminarEst(${id})">
                            Eliminar
                        </button>`;
                }
            }
        ],
        responsive: true,
        dom: "Bfrtip",
        buttons: ["excel", "pdf", "print"]
    });

    $("#formEstudiante").on("submit", function (e) {
        e.preventDefault();

        let id = $("#idEst").val();
        let url = (id === "")
            ? "../../controllers/estudiantes.controllers.php?op=insertar"
            : "../../controllers/estudiantes.controllers.php?op=actualizar";

        $.ajax({
            url: url,
            type: "POST",
            data: $(this).serialize(),
            success: function () {

                Swal.fire({
                    icon: "success",
                    title: "Correcto",
                    text: id === "" ? "Estudiante registrado" : "Estudiante actualizado"
                });

                $("#modalEst").modal("hide");
                $("#formEstudiante")[0].reset();
                $("#idEst").val("");

                tabla.ajax.reload();
            }
        });
    });
});

function nuevoEst() {
    $("#idEst").val("");
    $("#nombres").val("");
    $("#apellidos").val("");
    $("#correo").val("");
    $("#identificacion").val("");

    $("#tituloModalEst").text("Nuevo Estudiante");
    $("#btnGuardarEst").text("Guardar");
}

function editarEst(id) {

    $.ajax({
        url: "../../controllers/estudiantes.controllers.php?op=mostrar",
        type: "POST",
        data: { id },
        dataType: "json",
        success: function (data) {

            $("#idEst").val(data.id);
            $("#nombres").val(data.nombres);
            $("#apellidos").val(data.apellidos);
            $("#correo").val(data.correo);
            $("#identificacion").val(data.identificacion);

            $("#tituloModalEst").text("Actualizar Estudiante");
            $("#btnGuardarEst").text("Actualizar");

            $("#modalEst").modal("show");
        }
    });
}

function eliminarEst(id) {
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
                url: "../../controllers/estudiantes.controllers.php?op=eliminar",
                type: "POST",
                data: { id },
                success: function () {

                    Swal.fire({
                        icon: "success",
                        title: "Eliminado",
                        text: "El registro ha sido eliminado"
                    });

                    $("#tablaEstudiantes").DataTable().ajax.reload();
                }
            });

        }
    });
}
