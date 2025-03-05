<!-- <?php echo $pimage;?> -->
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product-page</title>

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
        <!--content of add of product category -->
        <?php
        include 'config.php';
        $id=$_GET['id'];
        $query="SELECT * FROM `tblproduct` WHERE id=$id";
        $record=mysqli_query($con,$query);
        $data=mysqli_fetch_array($record);
        ?>
        <div class="container">
                <div class="row">
                        <div class="col-md-6 m-auto shadow border border-success mt-3 rounded">


                                <form action="update1.php" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                                <p class="text-center fw-bold fs-3 text-success">Update Product:</p>
                                                <div class="mb-3">
                                                        <label class="form-label">Product Name:</label>
                                                        <input name="pname" type="text" class="form-control"
                                                                placeholder="Enter Product Name:" value="<?php echo $data['pname'];?>">
                                                </div>
                                                <div class="mb-3">
                                                        <label class="form-label">Product Price:</label>
                                                        <input name="pprice" type="text" class="form-control"
                                                                placeholder="Enter Product Price:" value="<?php echo $data['pprice'];?>">
                                                </div>
                                                <div class="mb-3">
                                                        <label class="form-label">Add Product Image:</label>
                                                        <input name="pimage" type="file" class="form-control"
                                                                placeholder="Add Product Image:">
                                                        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                                                        <img src="<?php echo $data['pimage'];?>" alt="" style="height: 100px;">
                                                        
                                                        
                                                </div>
                                                <div class="mb-3">
                                                        <label>Select Page Category</label>
                                                        <select class="form-select" aria-label="form-select"
                                                                name="pcategory">
                                                                <option value="Home">Home</option>
                                                                <option value="Laptop">Laptop</option>
                                                                <option value="Bag">Bag</option>
                                                                <option value="Mobile">Mobile</option>
                                                        </select>
                                                </div>
                                                <button name="update" type="submit"
                                                        class="bg-success fs-4 fw-bold my-3 form-control text-white ">Update</button>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>
       
        </body>

</html>