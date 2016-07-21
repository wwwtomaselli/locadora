$(document).ready(function(){
    $.getJSON('model/catalogo.php',function(data){
        
        $(data).each(function(indice, elem){
        var lancamento = (elem.tipo == 'catalogo')? 'glyphicon glyphicon-star-empty' : 'glyphicon glyphicon-star'
        var filme = $('<tr data-status="pagado">' + 
            '<td>' +
                    '<div class="ckbox">' +
                            '<input type="checkbox" id="checkbox1">' +
                            '<label for="checkbox1"></label>' +
                   '</div>' +
            '</td>' +
            '<td>' +
                    '<a href="javascript:;" class="star">' +
                            '<i class="glyphicon glyphicon-star"></i>' +
                    '</a>' +
            '</td>' +
            '<td>' +
                    '<div class="media">' +
                            '<a href="#" class="pull-left">' + 
                                    '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">' +
                            '</a>' +
                            '<div class="media-body">' +
                                    '<span class="media-meta pull-right">Febrero 13, 2016</span>' +
                                    '<h4 class="title">' +
                                            elem.filme +
                                            '<span class="pull-right pagado">(Pagado)</span>' +
                                    '</h4>' +
                                    '<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>' +
                            '</div>' +
                    '</div>' +
            '</td>' +
    '</tr>';
    
    $(filme).appendTo('#catalogo tbody');
    });
    //);
    });
});