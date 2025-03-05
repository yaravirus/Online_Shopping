<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                crossorigin="anonymous">
</head>
<body class="bg-secondary">
        <!--content of add of product category -->
        <div class="container">
                <div class="row">
                        <div class="col-md-6 login-form rounded shadow m-auto bg-white font-monospace p-3 border border-primary mt-3">


                                <form action="login1.php" method="POST">
                                        <div class="mb-3">
                                                <p class="text-center fw-bold fs-3 text-success">Login</p>
                                                <div class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input name="username" "text" class="form-control"
                                                                placeholder="Enter Name">
                                                </div>
                                                <div class="mb-3">
                                                        <label class="form-label">Password</label>
                                                        <input name="userpassword" type="password" class="form-control"
                                                                placeholder="Enter Password">
                                                </div>
                                                
                                                <button 
                                                        class="bg-success fs-4 fw-bold my-3 form-control text-white ">Login</button>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>
</body>
</html>