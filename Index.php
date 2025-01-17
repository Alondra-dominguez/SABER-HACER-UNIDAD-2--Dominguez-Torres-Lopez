<?php 
	session_start();
	require_once 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CROQ SHOP</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-white" href="#!">🐾CROQ SHOP🐾</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="Index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="about.html">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li><hr class="dropdown-divider" /></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="logout.php">Salir</a></li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark text-white" type="submit">
                        <i class="bi-cart-fill me-1 text-white"></i>
                        Cart
                        <span id="cart-count" class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <header class="bg-primary py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">
                    <span class="animated-text" id="text1">🐶Bienvenidos</span> 
                    <span class="animated-text" id="text2">A CROP</span>
                    <span class="animated-text" id="text3">SHOP</span>
                    <span class="animated-text" id="text4"><?php echo $_SESSION['user'] ?> 🐶</span>
                </h1>
                <p class="lead fw-normal text-white-50 mb-0">El Canino En Las Palmas De Tus Manos</p>
            </div>
        </div>
    </header>
    <section id="product-section" class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="product-gallery" id="product-list">
                <!-- Aquí se agregarán las tarjetas de productos -->
            </div>
        </div>
    </section>
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">SABER HACER &copy;2024</p></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>