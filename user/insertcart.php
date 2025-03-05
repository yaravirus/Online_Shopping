<?php
session_start();
// session_destroy();
// if(isset($_SESSION['cart'])){
//         $_SESSION['cart']=array();
// }
// $product_name=$_POST['pname'];
// $product_price=$_POST['pprice'];
// $product_quantity=$_POST['pquantity'];
        if(isset($_SESSION['user'])){


                if(isset($_POST['addcart'])){  //isset kaam kareaga tab jab button pe click hoga
                        $product_name=$_POST['pname'];
                        $product_price=$_POST['pprice'];
                        $product_quantity=$_POST['pquantity'];
                        $check_product=!empty($_SESSION['cart']) ? array_column($_SESSION['cart'],'productname') : array();//unique banane ke liye ,jab  hamne cart ki quantity change kara toh update hoga uske liye.
                        //agar array column main in array check karega ki jo hamne product liya hai wah 
                        //hai ki nhi agar hai toh if wala statement nhi toh else wala statement
                        if(in_array($product_name,$check_product)){
                                echo"
                                        <script>
                                        alert('product already added');
                                        window.location.href = 'index.php';
                                        </script>
                                
                                ";
                        }
                        else{
                                $_SESSION['cart'][]=array('productname' => $product_name,//yeh kaam araha hai $_session[cart] show karne ke liye data add in cart wala in cart main     
                                                'productprice' => $product_price,
                                                'productquantity' => $product_quantity);
                                                // print_r( $_SESSION['cart']);
                                                header('location:viewcart.php');
                        }
                }

                //remove item

                if(isset($_POST['remove'])){
                        foreach($_SESSION['cart'] as $key => $value){
                        if($value['productname'] === $_POST['item']){
                                //item main jo product name likha hai wah jab match hoga toh 
                                //unset ke throw delete hoga
                                unset($_SESSION['cart'][$key]);
                                //unset delete karta hai row
                                $_SESSION['cart']=array_values($_SESSION['cart']);
                                //array value rearrange karta hai jab 1 row delete karege toh
                                header('location:viewcart.php');
                        }   
                        }
                }

                //update product

                if(isset($_POST['update'])){
                        foreach($_SESSION['cart'] as $key => $value){
                        if($value['productname'] === $_POST['item']){
                                $_SESSION['cart'][$key]['productname']=$_POST['pname'];
                                $_SESSION['cart'][$key]['productprice']=$_POST['pprice'];
                                $_SESSION['cart'][$key]['productquantity']=$_POST['pquantity'];
                                header('location:viewcart.php');
                        }   
                        }
                }
        }
        else{
                header("location:form/login.php");
        }
?>