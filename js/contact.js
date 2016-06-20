$(document).ready(function () {
    $("#formContacto").validate({
        rules: {
            txtNombre: {
                required: true,
            },
            txtEmail: {
                required: true,
                email: true
            },
            txtMensaje: {
                required: true
            },
        },
        messages: {
            txtNombre: {
                required: "Introduzca un nombre",
            },
            txtEmail: {
                required: "Introduzca un email",
                email: "Introduzca un email valido"
            },
            txtMensaje: {
                required: "Introduzca un mensaje"
            }
        }
    });
});
