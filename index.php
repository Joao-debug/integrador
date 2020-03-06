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
$css = "/css/index.css";
$menu = "index";
// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

// Inclui o cabeçalho do template
require ('header.php');

?>
<div class="index"><h2> Pizzaria Corleone</h2>
<h4> A mais nova pizzaria perto de você</h4></div>
<center><img class="responsiva" src="img/banner.png">

<?php

// Inclui o rodapé do template
require ('footer.php');

?>