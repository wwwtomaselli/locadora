$(document).ready(function(){
    //Primeira etapa do cadastro: informar as opções de ano no Select '#ano'    
    var anos = "";
    var hoje = new Date();
    for(var i = 1940; i <= hoje.getFullYear(); i++){
        anos = anos + '<option value=' + i + '>' + i + '</option>\n';
    }
    $("#ano").append(anos);
    
    //Evento 'submit' (enviar dados) ao clicar no botão 
    $('#form-cadastro').submit(function(evento){
        //Desativar o envio direto dos dados, para serem tratados na sequência
        evento.preventDefault();
        
        validar_formulario(this);
        
        //Gerar o vetor a partir do formulário
        var dados = $(this).serialize();
    
        //Tratamento do retorno (chamado pelo método '$.post.done' logo abaixo)
        var tratar_retorno = function(retorno){
            $('#alertas').empty(); //Retirar os avisos no topo da página
            Retorno = JSON.parse(retorno); //Obter o retorno enviado por '/model/cadastro.php'
            
            if(Retorno.status == 'ok'){            
            var alerta = $('<div class="alert alert-success alert-dismissible col-md-8 col-md-offset-2" role="alert">' + 
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' + 
            '<span aria-hidden="true">&times;</span></button>' + 
            '<strong><i class="glyphicon glyphicon-ok"></i> Sucesso!</strong> Filme adicionado.' + 
            '</div>');
            $('input, select, textarea').val('');
            $('input:first').focus();
            //$('#form-cadastro div.form-group:first').find('input,select,textarea').focus();
            
            } else {
            var alerta = $('<div class="alert alert-danger alert-dismissible col-md-8 col-md-offset-2" role="alert">' +
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' + 
            '<span aria-hidden="true">&times;</span></button>' +
            '<strong><i class="glyphicon glyphicon-remove"></i> Erro!</strong> Filme não adicionado.' + 
            '</div>');
            };
            $('#alertas').append(alerta);
        };
        
        //Enviar os dados à página '/model/cadastro.php' (método '.post')
        //e tratar o resultado fornecido por aquela página (método '.done')
        $.post('/model/cadastro.php', dados).done(tratar_retorno);
    });
});

//Marcar no formulário os dados não informados
function validar_formulario(form){
    var valido = true; //inicialmente, o formulário é tido como validado
    $(form).find('.form-group').removeClass('has-error'); //remover marcas de erro
    $(form).find('span.glyphicon-remove').remove(); //remover marcas de erro
    $(form).find('input, select, textarea').each(function(idx, elemento){
        //Se alguma entrada 'input', 'select' ou 'textarea' estiver
        //sem dados informados, marcar como erro
        if($(elemento).val() == ''){
            valido = false; //Formulário invalidado
            $(elemento).parent().parent().addClass('has-error');
            if($(elemento).attr('type') == 'text' ){
                $(elemento).after('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
            };
        };
    });
};
