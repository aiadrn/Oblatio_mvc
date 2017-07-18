$(document).ready(function () {
    $('.btnSesionU').click(function () {
        $('.modal-body').html($('#loginU').html());
        $('#myModal').modal();
    });
    $('.btnSesionE').click(function () {
        $('.modal-body').html($('#loginE').html());
        $('#myModal2').modal();
    });
    $('#d1_3_').click(function () {
        $('.modal-body').html($('#loginA').html());
        $('#myModal3').modal();
    });

    $('#d1_3_2').click(function () {
        $(".contenedorCuentas").toggle(function () {
            
        });
    });

}); 