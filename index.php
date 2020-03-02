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
<h2> Pizza 4 Queijos</h2>
<img class="responsiva" src="img/4quei.jfif">
<h3>Tamanho: Médio e Grande</h3>
<h2> Pizza Calabresa</h2>
<img class="responsiva" src="img/cala.jpg">
<h3>Tamanho: Médio e Grande</h3>

<?php

// Inclui o rodapé do template
require ('footer.php');

?>