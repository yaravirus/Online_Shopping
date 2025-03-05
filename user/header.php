<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>header</title>
        <!--bootstrap cdn-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                crossorigin="anonymous">
        <!--fontawsome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
                integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
        <?php
                //cart main kitne product use count karke cart ko update karta hai
                $count=0;
                if(isset($_SESSION['cart'])){
                        $count=count($_SESSION['cart']);
                }
        ?>
        <nav class="navbar bg-body-tertiary">
                <div class="container-fluid font-monospace">
                        <a class="navbar-brand">Navbar</a>

                        <div class="d-flex">
                                <a href="index.php" class="text-success text-decoration-none pe-2"><i
                                                class="fa-solid fa-house"></i>Home</a>
                                <a href="viewcart.php" class="text-success text-decoration-none pe-2"><i
                                                class="fa-solid fa-cart-shopping"></i>Cart(<?php echo $count?>)</a>
                                <span class="text-success pe-2">
                                        <i class="fa-solid fa-user"></i>Hello,

                                        <?php
                                                if(isset($_SESSION['user'])){
                                                        echo $_SESSION['user'];
                                                        
                                                        echo " | <a href='form/logout.php' class='text-secondary text-decoration-none pe-2'><i
                                                        class='fa-solid fa-right-to-bracket'></i>Logout</a>
                                                        ";
                                                }
                                                else{
                                                        echo "<a href='form/login.php' class='text-secondary text-decoration-none pe-2'><i
                                                        class='fa-solid fa-right-to-bracket'></i>Login</a>
                                                        ";
                                                       
                                                }
                                        ?>
                                        <a href="../admin/mystore.php" class="text-secondary text-decoration-none pe-2"><i
                                                        class="fa-solid fa-lock"></i>Admin</a>
                                </span>
                                <span></span>

        </nav>
        </div>
        <div class=" sticky-top bg-success font-monospace">
        <ul class="list-unstyled d-flex justify-content-center ">
                <li><a href="laptop.php" class="text-decoration-none text-white fw-bold fs-4 px-5">LAPTOPS</a></li>
                <li><a href="mobile.php" class="text-decoration-none text-white fw-bold fs-4 px-5">MOBILES</a></li>
                <li><a href="bag.php" class="text-decoration-none text-white fw-bold fs-4 px-5">BAGS</a></li>
        </ul>
        </div>
        
</body>

</html>