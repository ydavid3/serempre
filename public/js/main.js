/**
 * Load page
 */
$(window).on('load', function () {
    setTimeout(function () {
        $(".loader-page").css({ visibility: "hidden", opacity: "0" })
    }, 2000);

});

$(document).ready(function () {
    /**
    * URL api
    */
    urlApi = "http://192.168.0.6:8000/";

    /**
     * routes api
     */
    auth = "login";
    clients = "clients";
    department = "departments";
    municipalities = "municipalities";
    users = "users";
    logout = "logout";

    /**
     * token
     */
    token = "Bearer ";
    authTokenStorage = "";

    /**
     * Views
     */
    prefix = 'view';
    view = "";
    optionView = "";
    redirectViews(localStorage.getItem('auth'));

});

/**
 * Redirect views
 */

function redirectViews(optionView) {

    if (localStorage.getItem('auth') !== undefined) {
        switch (optionView) {
            case "clients":
                $(location).attr("href", urlApi + prefix + "/" + optionView);
                break;

            default:
                break;
        }
    }

    /**
     * Logout
     */
    logoutSession();
}

/**
 * Redirect 401
 */
function redirect401() {
    $(location).attr("href", urlApi);
}

/**
 * Logout
 */
function logoutSession() {

    $("#btnLogout").on("click", function () {
        $.ajax({
            type: "GET",
            url: urlApi + logout,
            headers: {
                Accept: "application/json; charset=utf-8",
                "Authorization": localStorage.getItem('auth')
            },
            statusCode: {
                200: function () {
                    swal({
                        title: "Cerrando sesion",
                        icon: "success",
                        timer: 3000
                    });
                    localStorage.setItem('auth', '');
                    $(location).attr("href", urlApi);
                }
            }
        });
    });

}