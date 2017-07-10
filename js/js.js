//$.cookie('Prueba');
     
var contraido = $.cookie('Prueba');
if (contraido != 'true') {
    $('#d2_1').css('left', '0%');
    $('#d2_2').css('width', '83%');
    $('#d2_2').css('margin', '0px 0px 0px 17%');
    $('#d1_4').css('left', '17%');
    $('.logo').css('margin', '-9px 20px 0px 0px');
    $('.logo').css('height', '40px');
    $('#d1__').css('width', '17%');
    $('#d2_1 nav a p').css('float', 'left');
    $('#d1_2').show();

}

$(document).ready(function () {
    $("tr:odd").css("background-color", "#FFFFFF"); // filas pares
    $("tr:even").css("background-color", "#FDFDFD"); // filas impares
    $("#d2_1 nav a p:odd").css("border", "3px #f100ff solid"); // filas pares
    $("#d2_1 nav a p:even").css("border", "3px #00c0ef solid"); // filas impares
    $("#d1_4").click(function () {
        if (contraido != 'true') {
            $('#d2_1').animate({left: "-13%"}, 'fast');
            $('#d2_2').animate({margin: "0px 0px 0px 4%", width: "96%"}, 'fast');
            $('#d1_4').animate({left: "4%"}, 'fast');
            $('.logo').animate({height: "34", margin: "-6px 0px 0px -7px"}, 'fast');
            $('#d1__').animate({width: "4%"}, 'fast');
            $('#d2_1 nav a p').css('float', 'right');
            $('#d1_2').hide();
            $.cookie('Prueba', 'true');
            contraido = $.cookie('Prueba');
        } else {
            $('#d2_1').animate({left: "0px"}, 'fast');
            $('#d2_2').animate({margin: "0px 0px 0px 17%", width: "83%"}, 'fast');
            $('#d1_4').animate({left: "17%"}, 'fast');
            $('.logo').animate({height: "40px", margin: "-9px 20px 0px 0px"}, 'fast');
            $('#d1__').animate({width: "17%"}, 'fast');
            $('#d2_1 nav a p').css('float', 'left');
            $('#d1_2').fadeIn(1500);
            $.cookie('Prueba', 'false');
            contraido = $.cookie('Prueba');
        }
    });
    $('#d2_1 nav a').mouseover(function (e) {
        if (contraido == 'true') {
            $('#' + e.target.id).css('margin', "0px 0px 0px 76%");
        }
    });
    $('#d2_1 nav a').mouseout(function (e) {
        if (contraido == 'true') {
            $('#' + e.target.id).css('margin', "0px 0px 0px 0");
        }
    });
    
});

