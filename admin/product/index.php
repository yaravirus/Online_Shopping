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
        <!-- <?php include 'header.php'; ?> -->
        <!--content of add of product category -->
        <div class="container">
                <div class="row">
                        <div class="col-md-6 m-auto shadow border border-success mt-3 rounded">


                                <form action="insert.php" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                                <p class="text-center fw-bold fs-3 text-success">Product Detail:</p>
                                                <div class="mb-3">
                                                        <label class="form-label">Product Name:</label>
                                                        <input name="pname" type="text" class="form-control"
                                                                placeholder="Enter Product Name:">
                                                </div>
                                                <div class="mb-3">
                                                        <label class="form-label">Product Price:</label>
                                                        <input name="pprice" type="text" class="form-control"
                                                                placeholder="Enter Product Price:">
                                                </div>
                                                <div class="mb-3">
                                                        <label class="form-label">Add Product Image:</label>
                                                        <input name="pimage" type="file" class="form-control"
                                                                placeholder="Add Product Image:">
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
                                                <button name="submit"
                                                        class="bg-success fs-4 fw-bold my-3 form-control text-white ">Upload</button>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>

        <!--fetch data-->
        <div class="container">
                <div class="row">
                        <div class="col-md-6 m-auto ">

                                <!--  <th>id</th> <td>$row[id]</td>-->
                                <table class="table shadow table-hover border my-5 rounded">
                                        <thead class="bg-success text-white fs-5 font-monospace text-center">
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Category</th>
                                                <th>Delete</th>
                                                <th>Update</th>
                                        </thead > 
                                        <tbody class="text-center">
                                                <?php
                                include 'config.php';
                                $record=mysqli_query($con,"SELECT * FROM `tblproduct`");
                                while($row=mysqli_fetch_array($record)){  //jitne bhi table ke column hai wah row main save joojayenge
                                echo"
                                        <tr>
                                        <td>$row[id]</td>
                                        <td>$row[pname]</td>
                                        <td>$row[pprice]</td>
                                        <td> <img src='$row[pimage]' height='90px' width='90px'> </td>
                                        <td>$row[pcategory]</td>
                                        <td><a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a></td>
                                        <td><a href='update.php?id=$row[id]' class='btn btn-success'>Update</a></td>
                                </tr> "; 
                                }
                        ?>
                                        </tbody>
                                </table>
                        </div>
                </div>
        </div>
</body>

</html>