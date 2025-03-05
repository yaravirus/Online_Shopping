<?php
        include 'config.php';
        if(isset($_POST['update'])){
                $id=$_POST['id'];
                $product_name=$_POST['pname'];
                $product_price=$_POST['pprice'];
                $product_image=$_FILES['pimage'];
                $image_loc=$_FILES['pimage']['tmp_name'];
                $image_name=$_FILES['pimage']['name'];
                $img_des="uploadimage/".$image_name;
                move_uploaded_file($image_loc,"uploadimage/".$image_name);
                $product_category=$_POST['pcategory'];
                                                // insert product
                $query="UPDATE `tblproduct` SET `pname`='$product_name',`pprice`=' $product_price',`pimage`='$img_des' WHERE id=$id ";
                mysqli_query($con,$query);
        
                header("location:index.php");
        }
?>