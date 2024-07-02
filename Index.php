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
    <style>
        .navbar-light {
            background-color: #3498db !important; /* Cambia a otro color */
        }
        .nav-link:hover {
            color: #ff6347 !important; /* Cambia el color rojo a otro color al pasar el mouse */
        }
        .product-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .product-card {
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            text-align: center;
            position: relative; /* Añadido para alinear elementos internos */
        }
        .product-card:hover {
            transform: scale(1.1);
        }
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
        }
        .product-details {
            padding: 10px;
        }
        .product-name {
            font-size: 1.2rem;
            margin-top: 10px;
        }
        .product-price {
            font-size: 1rem;
            margin-top: 5px;
            text-align: left; /* Alineación a la izquierda */
        }
        .add-to-cart-btn {
            position: absolute;
            bottom: 10px;
            right: 10px;
            padding: 5px 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .offer-tag {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 5px 10px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
    </style>
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
                    <span class="animated-text" id="text3"><?php echo $_SESSION['user'] ?> 🐶</span>
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
    <script src="js/script.js"></script>
</body>
</html>