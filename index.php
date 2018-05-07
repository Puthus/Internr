<!DOCTYPE html>
<?php
    session_start();
    function check($x){
        switch ($x)
        {
            case "Admin":
                header( 'Location: ./Admin.php');
                break;
            case "Teacher":
                header( 'Location: ./Teacher.php');
                break;
            case "Student":
                header( 'Location: ./Student.php');
                break;
        }
    }
        if(isset($_SESSION["type"])){
            check($_SESSION["type"]);
        }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intern</title>
    <link href="css/Login/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" />
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />
</head>

<body class="text-center">
    <div class="jumbotron">
        <form class="form-signin" action="login_process.php" method="POST">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="user" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <br/>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="Password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
    </div>
    <!-- Scripting area -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js" /></script>
</body>

</html>