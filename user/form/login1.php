<?php
$name=$_POST['name'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root','','ecommerce');
$result=mysqli_query($con,"SELECT * FROM `tbluser` WHERE (username='$name' OR email='$name') AND password='$password'");
        session_start();
        if(mysqli_num_rows($result)){
                //session ke andhar jo naam miane likha hai wah koi bhi naam hooo sakta hai
                
                $_SESSION['user']=$name;
                echo"
                                        <script>
                                        alert('Successfully Login');
                                        window.location.href='../index.php';
                                        </script>
                ";
        }
        else{
                echo"
                <script>
                alert('Incorrect Password/username!');
                window.location.href='login.php';
                </script>
";
        }
?>