<?php
        $con=mysqli_connect('localhost','root','','ecommerce');
        if(isset($_POST['submit'])){
                $name=$_POST['name'];
                $email=$_POST['email'];
                $number=$_POST['number'];
                $password=$_POST['password'];
       
                //duplicate email and username check karenge ki
                // jo user ne likha hai wah database main hai ki nhi
                //agar hai toh alert print karenge 
                //else apka data save hoo gya hai
                $dup_email=mysqli_query($con,"SELECT * FROM `tbluser` WHERE email = '$email'");
                $dup_username=mysqli_query($con,"SELECT * FROM `tbluser` WHERE username = '$name'");
                if(mysqli_num_rows($dup_email)){
                        echo"
                                <script>
                                alert('this email is already taken');
                                window.location.href='register.php';
                                </script>
                        ";
                }
                if(mysqli_num_rows($dup_username)){
                        echo"
                                <script>
                                alert('this username is already taken');
                                window.location.href='register.php';
                                </script>
                        ";
                }
                else{
                        mysqli_query($con,"INSERT INTO `tbluser`(`username`, `email`, `number`, `password`) VALUES ('$name','$email','$number','$password')");
                        echo"
                        <script>
                                alert('Register Successfully');
                                window.location.href='login.php';
                        </script>
                        ";
                }
        }
?>