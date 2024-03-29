<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caldle Store</title>
    <!-- Enlace a Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/tienda.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/util.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/main.css') }}" rel="stylesheet"> -->
    <!-- Inter font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Your custom styles -->
    @yield('head')
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-0">
        <div class="container py-2">
            <!-- Contenido que permanece visible en pantallas móviles -->
            <div id="navbarTitle" class="visible-on-mobile d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#" >
                <img class="nav-image" src="/images/logo2.png">
                <span style="position: relative;top: 3px;">Candle Store</span>
            </a>
            <div class="icon-header-item" data-notify="0"><!--CART 1 -->
                <i class="nav-link d-inline pe-0 fas fa-shopping-cart d-lg-none js-show-cart" style="font-size:20px;position:relative;top:3px;"></i> <!-- A la derecha en pantallas móviles -->
            </div>
            </div>

            <!-- Botón de menú y contenido del menú desplegable -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-3 mb-2 mb-lg-0" style="width: calc(100% - 50px);">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Homee</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light border-0" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/destacados">Destacados</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/contacto">Contacto</a>
                </li>
                <li class="nav-item order-md-last"> <!-- Utilizamos la clase order-md-last para mover este elemento al final en pantallas medianas y grandes -->
                <a class="nav-link d-lg-none" href="{{ route('login') }}"" tabindex="-1" aria-disabled="true">Entrar <i class="fas fa-sign-in-alt"></i></a>
                </li>
            </ul>
            <!-- Contenido que se mueve a la izquierda en pantallas más pequeñas -->
            <div class="visible-on-mobile order-last d-flex align-items-center" >
                <div class="icon-header-item js-show-cart" data-notify="0"><!--CART 2 -->
                <i class="nav-link d-inline pe-0 fas fa-shopping-cart d-none d-md-inline " style="font-size:18px;"></i> <!-- Ocultar en pantallas pequeñas -->
                </div>
                <div class="icon-header-item"><!--CART 2 -->
                <a class="nav-link d-inline d-none d-md-inline grey" href="{{ route('login') }}"">Entrar</a>
                </div>
            </div>
            </div>
        </div>
    </nav>



    <main class="py-2">
        @yield('content')
    </main>


    <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>
        <div class="header-cart flex-col-l py-4 px-5">
            <div class="header-cart-title flex-w flex-sb-m pb-3">
                <h4 class="m-2 ms-0 display-4">Tu carrito
                    <div class="fs-3 lh-1 cl2 px-2 pointer hov-cl1 trans-04 text-end js-hide-cart" style="width: 40px;float: right;">
                        <i class="fas fa-times grey"></i>
                    </div>
                </h4>
            </div>
            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full list-unstyled">
                    <li class="header-cart-item flex-w flex-t d-flex mb-3">
                        <div class="header-cart-item-img">
                            <img src="/images/v1-3.jpg" alt="IMG">
                        </div>
                        <div class="header-cart-item-txt pt-2 ms-0">
                            <div>
                                <a href="/item/zapatilla-blanca-adidas-mujer" class="header-cart-item-name mb-2 hov-cl1 trans-04">
                                    White Shirt Pleat 
                                </a>
                                <span class="header-cart-item-info">
                                    1 x $19.00
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="header-cart-item flex-w flex-t d-flex mb-3">
                        <div class="header-cart-item-img">
                            <img src="/images/v1-1.jpg" alt="IMG">
                        </div>
                        <div class="header-cart-item-txt pt-2 ms-0">
                            <div>
                                <a href="#" class="header-cart-item-name mb-2 hov-cl1 trans-04">
                                    Converse All Star
                                </a>
                                <span class="header-cart-item-info">
                                    1 x $39.00
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="header-cart-item flex-w flex-t d-flex mb-3">
                        <div class="header-cart-item-img">
                            <img src="/images/v1-2.jpg" alt="IMG">
                        </div>
                        <div class="header-cart-item-txt pt-2 ms-0">
                            <div>
                                <a href="#" class="header-cart-item-name mb-2 hov-cl1 trans-04">
                                    Nixon Porter Leather
                                </a>
                                <span class="header-cart-item-info">
                                    1 x $17.00
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="cont-total-cart w-full" style="margin-top:100px;">
                    <h5 class="display-5 p-3 pb-2">
                        Total: $75.00
                    </h5>
                    <div class="header-cart-buttons flex-w w-full">
                        <button type="button" class="btn btn-primary rounded-pill btn-blue ms-0"> Completar Compra <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-light text-center py-3">
        <p class="mb-0">Creado con <a href="https://tiendyshop.com" class="text-light" target="_blank">tiendyshop.com</a></p>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    /*==================================================================
    [ Cart ]*/
    $(document).ready(function () {
      $('.js-show-cart').on('click', function () {
          console.log('open cart')
          $('.js-panel-cart').addClass('show-header-cart');
      });

      $('.js-hide-cart').on('click', function () {
          console.log('close cart')
          $('.js-panel-cart').removeClass('show-header-cart');
      });
      /*==================================================================
      [ Cart ]*/
      $('.js-show-sidebar').on('click', function () {
          console.log('open cart')
          $('.js-sidebar').addClass('show-sidebar');
      });

      $('.js-hide-sidebar').on('click', function () {
          $('.js-sidebar').removeClass('show-sidebar');
      });
    });
    </script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('script')
</body>
</html>
