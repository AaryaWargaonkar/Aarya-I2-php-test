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
            <!-- place navbar here -->
        </header>
        <main>
            <h1 style="text-align:center">Register</h1>
            <div
        class="container text-center border shadow col-6 p-3"
    >
        <form method="post">
         <div class="form-floating mb-3">
            <input
                type="text"
                class="form-control"
                name="fullname"
                id="formId1"
                placeholder=""
            />
            <label for="formId1">Fullname</label>
         </div>
         <div class="form-floating mb-3">
            <input
                type="text"
                class="form-control"
                name="name"
                id="formId1"
                placeholder=""
            />
            <label for="formId1">User Name</label>
         </div>
         
         <div class="form-floating mb-3">
            <input
                type="text"
                class="form-control"
                name="email"
                id="formId1"
                placeholder=""
            />
            <label for="formId1">email</label>
         </div>
         <div class="form-floating mb-3">
            <input
                type="text"
                class="form-control"
                name="phone"
                id="formId1"
                placeholder=""
            />
            <label for="formId1">Phone number</label>
         </div>
         <div class="form-floating mb-3">
            <input
                type="text"
                class="form-control"
                name="password"
                id="formId1"
                placeholder=""
            />
            <label for="formId1">Password</label>
         </div>
         
         <button
            type="submit"
            class="btn btn-primary"
         >
            Submit
         </button><br><br>
         
         <b>Already registed?</b><a href="login.php">login</a>
         
         
        </form>
    </div>
    
        </main>
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
<?php
include "db.php";
if($_SERVER['REQUEST_METHOD']==="POST"){
    $fullname=$_POST["fullname"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
    

    $sql=$conn->prepare("insert into users1 values (?,?,?,?,?)");
    $sql->bind_param('sssss',$fullname,$name,$email,$phone,$password);
    if($sql->execute()){
        header("location:login.php");
    }
    else{
        echo "invalid";
    }
}




?>