<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <!--bootstrap cdn-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                crossorigin="anonymous">
        <!--fontawsome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
                integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php include 'header.php'?>
</head>

<body>
        <div class="container-fluid">
                <div class="col-md-12">
                        <div class="row">

                                <h1 class="text-success font-monospace text-center my-3">Laptop</h1>
                                <?php 
                include 'config.php';
                $record= mysqli_query($con,"select * from tblproduct ");
                while($row=mysqli_fetch_array($record)){
                        $check_page=$row['pcategory'];
                        if($check_page==='Laptop'){
                        echo "
                        <div class='col-md-6 col-lg-4'>
                        <form action='insertcart.php' method='POST'> 
                        <div class='card m-auto ' style='width: 18rem;'>
                        <img src='../admin/product/$row[pimage]' class='card-img-top m-auto' style='width:250px;height:19rem;'>
                        <div class='card-body text-center'>
                                <h5 class='card-title text-success fs-4 fw-bold'>$row[pname]</h5>
                                <p class='card-text text-success fs-4 fw-bold'>₹ $row[pprice]</p>
                                <input type='hidden' name='pname' value='$row[pname]'>
                                <input type='hidden' name='pprice' value='$row[pprice]'>
                                <input type='number' name='pquantity' value='min='1' max='20' placeholder='Quantity'><br><br> 
                                <input type='submit' name='addcart' class='btn btn-success text-white w-100' value='Add To Cart'>               
                                
                        </div>
                </div>
                </form>
                </div>
                ";
                }
        }
        ?>
                        </div>
                </div>
        </div>
</body>

</html>