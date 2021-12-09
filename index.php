<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>App Produtos</title>
        
        <link rel="stylesheet" href="css/app.css">
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
            { name: "Liquidificador Philips Walita Serie 5000 - RI2240/90 - 220v", old_price: 'R$ 2.500,00', new_price: 'R$ 1.900,00' },
            { name: "Geladeira/Refrigerador Brastemp Frost Free Evox - 573L com Smart Bar Ative! Inverse Maxi ", old_price: 'R$ 2.400,00', new_price: 'R$ 1.800,00' },
            { name: "Fogão 4 Bocas Electrolux Prata Automático com Mesa de Vidro e Porta Full Glass (52LSV) - Bivolt", old_price: 'R$ 2.300,00', new_price: 'R$ 1.700,00' },
            { name: "Micro-ondas de Mesa Panasonic com 21 Litros de Capacidade Branco com Porta Espelhada - NN-ST27LWRU", old_price: 'R$ 2.100,00', new_price: 'R$ 1.600,00' }
        ]
        
        var app = document.getElementById('app');
        
        list.map((item) => {
            app.innerHTML += `
                    <li>
                        <div class="product">
                            <div class="wishlist"> 
                                <i class="fa fa-heart"></i>
                            </div>
                            <img src="https://a-static.mlcdn.com.br/618x463/geladeira-refrigerador-brastemp-frost-free-evox-573l-com-smart-bar-ative-inverse-maxi/magazineluiza/013021200/8a0c5e4e94cb7df3199cef088e33a8c0.jpg" alt="">
                            <div class="title">${item.name}</div>
                            <div class="old-price">${item.old_price}</div>
                            <div class="new-price">${item.new_price}</div>
                            <div class="price-condition">em até <span class="bold">10x de R$ 180,00</span> sem juros</div>
                            <button>Adicionar</button>
                        </div>
                    </li>`;
        });
        
    </script>

</html>