<?php
session_start();
if(strcmp($_SESSION["type"],'Admin')!=0){
    header( 'Location: ./index.php');
}
?>
<?php require 'Header.php'; ?>
<!--Main layout-->
<main>
    <div id="" class="container-fluid text-center">
        <!--Card-->
        <div class="card card-cascade wider reverse my-4 pb-5">
            <!--Card content-->
            <div class="card-body text-center wow fadeIn" data-wow-delay="0.2s">
                <!--Title-->
                <h4 class="card-title">
                    <strong>Welcome <?php echo $_SESSION["User"];?> </strong>
                </h4>
            </div>
        </div>
    </div>
</main>
<?php require 'Footer.php'; ?>