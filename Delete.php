<?php
session_start();
if(strcmp($_SESSION["type"],'Admin')!=0){
	header( 'Location: ./index.php');
}
?>
<?php require 'Header.php'; ?>
<style type="text/css">
.table-wrapper {
	display: block;
	max-height: 300px;
	overflow-y: auto;
	-ms-overflow-style: -ms-autohiding-scrollbar;
}
<?php require 'list_form.php'; ?>
</style>
<!--Main layout-->
<main>
	<div id="" class="container-fluid text-center">
		<!--Card-->
		<div class="card card-cascade wider reverse my-4 pb-5">
			<!--Card content-->
			<div class="card-body text-center wow fadeIn" data-wow-delay="0.2s">
				<h4 class="card-title">
					<strong>Delete a  <?php 
					if(isset($_GET['type'])) {
						echo $_GET['type'];
					} ?> </strong>
				</h4>
				 <?php show_Delete_form("account","Admin") ?>
			</div>
		</div>
	</div>
</main>
<?php require 'Footer.php'; ?>