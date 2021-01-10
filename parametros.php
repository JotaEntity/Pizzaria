<?php 

class parametros{


    public function dados(){
         $array = array(["id"=>"1", "sabor"=>"4 Queijos", "quantia"=>"1", "preco"=>"35.00", "img"=> "https://www.clonepizza.com.br/wp-content/uploads/quatro-queijos-3.jpg"],
         ["id"=>"2","sabor"=>"Margherita","quantia"=>"1", "preco"=>"36.00", "img"=> "https:portal-amb-imgs.clubedaana.com.br/2019/04/pizza-margherita-600x400.jpg"],
         ["id"=>"3","sabor"=>"Baiana", "quantia"=>"1", "preco"=>"37.00","img"=> "https:www.receiteria.com.br/wp-content/uploads/receitas-de-pizza-baiana-1.jpg"],
         ["id"=>"4","sabor"=>"Portuguesa", "quantia"=>"1", "preco"=>"34.00","img"=> "https://media.gazetadopovo.com.br/2020/10/14150336/1_rei_da_pizza-portuguesa.jpg"],
         ["id"=>"5","sabor"=>"Brocolis", "quantia"=>"1", "preco"=>"39.00","img"=> "https:img.itdg.com.br/images/recipes/000/155/954/102994/102994_original.jpg"],
         ["id"=>"6","sabor"=>"Aliche", "quantia"=>"1", "preco"=>"30.00","img"=> "https:media-cdn.tripadvisor.com/media/photo-s/05/25/33/83/villa-roma-pizzaria.jpg"],
         ["id"=>"7","sabor"=>"Alho e Oleo", "quantia"=>"1", "preco"=>"28.00","img"=> "https:media-cdn.tripadvisor.com/media/photo-s/12/f2/aa/6f/pizza-de-alho-e-oleo.jpg"],
         ["id"=>"8","sabor"=>"Romeu e Julieta", "quantia"=>"1", "preco"=>"38.50","img"=> "https:img.cybercook.com.br/imagens/receitas/137/pizza-romeu-e-julieta-623x350.jpg"],
         ["id"=>"9","sabor"=>"Chocolate", "quantia"=>"1", "preco"=>"36.50","img"=> "https:www.comidaereceitas.com.br/img/sizeswp/1200x675/2012/10/pizza_prestigio.jpg"],
         ["id"=>"10","sabor"=>"Banana", "quantia"=>"1", "preco"=>"30.50","img"=> "https:www.haraldfoodservice.com.br/wp-content/uploads/2019/12/pizza-de-banana-e-chocolate-branco-imagem-a-esquerda-receitas-960x440.jpg"]);

         for($i=0; $i < 10; $i++){
             $id = $array[$i]['id'];
             $sabor = $array[$i]['sabor'];
             $preco = $array[$i]['preco'];
             $img = $array[$i]['img'];



             echo '
             <div class="col-sm-4 col-md-4">
             <div class="panel panel-default">
             <div class="panel-body">
             <div align="center">
             <img class="ftpizzas" src='.$img.'></img>
             </div>
             <div class="centronovo">
             <h4 class="centro">'.$sabor .' </h4>
             R$ '.$preco.'
             </div>
             <div align="center">
             <button class="botaoverde" href="#abrirmodal" onClick="adicionarAoCarrinho('.$id.');">Adicionar ao carrinho</button>
             </div>
             </div>
             </div>
            </div>';
         

          }
}



}


?>
<script type="text/javascript" src="js/carrinho.js"></script>
