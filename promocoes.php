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
$menu = "index";
// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

// Inclui o cabeçalho do template
require ('header.php');

?>

<h2> Pizza Portuguesa</h2>
<img class="responsivas" src="img/portu.jpg">
<div class="pizzas"><h4>Tamanho: Médio e Grande</h4></div>

<h2> Pizza Calabresa</h2>
<img class="responsivas" src="img/cala.jpg">
<div class="pizzas"><h4>Tamanho: Médio e Grande</h4></div>

<h2>Frango com Catupiry</h2>
<img class="responsivas" src="img/catu.jpg">
<h4>Tamanho: Médio e Grande</h4>

<?php

// Inclui o rodapé do template
require ('footer.php');

?>