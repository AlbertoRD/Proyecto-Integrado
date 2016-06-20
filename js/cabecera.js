$(document).ready(function () {
    //Control del dialog
    var dlgtrigger = $("[data-dialog]");
    var somedialog = $("#" + dlgtrigger.attr("data-dialog"))[0];
    var dlg = new DialogFx(somedialog);
    dlgtrigger.on("click", function () {
        dlg.toggle("bind", dlg);
    });
});
//Abre y cierra el menú para pantallas pequeñas
$("span.menu").click(function () {
    $(".top-menu").slideToggle("slow");
});
//Comprueba si existe el usuario
$("#login-form").on("submit", function () {
    var username = $("#txt_uname_email").val();
    var email = $("#txt_uname_email").val();
    var password = $("#txt_password").val();
    if ($.trim(username).length > 0 && $.trim(password).length > 0) {
        $.ajax({
            type: "POST",
            url: "./php/checkUser.php",
            data: "username=" + username + "&email=" + email + "&password=" + password,
            success: function (data) {
                if (data === "KO") {
                    var error = "Datos incorrectos";
                    $("input#txt_uname_email.form-control").addClass("inputFormError");
                    $("input#txt_password.form-control").addClass("inputFormError");
                    $("#formError").html(error);
                } else if (data === "OK") {
                    location.reload();
                }
            },
        });
    }
    //cancelo el evento submit por defecto
    return false;
});
//eliminio estilos al login al salir o cerrar el dialog
$(".dialog__overlay, #login-form button.btn-danger").on("click", function () {
    $("input#txt_uname_email.form-control").removeClass("inputFormError");
    $("input#txt_password.form-control").removeClass("inputFormError");
    $("#formError").html("");
});