<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>viewcart</title>
</head>

<body>
<?php include 'header.php'?>
        <div class="container">
                <div class="row">
                        <div class="col-lg-12 text-center bg-light mb-5 rounded">
                                <h1 class="text-warning">My Cart</h1>
                        </div>
                </div>
        </div>

        <div class="container-fluid">
                <div class="row justify-content-around">
                        <div class="col-sm-12 col-md-6 col-lg-9">
                                <table class="table table-bordered  text-center">
                                        <thead class="bg-success text-white fs-5">
                                                <th>Serial No</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Product Quantity</th>
                                                <th>Total Price</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                        </thead>
                                        <tbody>
                                                <?php
                                                        // session_start();
                                                       $ptotal = 0;
                                                       $total = 0; 
                                                       $i = 0;
                                                        if(isset($_SESSION['cart'])){
                                                                foreach($_SESSION['cart'] as $key => $value){
                                                                        $ptotal=$value['productprice'] * $value['productquantity'];
                                                                        $total +=$value['productprice'] * $value['productquantity'];
                                                                        $i=$key+1;
                                                                echo"
                                                                        <form action='insertcart.php' method='POST'> 
                                                                        <tr>
                                                                        <td>$i</td>
                                                                        <td><input type='hidden' name='pname' value='$value[productname]'>$value[productname]</td>
                                                                        <td><input type='hidden' name='pprice' value='$value[productprice]'>$value[productprice]</td>
                                                                        <td><input type='text' name='pquantity' value='$value[productquantity]'></td>
                                                                        <td>$ptotal</td>
                                                                        <td><button name='update' type='submit' class='bg-success rounded'>Update</button></td>
                                                                        <td><button name='remove' type='submit' class='bg-danger rounded'>Delete</button></td>
                                                                        <td><input type='hidden' name='item' value='$value[productname]'></td>
                                                                        </tr>
                                                                        </form>
                                                                        ";
                                                                }
                                                        }                                
                                                
                                                ?>
                                        </tbody>
                                </table>
                        </div>
                        <div class="col-lg-3 text-center">
                                <h3>TOTAL</h3>
                                <h1 class="bg-danger text-white"><?php echo number_format($total,2) ?></h1>
                        </div>
                </div>
        </div>

</body>

</html>