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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


</head>

<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg" style="background-color: #22DA21;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tiendita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: red;"><i class="fas fa-shopping-cart"></i>
                            <?php  ?>
                        </a>
                    </li>
                    <li class="nav-item">
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
                    <h5 class="modal-title" id="exampleModalLabel">carrito</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">



                    <div class="modal-body">
                        <div>
                            <div class="p-2">
                                <ul class="list-group mb-3">

                                </ul>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a type="button" class="btn btn-primary" href="deletecart.php">Vaciar carrito</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL CARRITO -->





    <!-- ARTICULOS -->
    <div class="container mt-5">
        <div class="row" style="justify-content: center;">

            <div class="card m-4" style="width: 18rem;">
                <form id="formulario" name="formulario" method="post" action="carrito.php">
                    <input name="precio" type="hidden" id="precio" value="5860" />
                    <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                    <img src="https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00088984265135l.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Consola Xbox Series S 512 GB Digital Blanco</h5>
                        <p class="card-text">Precio $5,860.00</p>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                    </div>
                </form>
            </div>



            <div class="card m-4" style="width: 18rem;">
                <form id="formulario" name="formulario" method="post" action="carrito.php">
                    <input name="precio" type="hidden" id="precio" value="14449" />
                    <input name="titulo" type="hidden" id="titulo" value="articulo 2" />
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                    <img src="https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00071171954889l.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Consola PlayStation 5 </h5>
                        <p class="card-text">Precio $14,499.00</p>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                    </div>
                </form>
            </div>


            <div class="card m-4" style="width: 18rem;">
                <form id="formulario" name="formulario" method="post" action="carrito.php">
                    <input name="precio" type="hidden" id="precio" value="5481" />
                    <input name="titulo" type="hidden" id="titulo" value="articulo 3" />
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                    <img src="https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00004549688217l.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Consola Nintendo Switch Neon V 1.1</h5>
                        <p class="card-text">Precio $5,481.00</p>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                    </div>
                </form>
            </div>
            <div class="card m-4" style="width: 18rem;">
                <form id="formulario" name="formulario" method="post" action="carrito.php">
                    <input name="precio" type="hidden" id="precio" value="6999" />
                    <input name="titulo" type="hidden" id="titulo" value="articulo 3" />
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                    <img src="https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:best/mg/gm/1p/images/product-images/img_large/00088984261392l.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Control Inalámbrico Xbox One Elite Series 2 Negro</h5>
                        <p class="card-text">Precio $6,999.00</p>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- END ARTICULOS -->

</body>

</html>