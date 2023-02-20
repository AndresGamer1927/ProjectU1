<?php
session_start();
if ($_SESSION["newUser"] == '123') {
} else {
    header("index.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Carrito de compras</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


</head>

<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg " style="background-color: #22DA21;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tiendita</a>
            <div>
                <ul class="navbar-nav">
                    <li>
                        <a id="elcarro" class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: black;"><i class="fas fa-shopping-cart"></i>
                            <div id="numero">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="cerrarsesion.php">Cerrar Sesion</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->



    <!-- MODAL CARRITO -->
    <div class="modal fade" id="modal_cart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Carrito123">carrito</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a type="button" class="btn btn-primary">Vaciar carrito</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL CARRITO -->



    <!-- ARTICULOS -->
    <div class="row" style="justify-content: center;">
        <main>
            <div id="contenedor" class="contenedor"></div>
        </main>
        <div id="contenedorCompra">
            <div class="informacionCompra" id="informacionCompra"></div>
        </div>
        <div class="productosCompra" id="productosCompra"></div>
        <div class="total" id="total"></div>

    </div>

    <!-- END ARTICULOS -->

    <!-- ya no sirve? 
<div class="contenedor" id="contenedor" style="width: 18rem;">
            <form id="formulario" name="formulario" method="post">
                <img src="https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00088984265135l.jpg" class="card-img-top" alt="...">
                <div class="informacion">
                    <h5 class="card-title">Consola Xbox Series S 512 GB Digital Blanco</h5>
                    <p class="precio">Precio $5,860.00</p>
                    <button> Añadir al carrito</button>
                </div>
            </form>
        </div>



        <div class="contenedor" id="contenedor" style="width: 18rem;">
            <form id="formulario" name="formulario" method="post">
                <img src="https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00071171954889l.jpg" class="card-img-top" alt="...">
                <div class="informacion">
                    <h5 class="titulo">Consola PlayStation 5 </h5>
                    <p class="precio">Precio $14,499.00</p>
                    <button> Añadir al carrito</button>
                </div>
            </form>
        </div>


        <div class="contenedor" id="contenedor" style="width: 18rem;">
            <form id="formulario" name="formulario" method="post">
                <img src="https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00004549688217l.jpg" class="card-img-top" alt="...">
                <div class="informacion">
                    <h5 class="card-title">Consola Nintendo Switch Neon V 1.1</h5>
                    <p class="precio">Precio $5,481.00</p>
                    <button> Añadir al carrito</button>
                </div>
            </form>
        </div>
        <div class="contenedor" id="contenedor" style="width: 18rem;">
            <form id="formulario" name="formulario" method="post">
                <img src="https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00088984261392l.jpg" class="card-img-top" alt="...">
                <div class="informacion">
                    <h5 class="card-title">Control Inalámbrico Xbox One Elite Series 2 Negro</h5>
                    <p class="precio">Precio $6,999.00</p>
                    <button>Añadir al carrito</button>
                </div>
            </form>
        </div>

-->

    <script src="archivosJS/carrito.js"></script>
</body>

</html>