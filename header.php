<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <script src="https://kit.fontawesome.com/c18da18312.js" crossorigin="anonymous"></script>
    <!-- Inicio do WordPress Header -->
    <?php wp_head(); ?>
</head>
<body>
    <div class="bg-pink container-fluid d-flex align-items-end">

        <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-light" style="background: #FE10C4 !important;">
            <a class="brand navbar-brand" href="#">PASSE DE FASE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#objetivos">Objetivos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#como-funciona">Como funciona</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#publico">Seu Público</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contato">Contato</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>