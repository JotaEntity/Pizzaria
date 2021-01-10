function total(){
    var total = 0;
    for (var key in pizzas){
        total+= pizzas[key].preco * pizzas[key].quantia;
    }
}
function salvar(){
    for (var key in pizzas){
 
        
        dump = 
        '<div class="card-panel white z-depth-3" align="center">'
        '<h4  class="principal cabe2">' + pizzas[key].sabor + '</h4>'
        '<p class="font-ubuntu">Preço: R$' +pizzas[key].preco + '</p>'
        '<img width="50px" heigth="50px"src="'+ pizzas[key].img + '"></img>'
        '<hr>'
        '</div>';
        }
}
function inner(){
    var sabor = "";
    var preco = "";
    var imagem = "";
    var teste = "";



   for (var key in pizzas){
       sabor+=pizzas[key].sabor;
       preco+=pizzas[key].preco;
       imagem+='<img width="50px" heigth="50px"src="'+ pizzas[key].img + '"></img>';
       teste='<div class="col m4">'+
       '<div class="card-panel white font-ubuntu" align="center">'+
       '<i class="fa fa-gift big"></i>'+
       '<h5 class="blue-text">' + pizzas[key].sabor +'<br/></h5><hr>'+
       '<p class="black-text">' + pizzas[key].preco +'</p>'+
       '<br/>'+
       '<hr>'+
       '</div>'+
       '</div>';
   }
   document.getElementById("teste").innerHTML = teste;

}
total();
inner();