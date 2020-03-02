<?php

// Tratamento do título da página
if ($titulo == "") {
    $titulo = "Pizzaria Corleone - A pizza mais criminosa";
} else {
    $titulo = "{$titulo} - Pizzaria Corleone";
}

// Tratamento do CSS da página
if ($css != "") {
    $css = "<link rel=\"stylesheet\" href=\"{$css}\">\n";
} else {
    $css = null;
}

// Tratamento do JavaScript da página --> _footer.php
if ($js != "") {
    $js = "<script src=\"{$js}\"></script>\n";
} else {
    $js = null;
}

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo ?></title>
    <link rel="shortcut icon" href="/img/logo03.png">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <?php echo $css ?>
</head>
<body>
<a id="topo"></a>

<div class="wrap">

    <header class="header">
        <a href="/index.php" title="Pizzaria Corleone - A pizza mais criminosa"><img src="img/pizzas.jpeg" alt="Pizzaria Corleone"></a>
        <h1>Pizzaria Corleone<small>A pizza mais criminosa.</small></h1>
    </header>

    <nav class="nav">
        <a <?php echo ( $menu == 'index' ) ? 'class="active"' : null ?>  href="/index.php"><i class="fas fa-home"></i></a>
        <div id="menulinks">
            <a <?php echo ( $menu == 'pedidos' ) ? 'class="active"' : null ?> href="/pedidos.php"><i class="fas fa-pizza-slice"></i> Pedidos</a>
            <a <?php echo ( $menu == 'promocoes' ) ? 'class="active"' : null ?> href="/promocoes.php"><i class="fas fa-fw fa-newspaper"></i> Promoções</a>
            <a <?php echo ( $menu == 'trabalhe' ) ? 'class="active"' : null ?> href="/trabalhe.php"><i class="fas fa-fw fa-mail-bulk"></i> Trabalhe Conosco</a>
            <a <?php echo ( $menu == 'contato' ) ? 'class="active"' : null ?> href="/contatos.php"><i class="fas fa-fw fa-user"></i> Contato</a>
        </div>
        <a href="#menu" id="menu"><i class="fas fa-fw fa-bars"></i></a>             
    </nav>

    <main class="main">
<!-- CONTEÚDO DA PÁGINA -->
        
        
