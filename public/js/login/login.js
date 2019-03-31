$(document).ready(function () {

    login();

    /**
     * Stop submit of form
     */
    $("#loginForm").submit(function (e) {
        e.preventDefault();
    });
});

/**
 * Function for login
 */
function login() {
    $("#btnLogin").on('click', function () {

        var info = {
            "username": $("#username").val(),
            "password": $("#password").val()
        };

        $.ajax({
            headers: {
                Accept: "application/json; charset=utf-8"
            },
            type: "POST",
            url: urlApi + auth,
            data: info,
            success: function (message) {
                if (typeof message.token !== undefined) {
                    authTokenStorage = token + " " + message.token
                }
            },
            statusCode: {
                401: function () {
                    swal({
                        title: "Credenciales incorrectas",
                        text: "Usuario o contraseña incorrecta",
                        icon: "error",
                    });
                },

                200: function () {
                    swal({
                        title: "Bienvenido",
                        text: "Un momento por favor",
                        icon: "success",
                        timer: 3000
                    });

                    /**
                     * Save session
                     */
                    localStorage.setItem('auth', authTokenStorage);
                    optionView = "clients";
                    redirectViews(optionView);
                }
            }
        });
    });
}