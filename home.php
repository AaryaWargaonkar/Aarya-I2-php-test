<?php
include "db.php";
session_start();
?>

<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand">
                        <h4>Hello <?php echo $_SESSION["name"]; ?></h4>
                    </a> <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                        </ul>
                        <form class="d-flex my-2 my-lg-0">

                            <a name="" id="" class="btn btn-primary" href="logout.php" role="button">Logout</a>
                            <a name="" id="" class="btn btn-primary" href="pdf.php" role="button">Generate  PDF</a>

                        </form>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <main>
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="First slide"
                ></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="1"
                    aria-label="Second slide"
                ></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="2"
                    aria-label="Third slide"
                ></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img
                        src="https://www.shutterstock.com/image-vector/horizontal-banner-vector-illustration-stack-600nw-2560527103.jpg"
                        class="w-100 d-block"
                        alt="First slide"
                    />
                </div>
                <div class="carousel-item">
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyaZNs2zi2TQezfaljeHF3xYO2l69nnxdBmA&s"
                        class="w-100 d-block"
                        alt="Second slide"
                    />
                </div>
                <div class="carousel-item">
                    <img
                        src="https://pixelbookworks.com/cdn/shop/files/pixelbookworks-bc-banner-final.jpg?v=1722525430&width=3840"
                        class="w-100 d-block"
                        alt="Third slide"
                    />
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <<div
            class="container center"
        >
            <a
                name=""
                id=""
                class="btn btn-primary"
                href="insert.php"
                role="button"
                >Add Book</a
            >
            
        </div>
        
        
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>