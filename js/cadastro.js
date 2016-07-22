$(document).ready(function(){
    var anos = "";
    var hoje = new Date();
    for(var i = 1940; i <= hoje.getFullYear(); i++){
        anos = anos + '<option value=' + i + '>' + i + '</option>\n';
    }
    $("#ano").append(anos);
});