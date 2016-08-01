$(document).ready(function(){
    $('#alert-erro').hide();
    $('#form-login').submit(function(e){
        e.preventDefault();
        $(this).find('input[type="text"],input[type="password"]').each(function(idx,el){
            $(el).parent().removeClass('has-error');
            if($(el).val().trim() == ''){
                $(el).parent().addClass('has-error');
            }
        }); //Fim da validação
        
        var dados = $(this).serialize();
        $.post('/model/login.php', dados, function(retorno){
            var obj = JSON.parse(retorno);
            console.log(obj);
            if (obj.status != 'ok'){
                $('#alert-erro').html(obj.msg);
                $('#alert-erro').fadeIn();
            } else {
                window.location = '/index.php';
            }
        });
        
    });
});