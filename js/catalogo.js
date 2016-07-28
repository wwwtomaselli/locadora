$(document).ready(function(){
    var filtro = 'todos';
    var categoria = '';
    get_catalogo('todos','');
    
    $('#filtro button').click(function(){
        $(this).parent().find('button').removeClass('active');
        $(this).addClass('active');
        filtro = $(this).attr('data-target');
        get_catalogo(filtro, categoria);
    });
    
    $('#categoria').change(function(){
        categoria = $('#categoria').val();
        get_catalogo(filtro, categoria);
    });
});

function get_catalogo(Filtro, Categoria){
    var param = {filtro: Filtro, categoria: Categoria};
    
    $("#catalogo tbody").empty();
    $.getJSON('/model/catalogo.php', param, function(data){
        //Obtidos os dados dos filmes, 
        //montar a exibição de cada um deles
        //e acrescentar cada linha à tabela
        $(data).each(function(idx, elem){
            var lancamento = (elem.tipo == 'catalogo')? 'glyphicon glyphicon-star-empty' : 'glyphicon glyphicon-star';
            var filme = $('<tr data-status="pagado">'
                    +'<td>'
                        +'<div class="ckbox">'
                            +'<input type="checkbox" id="checkbox1">'
                            +'<label for="checkbox1"></label>'
                        +'</div>'
                    +'</td>'
                    +'<td>'
                        +'<i class="' + lancamento + '"></i>'
                    +'</td>'
                    +'<td>'
                        +'<div class="media">'
                            +'<a href="#" class="pull-left">'
                                +'<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">'
                            +'</a>'
                            +'<div class="media-body">'
                                +'<span class="media-meta pull-right">' + elem.ano + '</span>'
                                +'<h4 class="title">' 
                                    + '<a href="/cadastro.php?id=' + elem.idcatalogo + '">' + elem.nome + '</a>'
                                    +' <span class="pull-right pagado">(' + elem.categoria + ')</span>'
                                +'</h4>'
                                +'<p class="summary">' + elem.sinopse + '</p><br>'
                                +'<p class="summary"><b>Quantidade disponível: </b>' + elem.disponivel + '</p>'
                            +'</div>'
                        +'</div>'
                    +'</td>'
                +'</tr>');
            $(filme).appendTo("#catalogo tbody");
        });
    });
};