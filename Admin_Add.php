<?php
session_start();
if(strcmp($_SESSION["type"],'Admin')!=0){
    header( 'Location: ./index.php');
}
?>
<?php require 'Header.php'; ?>
<?php require 'list_form.php'; ?>
<!--Main layout-->
<main>
    <div id="" class="container-fluid text-center">
        <!--Card-->
        <div class="card card-cascade wider reverse my-4 pb-5">
            <!--Card content-->
            <div class="card-body text-center wow fadeIn" data-wow-delay="0.2s">
                <?php show_Fill_form("Admin") ?>
                
                <!-- Default form contact -->
                <form>
                    <p class="h4 text-center mb-4">Write to us</p>

                    <!-- Default input name -->
                    <label for="defaultFormContactNameEx" class="grey-text">Your name</label>
                    <input type="text" id="defaultFormContactNameEx" class="form-control">
                    
                    <br>

                    <!-- Default input email -->
                    <label for="defaultFormContactEmailEx" class="grey-text">Your email</label>
                    <input type="email" id="defaultFormContactEmailEx" class="form-control">

                    <br>

                    <!-- Default input subject -->
                    <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
                    <input type="text" id="defaultFormContactSubjectEx" class="form-control">

                    <br>
                    
                    <!-- Default textarea message -->
                    <label for="defaultFormContactMessageEx" class="grey-text">Your message</label>
                    <textarea type="text" id="defaultFormContactMessageEx" class="form-control" rows="3"></textarea>

                    <div class="text-center mt-4">
                        <button class="btn btn-outline-warning" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
                    </div>
                </form>
                <!-- Default form contact -->
                
            </div>
        </div>
    </div>
</main>
<?php require 'Footer.php'; ?>