var nome = "Eu mesmo";

//Criar uma classe
var Pessoa = function(nome)
{
  //Um atributo público
  this.nome = nome;
  
  //Um atributo privado
  var idade = 30;
  
  //Um método privado
  var calcula = function(){
    console.log('Calculou!');
  }

  //Um método público
  this.getNome = function(){
    calcula();
    return this.nome;
  }
};

//Criar uma instância (objeto) da classe 'Pessoa'
var wilfredo = new Pessoa("Wilfredo");

//Extender uma classe adicionando um método
Pessoa.prototype.peso = function(){return 80;}

//Adicionar uma propriedade a um objeto diretamente
wilfredo.nacionalidade = "Brasileiro";

//Vetor criado via notação da linguagem JavaScript 
//(instância da classe 'Array')
var vet1 = new Array('Curitiba', 'Paranaguá');

//Vetor criado via notação JSON 
var vet2 = ['Curitiba', 'Paranaguá'];

//Objeto criado diretamente via notação JSON
var novo_objeto = {
  nome: "Wilfredo",
  idade: 30,
  getPeso: function() {
    return 80; },
  cidades: ['Guarapuava', 'Curitiba']
};

// 'JSON.stringify': converte um objeto (seus atributos) para a linguagem JSON.
// 'JSON.parse': converte o objeto da linguagem JSON para JavaScript

