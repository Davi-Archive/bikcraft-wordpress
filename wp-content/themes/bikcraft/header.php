<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bikcraft - Bicicletas Personalizadas" />
    <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte." />
    <meta property="og:url" content="http://bikcraft.com" />
    <meta property="og:image" content="http://bikcraft.com/img/og-image.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/favicon.ico">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
    <script src="<?= get_template_directory_uri(); ?>/js/libs/modernizr.custom.45655.js"></script>

    <!-- Inicio Wordpress Head-->
    <?php wp_head(); ?>
    <!-- Fim Wordpress Head-->
</head>

<body>

    <header class="header">
        <div class="container">
            <a href="/home/" class="grid-4">
                <img src="<?= get_template_directory_uri(); ?>/img/bikcraft.png" alt="Bikcraft">
            </a>
            <nav class="grid-12 header_menu">
                <ul>
                    <li><a href="/sobre/">Sobre</a></li>
                    <li><a href="/produtos/">Produtos</a></li>
                    <li><a href="/portfolio/">Portfólio</a></li>
                    <li><a href="/contato/">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>