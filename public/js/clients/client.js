$(document).ready(function () {

    consultAllClients();
    departments();
    municipality();

    createClient();
});

function consultAllClients() {

    $.ajax({
        type: "GET",
        url: urlApi + clients,
        headers: {
            Accept: "application/json; charset=utf-8",
            "Authorization": localStorage.getItem('auth')
        },
        success: function (message) {
            $("#clientsTable").DataTable({
                data: message,
                columns: [
                    { data: 'cod' },
                    { data: 'name' },
                    { data: 'municipality_and_department' },
                    {
                        data: null,
                        render: function (data, type, row) {
                            return '<button class="btn btn-outline-info" onclick="updateClient(' + row.id + ')" data-toggle="modal" data-target="#updateClientModal">Editar</button>';
                        }
                    },
                    {
                        data: null,
                        render: function (data, type, row) {
                            return '<button class="btn btn-outline-primary" onclick="createUserByClient(' + row.id + ')" data-toggle="modal" data-target="#generateUserModal">Generar Usuario</button>';
                        }
                    },
                    {
                        data: null,
                        render: function (data, type, row) {
                            return '<button class="btn btn-outline-danger" onclick="deleteClient(' + row.id + ')">Eliminar</button>';
                        }
                    }
                ]
            });

        },
        statusCode: {
            401: function () {
                redirect401();
            }
        }
    });
}

/**
 * Consult departments and monicipalities
 */
function departments() {
    $.ajax({
        type: "GET",
        url: urlApi + department,
        headers: {
            Accept: "application/json; charset=utf-8",
            "Authorization": localStorage.getItem('auth')
        },
        success: function (message) {
            $.each(message, function (i, item) {
                $('#selectDepartment').append('<option value="' + item.id + '"> ' + item.name.toLowerCase() + '</option>');
            });
        }
    });
}

/**
 * Consult municipality by department
 */
function municipality() {

    $('#selectDepartment').on('change', function () {

        $('#selectMunicipality')
            .find('option')
            .remove();

        $.ajax({
            type: "GET",
            url: urlApi + municipalities + '/' + this.value,
            headers: {
                Accept: "application/json; charset=utf-8",
                "Authorization": localStorage.getItem('auth')
            },
            success: function (message) {
                $.each(message, function (i, item) {
                    $('#selectMunicipality').append('<option value="' + item.id + '"> ' + item.name + '</option>');
                });
            }
        });
    });
}

/**
 * create client
 */

function createClient() {

    $("#btnClientSave").on('click', function () {

        var info = {
            "cod": $("#inputCod").val(),
            "name": $("#inputName").val(),
            "municipality": $("#selectMunicipality").val()
        };

        $.ajax({
            type: "POST",
            url: urlApi + clients,
            data: info,
            headers: {
                Accept: "application/json; charset=utf-8",
                "Authorization": localStorage.getItem('auth')
            },
            statusCode: {
                422: function () {
                    swal({
                        title: "Error",
                        text: "Por favor intentelo de nuevo, verifique todos los campos",
                        icon: "error",
                    });
                },

                200: function () {
                    swal({
                        title: "Guardado",
                        text: "Registro exitoso",
                        icon: "success",
                        timer: 3000
                    });

                    optionView = "clients";
                    redirectViews(optionView);
                }
            }
        });

    });

}

/**
 * Update Client
 */
function updateClient(id) {

    $.ajax({
        type: "GET",
        url: urlApi + clients + '/' + id,
        headers: {
            Accept: "application/json; charset=utf-8",
            "Authorization": localStorage.getItem('auth')
        },
        success: function (message) {
            $("#inputCod").val(message.cod);
            $("#inputName").val(message.name);
            $("#selectDepartment").val(message.department);

            $("#selectDepartment").on('change', function () {
                $("#selectMunicipality").removeClass('invisible');
            });
        }
    });

    /**
     * Save changes
     */

    $("#btnClientUpdate").on('click', function () {

        var info = {
            "cod": $("#inputCod").val(),
            "name": $("#inputName").val(),
            "municipality": $("#selectMunicipality").val()
        };

        $.ajax({
            type: "PUT",
            url: urlApi + clients + '/' + id,
            data: info,
            headers: {
                Accept: "application/json; charset=utf-8",
                "Authorization": localStorage.getItem('auth')
            },
            statusCode: {
                422: function () {
                    swal({
                        title: "Error",
                        text: "Por favor intentelo de nuevo, verifique todos los campos",
                        icon: "error",
                    });
                },

                200: function () {
                    swal({
                        title: "Guardado",
                        text: "Actualización exitosa",
                        icon: "success",
                        timer: 3000
                    });

                    optionView = "clients";
                    redirectViews(optionView);
                }
            }
        });

    });

}

/**
 * Delete client
 */

function deleteClient(id) {

    $.ajax({
        type: "DELETE",
        url: urlApi + clients + '/' + id,
        headers: {
            Accept: "application/json; charset=utf-8",
            "Authorization": localStorage.getItem('auth')
        },
        statusCode: {
            200: function () {
                swal({
                    title: "Eliminado",
                    icon: "success",
                    timer: 3000
                });

                optionView = "clients";
                redirectViews(optionView);
            }
        }
    });
}

/**
 * create user by client
 */

function createUserByClient(id) {

    $("#btnGenerateUser").on('click', function () {

        var info = {
            "name": $("#username").val(),
            "password": $("#password").val(),
            "client": id
        };

        $.ajax({
            type: "POST",
            url: urlApi + users,
            data: info,
            headers: {
                Accept: "application/json; charset=utf-8",
                "Authorization": localStorage.getItem('auth')
            },
            statusCode: {
                422: function () {
                    swal({
                        title: "Error",
                        text: "Por favor intentelo de nuevo, verifique todos los campos",
                        icon: "error",
                    });
                },

                200: function () {
                    swal({
                        title: "Guardado",
                        text: "Registro exitoso",
                        icon: "success",
                        timer: 3000
                    });

                    optionView = "clients";
                    redirectViews(optionView);
                }
            }
        });

    });

}
