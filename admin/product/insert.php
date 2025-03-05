<?php
                // isset use hota hai jab click karenge submit saare data ko insert karenge server ya sql database main
if(isset($_POST['submit'])){
                        //connect karenge pahale ecomerce database se tab insert karegnge data
        include 'config.php';
        $product_name=$_POST['pname'];
        $product_price=$_POST['pprice'];
        $product_image=$_FILES['pimage'];
        $image_loc=$_FILES['pimage']['tmp_name'];
        $image_name=$_FILES['pimage']['name'];
        $img_des="uploadimage/".$image_name;
        move_uploaded_file($image_loc,"uploadimage/".$image_name);
        $product_category=$_POST['pcategory'];
                                        // insert product

        mysqli_query($con,"INSERT INTO `tblproduct`( `pname`, `pprice`, `pimage`, `pcategory`) VALUES ('$product_name','$product_price','$img_des','$product_category')");

        header("location:index.php");

}
?>



