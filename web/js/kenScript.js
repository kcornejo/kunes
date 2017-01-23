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
function velTime() {
    $('.datepicker').datepicker({
    });
}
function formAjax() {
    $('.form_ajax').each(function () {
        var url = $(this).attr('action');
        var form = $(this);
        $(this).submit(function (e) {
            $.ajax({
                async: false,
                type: 'POST',
                url: url,
                data: form.serialize(),
                dataType: 'json',
                success: function (data) {
                    if (data.id_valor > 0) {
                        $(data.id).select2("destroy");
                        $(data.id).append('<option selected="true" value="' + data.id_valor + '">' + data.valor + '</option>')
                        $(data.id).select2();
                        $(data.id + "_bootbox").modal().hide();
                        $.ajax({
                            async: false,
                            type: 'GET',
                            url: $(data.id).attr('url'),
                            data: null,
                            success: function (html) {
                                if (!$(data.id).attr('multiple')) {
                                    $(data.id + "_button").hide();
                                } else {
                                    $.ajax({
                                        async: false,
                                        type: 'GET',
                                        url: url,
                                        data: null,
                                        success: function (html) {
                                            $(data.id + "_bootbox").html(html);
                                        }
                                    });
                                }
                            }
                        });
                    }
                }
            });
            e.preventDefault();
        });
    });
}
function kenSave() {
    $('.kenSave').each(function () {
        var fila = $(this);
        var id = fila.attr('id') + "_bootbox";
        var url = fila.attr('url');
        var html_padre = null;
        $.ajax({
            async: false,
            type: 'GET',
            url: url,
            data: null,
            success: function (html) {
                html_padre = html;
                $('.page-container').append('<div id="' + id + '" class="modal fade" tabindex="-1" aria-hidden="true">' + html + '</div>');
            }
        });
        fila.parent().append('<a class="btn btn-success" data-toggle="modal" id="' + fila.attr('id') + '_button" href="#' + id + '"><i class="fa fa-plus"></i></a>');
    });
}
function kenStars() {
    $(".kenStars").each(function () {
        var star = $(this).attr('star');
        $(this).rateYo({
            fullStar: true,
            rating: star
        });
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
function kenNotify(titulo, mensaje, tema) {

    var settings = {
        theme: tema,
        sticky: true,
        horizontalEdge: 'top',
        verticalEdge: 'right',
        heading: titulo
    };
    $.notific8('zindex', 11500);
    $.notific8(mensaje, settings);
}
function kenTareaNotify() {
    var url = $('#mensaje_ajax').attr('url');
    $.get(url, null, function (lista) {
        $.each(lista, function (i, fila) {
            if (fila.tipo == 'error') {
                kenNotify('Error', fila.mensaje, 'ruby');
            } else {
                kenNotify('Exito', fila.mensaje, 'lime');
            }
        });
    }, 'json');

}
$(document).ready(function () {
    kenSelect();
    kenFile();
    kenTags();
    kenCompletaAjax();
    setInterval(kenCompletaAjax, 5000);
    setInterval(kenUpdate, 2000);
    setInterval(kenSoporteBuscar, 300);
    setInterval(kenTareaNotify, 1500);
    kenBuscar();
    kenStars();
    velTime();
    kenSave();
    formAjax();
    Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
    QuickSidebar.init(); // init quick sidebar
    Demo.init(); // init demo features
});