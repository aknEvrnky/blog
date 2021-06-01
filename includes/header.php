<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akın Evrenkaya</title>
    <link rel="stylesheet" href="./front/css/main.css">
</head>
<body>

<header class="header">
    <div class="container">
        <div class="row row-area">
            <div class="col-lg-3">
                <ul class="social">
<!--                    <li>-->
<!--                        <a href="#" title=""><i class="fab fa-facebook-f"></i></a>-->
<!--                    </li>-->
                    <li>
                        <a href="#" title=""><i class="fab fa-twitter"></i></a>
                    </li>
<!--                    <li>-->
<!--                        <a href="" title=""><i class="fab fa-linkedin-in"></i></a>-->
<!--                    </li>-->
                    <li>
                        <a href="" title=""><i class="fab fa-github"></i></a>
                    </li>
<!--                    <li>-->
<!--                        <a href="" title=""><i class="fab fa-youtube"></i></a>-->
<!--                    </li>-->
                    <li>
                        <a href="" title=""><i class="fab fa-instagram"></i></a>
                    </li>
                </ul> <!-- //TODO partialse gidecek -->
            </div>
            <div class="col-lg-6 col-logo">
                <a href="index.php" title=""><img src="front/images/logo.png" alt="" class="img-fluid"></a>
            </div>
            <div class="col-lg-3 col-search">
                <button class="btn-circle goSearch"><i class="fal fa-search"></i></button>
            </div>
        </div>
    </div>
</header>

<nav class="navigation">
    <div class="container">
        <div class="row row-area">
            <div class="col-lg-2 hide">
                <a href="index.php" title="" class="logo-link"><img src="front/images/logo2.png" alt="" class="img-fluid"></a>
            </div>
            <div class="col-lg-5 hide form-col">
                <form action="" method="GET">
                    <input id="s" type="text" name="s" placeholder="Arama Yapın...">
                    <button type="submit"><i class="fal fa-search"></i></button>
                </form>
            </div>
            <div class="col-lg-5 col-nav">
                <ul class="nav-menu">
                    <li class="active">
                        <a href="#" title="">Home</a>
                    </li>
                    <li>
                        <a href="#" title="">Blog</a>
                    </li>
                    <li class="submenu">
                        <a href="#" title="">Kategoriler</a>
                        <ul class="dropmenu">
                            <li>
                                <a href="#" title="">PHP</a>
                            </li>
                            <li>
                                <a href="#" title="">CSS</a>
                            </li>
                            <li>
                                <a href="#" title="">HTML</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" title="">Hakkımda</a>
                    </li>
                    <li>
                        <a href="#" title="">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<header class="mobile-header">
    <div class="container">
        <div class="row row-area">
            <div class="col-4">
                <button type="button" class="search" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="fal fa-search"></i>
                </button>
            </div>
            <div class="col-4">
                <a href="" title="" class="logo-link"><img src="front/images/logo2.png" alt="" class="img-fluid"></a>
            </div>
            <div class="col-4 col-area">
                <button class="menu-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>

<div class="offcanvas offcanvas-start mobile-hamburger" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="btn-area">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="canvas-content">
        <div class="top-area">
            <a href="index.php" class="img-link"><img src="front/images/logo.png" alt="" class="img-fluid"></a>
        </div>
        <ul class="nav-menu">
            <li>
                <a href="index.php" class="active">Home</a>
            </li>
            <li>
                <a href="blogs.php">Blog</a>
            </li>
            <li class="dropdown">
                <div class="submenu">
                    <a href="service-detail.php">Categories</a>
                    <!-- buton -->
                </div>
                <ul class="dropmenu">
                    <li>
                        <a href="" title="">PHP</a>
                    </li>
                    <li>
                        <a href="" title="">CSS</a>
                    </li>
                    <li>
                        <a href="" title="">JQUERY</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="service-detail.php">Construction</a>
            </li>
            <li>
                <a href="about-us.php">About Us</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
        </ul>
        <ul class="social">
            <li>
                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </li>
        </ul>
    </div>
</div>

<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="title" id="searchModal">Ara...</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fal fa-times"></i></button>
            </div>
            <div class="modal-body form-col">
                <form action="" method="GET">
                    <input id="s" type="text" name="s" placeholder="Arama Yapın...">
                    <button type="submit"><i class="fal fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>