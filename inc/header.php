<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Casa dos Laptops</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website da Casa dos Laptops">
    <meta name="keywords" content="casa dos laptops">
    <link rel="icon" type="image.png" href="<?php echo BASEURL; ?>assets/img/icon.png" class="foto-icon">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/all.min.css">
    <style>
        body {
            padding-top: 130px;
            padding-bottom: 20px;
        }
        .btn-light {
            background-color: #cccccc;
            border-color: #cccccc;
            color: #FFFFFF;
        }
        .btn-light:hover {
            background-color: #999999;
            border-color: #cccccc;
            color: #FFFFFF;
            }
        
        
        
    </style>
</head>
<body>


    
    <nav class="navbar navbar-expand-lg navbar-azul bg-dark fixed-top py-4" data-bs-theme="dark" >
        <div class="container-fluid"> 
            <a class="navbar-brand ms-2" href="<?php echo BASEURL; ?>index.php"><img src="<?php echo BASEURL; ?>assets/img/logo.png" alt="Logo" width=auto height="70" class="ms-5 me-3"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcrud" aria-controls="navbarcrud" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarcrud">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user-group icone-branco"></i> Clientes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-offwhite dropdown-azul" href="<?php echo BASEURL; ?>laptops"><i class="fa-solid fa-user-group icone-branco"></i> Gerenciar Clientes</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-offwhite" href="<?php echo BASEURL; ?>laptops/add.php"><i class="fa-solid fa-user-plus icone-branco"></i> Novo Cliente</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTEÚDO DA PÁGINA -->
    <main class="container">