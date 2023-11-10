<?php 
session_start();
session_destroy();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>PPS Book Online</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="../../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../assets/css/signin.css" rel="stylesheet">


</head>

<body class="text-center">

    <main class="form-signin">
        <form action="../../controller/admin_login/c_login.php" class="row g-3 needs-validation" novalidate method="post">


            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email_admin" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    กรุณากรอกอีเมล์
                </div>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password_admin" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    กรุณากรอกรหัสผ่าน
                </div>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Forgot Password
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
           
        </form>
    </main>
    <script src="../../assets/js/varidate.js"></script>
    <script src="../../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>