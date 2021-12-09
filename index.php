<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/app.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        
        <title>App Produtos</title>
    </head>

    <body>
        <div class="content">
            <div class="products">
                <ul id="app"></ul>
            </div>
        </div>
    </body>

    <script type="text/javascript">
        
        var list = [
            { 
                indice: '1', 
                name: "Liquidificador Mondial Power NL-26 Branco/Cinza 350W de Potência 2 Velocidades 1,5L 127v", 
                old_price: 'R$ 400,00', 
                new_price: 'R$ 300,00', 
                img: 'https://images-americanas.b2w.io/produtos/01/00/img/2910438/7/2910438781_1SZ.jpg', 
                price_condition: '5x de R$ 60,00' 
            },

            { 
                indice: '2', 
                name: "Geladeira/Refrigerador Brastemp Frost Free Evox - 573L com Smart Bar Ative! Inverse Maxi ", 
                old_price: 'R$ 2.400,00', 
                new_price: 'R$ 1.800,00', 
                img: 'https://a-static.mlcdn.com.br/618x463/geladeira-refrigerador-brastemp-frost-free-evox-573l-com-smart-bar-ative-inverse-maxi/magazineluiza/013021200/8a0c5e4e94cb7df3199cef088e33a8c0.jpg', 
                price_condition: '10x de R$ 180,00' 
            },

            { 
                indice: '3', 
                name: "Fogão 4 Bocas Electrolux Prata Automático com Mesa de Vidro e Porta Full Glass (52LSV) - Bivolt", 
                old_price: 'R$ 1.300,00', 
                new_price: 'R$ 1.100,00', 
                img: 'https://m.media-amazon.com/images/I/51kmJQh+G+S._AC_SX522_.jpg',
                price_condition: '10x de R$ 110,00' 
            },

            { 
                indice: '4', 
                name: "Micro-ondas de Mesa Panasonic com 21 Litros de Capacidade Branco com Porta Espelhada - NN-ST27LWRU", 
                old_price: 'R$ 600,00', 
                new_price: 'R$ 500,00', 
                img: 'https://a-static.mlcdn.com.br/618x463/micro-ondas-electrolux-mtd30-20l/magazineluiza/011338601/f8d2a302734832c0ae287527e6f42e47.jpg',
                price_condition: '10x de R$ 50,00' 
            }
        ]
        
        var app = document.getElementById('app');
        
        list.map((item) => {
            app.innerHTML += `
                    <li>
                        <div class="product">
                            <div class="wishlist"> 
                                <div id="wish-${item.indice}" class="wish-icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                            <div class="pic">
                                <img src="${item.img}" alt="${item.name}">
                            </div>
                            <div class="title">${item.name}</div>
                            <div class="old-price">${item.old_price}</div>
                            <div class="new-price">${item.new_price}</div>
                            <div class="price-condition">em até <span class="bold">${item.price_condition}</span> sem juros</div>
                            <button id="btn-${item.indice}" class="buy"></button>
                        </div>
                    </li>`;            
        });
        
        // Buy Buttons
        $('#btn-1').on('click', function(){
            $('#btn-1').removeClass('buy');
            $('#btn-1').addClass('selected');
        });

        $('#btn-2').on('click', function(){
            $('#btn-2').removeClass('buy');
            $('#btn-2').addClass('selected');
        });

        $('#btn-3').on('click', function(){
            $('#btn-3').removeClass('buy');
            $('#btn-3').addClass('selected');
        });

        $('#btn-4').on('click', function(){
            $('#btn-4').removeClass('buy');
            $('#btn-4').addClass('selected');
        });

        //Wish buttons
        $('#wish-1').on('click', function(){
            $('#wish-1').removeClass('wish-icon');
            $('#wish-1').addClass('wish-selected');
        });

        $('#wish-2').on('click', function(){
            $('#wish-2').removeClass('wish-icon');
            $('#wish-2').addClass('wish-selected');
        });

        $('#wish-3').on('click', function(){
            $('#wish-3').removeClass('wish-icon');
            $('#wish-3').addClass('wish-selected');
        });

        $('#wish-4').on('click', function(){
            $('#wish-4').removeClass('wish-icon');
            $('#wish-4').addClass('wish-selected');
        });

    </script>
    

</html>