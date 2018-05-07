<?php
    session_start();
    $_SESSION["User"] = "";
    $_SESSION["type"] = "";
    header( 'Location: ./admin.php');
?>