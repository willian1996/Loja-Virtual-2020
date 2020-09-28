<?php
require_once("config.php");

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Lorraine Modas, Lorrainemodas, Lorraine, Modas, Feminina, Loja Lorraine Modas, Loja de Roupas, Lorraine Modas Feminina">
    <meta name="description" content="<?php echo $tipo_loja ?>">
    <meta name="author" content="Willian Sales">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title><?php echo $nome_loja ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
<!--
    <div id="preloder">
        <div class="loader"></div>
    </div>
-->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>5</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>R$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Inicio</a></li>
                <li><a href="./categorias.php">Categorias</a></li>
                <li><a href="#">Produtos</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./produtos.php">Lista de Produtos</a></li>
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                        <li><a href="./checkout.php">Check Out</a></li>
                        <li><a href="./blog-details.php">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./carrinho.php">Carrinho</a></li>
                <li><a href="./blog.html">Blog</a></li>
                
                <li><a href="./contatos.php">Contatos</a></li>
                
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a target="_blank" href="#"><i class="fa fa-facebook text-info"></i></a>
            <a target="_blank" href="#"><i class="fa fa-instagram text-danger"></i></a>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="fa fa-whatsapp text-success"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> <?php echo $email ?></li>
                <li><?php echo $texto_destaque ?></li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i><?php echo $email; ?></li>
                                <li><?php echo $texto_destaque; ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a target="_blank" title="Facebook" href="#"><i class="fa fa-facebook text-info"></i></a>
                                <a target="_blank" title="Instagram" href="#"><i class="fa fa-instagram text-danger"></i></a>
                                <a target="_blank" title="Whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="fa fa-whatsapp text-success"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="sistema"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                           <li class="active"><a href="./index.php">Inicio</a></li>
                
                <li><a href="#">Produtos</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./produtos.php">Lista de Produtos</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.php">Check Out</a></li>
                        <li><a href="./blog-details.php">Blog Details</a></li>
                        <li><a href="./categorias.php">Categorias</a></li>
                    </ul>
                </li>
                <li><a href="./carrinho.php">Carrinho</a></li>
                <li><a href="./blog.html">Blog</a></li>     
                <li><a href="./contatos.php">Contatos</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>R$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    