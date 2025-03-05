<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin home-page</title>

        <!--bootstrap cdn-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                crossorigin="anonymous">

        <!--fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
                integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
session_start();
if(!$_SESSION['admin']){
        header("location:form/login.php");
}
?>
<body>
        <nav class="navbar navbar-light bg-white">
                <div class="container-fluid text-success">
                        <a class="navbar-brand text-black font-monospace">
                                <h1>MyStore</h1>
                        </a>
                        <span>
                                <i class="fa-solid fa-user-tie text-success "></i>
                                Hello,<?php echo $_SESSION['admin'];
                                                echo "|";
                                        ?>
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <a href="form/logout.php" class="text-decoration-none text-success font-monospace">Logout</a> |
                                <a href="../user/index.php" class="text-decoration-none text-success font-monospace">Userpanel</a>
                        </span>
                </div>
        </nav>

        <div>
                <h2 class="text-center font-monospace">Dashboard</h2>
        </div>
        <div class="col-md-6 bg-success text-center m-auto">
                <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5 font-monospace">Add Post</a>
                <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5 font-monospace">Users</a>
        </div>
</body>

</html>