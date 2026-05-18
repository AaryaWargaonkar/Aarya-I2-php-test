<?php
include "db.php";
session_start();
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql=$conn->prepare("select * from book4 where id=?");
    $sql->bind_param('i',$id);
    $sql->execute();
    $user=$sql->get_result()->fetch_assoc();
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $author = $_POST["auth"];
    $genre = $_POST["genre"];
    $copies = $_POST["copies"];

    $sql = $conn->prepare("update book4 set title=?,auth=?,genre=?,copies=? where id=?");
    $sql->bind_param('sssii', $title, $author, $genre, $copies,$id);
    if ($sql->execute()) {

        header("location:insert.php");

    }

}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
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

                        </form>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <main>
        <div class="container shadow border rounded p-3">
            <form method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="" aria-describedby="helpId"
                        placeholder="" value="<?=$user['title']?>"/>

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Author</label>
                    <input type="text" class="form-control" name="auth" id="" aria-describedby="helpId"
                        placeholder="" value="<?=$user['auth']?>"/>

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Genre</label>
                    <input type="text" class="form-control" name="genre" id="" aria-describedby="helpId"
                        placeholder="" value="<?=$user['genre']?>" />

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Available copies</label>
                    <input type="text" class="form-control" name="copies" id="" aria-describedby="helpId"
                        placeholder="" value="<?=$user['copies']?>" />

                </div>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>




            </form>
        </div>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
