function kenSelect() {
    $('.select2').each(function () {
        $(this).select2();
    });
}
function kenFile() {
    $('.kenArchivo').each(function () {
        $(this).dropify();
    });
}
function kenTags() {
    $(".kenTags").each(function () {
        $(this).tagit();
    });
}
function kenSoporteBuscar() {
    if ($('.search-form').hasClass('open')) {
        $('#buscador_lista').show();
    } else {
        $('#buscador_lista').hide();
    }
}
function kenBuscar() {
    $('#buscador_general').on('input', function () {
        var url = $('#buscador_lista').attr('url');
        $.get(url, {'busqueda': $(this).val()}, function (html) {
            $('#buscador_lista').html(html);
        });
    });
}
function kenCompletaAjax() {
    $('.ken_interval').each(function () {
        var menu = $(this);
        $.get($(this).attr('url'), null, function (html) {
            menu.html(html);
        }, 'html');
    });
    $.get($('#contador_notificacion_archivo').attr('url'), null, function (html) {
        $('#contador_notificacion_archivo').html(html);
        if (html.toString() == 0) {
            $('#alerta_notificacion_archivo').html('SIN NOTIFICACIONES');
        } else {
            $('#alerta_notificacion_archivo').html("Tienes " + html + " Notificaciones");
        }
        if (parseInt(html.toString()) == 0) {
            $("#contador_notificacion_archivo").attr('class', 'badge badge-info');
        } else {
            $("#contador_notificacion_archivo").attr('class', 'badge badge-warning');
        }
    });
}
function kenUpdate() {
    $('.kenupdate').each(function () {
        var objeto = $(this);
        var url = objeto.attr('url');
        $.get(url, null, function (html) {
            objeto.html(html);
        }, 'html');
    });
}
$(document).ready(function () {
    kenSelect();
    kenFile();
    kenTags();
    kenCompletaAjax();
    setInterval(kenCompletaAjax, 5000);
    setInterval(kenUpdate, 1000);
    setInterval(kenSoporteBuscar, 300);
    kenBuscar();
});