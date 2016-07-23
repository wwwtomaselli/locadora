$(document).ready(function(){
    var anos = "";
    var hoje = new Date();
    for(var i = 1940; i <= hoje.getFullYear(); i++){
        anos = anos + '<option value=' + i + '>' + i + '</option>\n';
    }
    $("#ano").append(anos);
    
    $('#form-cadastro').submit(function(evento){
        evento.preventDefault();
        
        validar_formulario(this);
        
        var dados = $(this).serialize();
    
        var tratar_retorno = function(retorno){
            $('#alertas').empty();
            Retorno = JSON.parse(retorno);
            
            if(Retorno.status == 'ok'){
            //observacao: Bootstrap trabalha com 12 colunas
            var alerta = $('<div class="alert alert-success alert-dismissible col-md-8 col-md-offset-2" role="alert">' + 
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + 
        '<strong><i class="glyphicon glyphicon-ok"></i> Sucesso!</strong> Filme adicionado.' + 
        '</div>');
            $('input, select, textarea').val('');
            $('input:first').focus();
            //$('#form-cadastro div.form-group:first').find('input,select,textarea').focus();
            
            } else {
            var alerta = $('<div class="alert alert-danger alert-dismissible col-md-8 col-md-offset-2" role="alert">' +
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
        '<strong><i class="glyphicon glyphicon-remove"></i> Erro!</strong> Filme não adicionado.' + 
        '</div>');
            };
            $('#alertas').append(alerta);
        };
        
        $.post('/model/cadastro.php', dados).done(tratar_retorno);
    });
});

function validar_formulario(form){
    var valido = true; //inicialmente, o formulário é tido como validado
    $(form).find('.form-group').removeClass('has-error');
    //??? refazer !!! $(form).find('span.glyphicon-remove').remove();
    $(form).find('input, select, textarea').each(function(idx, elemento){
        if($(elemento).val() == ''){
            valido = false;
            $(elemento).parent().parent.addClass('has-error');
        };
        if($(elemento).attr('type') == 'text'){
            $(elemento).after('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
        };
    });
};




// http://getbootstrap.com/css/#forms-control-validation
// http://getbootstrap.com/components/#alerts-dismissible