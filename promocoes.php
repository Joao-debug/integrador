<?php

// Configuração inicial da página
require ('config.php');

/*********************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/



/************************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/

// Define o título "desta" página
$titulo = "";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "/css/promocoes.css";
$menu = "";
// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

// Inclui o cabeçalho do template
require ('header.php');

?>

<center><h2> Pizza Portuguesa</h2>
<center><img class="responsivas" src="img/portu.jpg">
<div class="pizzas"><h3>Tamanho: Médio e Grande</h3><h4>Indique um amigo e a segunda pizza sai pela metade do preço R$ 29,90</h4></div>

<h2> Pizza Calabresa</h2>
<center><img class="responsivas" src="img/cala.jpg">
<div class="pizzas"><h3>Tamanho: Médio e Grande</h3><h4>Compre uma leve duas por R$ 32,90</h4></div>

<h2>Frango com Catupiry</h2>
<center><img class="responsivas" src="img/catu.jpg">
<div class="pizzas"><h3>Tamanho: Médio e Grande</h3><h4>Promoção relampâgo, pizza somente por R$ 24,90</h4></div>

<h2>Pizza 4 Queijos</h2>
<center><img class="responsivas" src="img/4quei.jfif">
<div class="pizzas"><h3>Tamanho: Médio e Grande</h3><h4>O mais novo sabor da casa, por apenas R$ 29,90</h4></div>

<h2>Pizza de Chocolate</h2>
<center><img class="responsivas" src="img/cohoc.jpg">
<div class="pizzas"><h3>Tamanho: Médio e Grande</h3><h4>O doce que faltava na sua vida R$ 20,90</h4></div>

<h2>Pizza de Pepperoni</h2>
<center><img class="responsivas" src="img/peppe.jpg">
<div class="pizzas"><h3>Tamanho: Médio e Grande</h3><h4>Leva um refrigerante de cortesia por R$ 24,90</h4></div>

<h2>Pizza de Banana</h2>
<center><img class="responsivas" src="img/nana.jfif">
<div class="pizzas"><h3>Tamanho: Médio e Grande</h3><h4>Vai uma banana? Por R$ 19,90</h4></div>




<?php

// Inclui o rodapé do template
require ('footer.php');

?>