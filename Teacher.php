<!DOCTYPE html>
<?php
    session_start();
    if(strcmp($_SESSION["type"],'Teacher')!=0){
            header( 'Location: ./index.php');
        }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intern</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" />
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet" />
    <link href="css/Login.css" rel="stylesheet" />
</head>

<body class="text-center">
        <?php
            $user = $_SESSION["User"];
            echo "<h1> Good job ".$user." you have logged in succesfully</h1>";
        ?>
    <!-- Scripting area -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js" /></script>
    <script type="text/javascript">
        function hamid() {
            alert('waaaa3 drebti 7amid');
        }
    </script>

</body>

</html>