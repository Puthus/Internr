<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="Intern";
$GLOBALS['conn'] = new mysqli($servername, $username, $password,$dbname);


function show_list($tablename){
	if (isset($_GET['type'])) {
		$who = $_GET['type'];
	}
	
	$conn = $GLOBALS['conn'];
	$sql = "select * from ".$tablename." where type = '".$who."'" ;
	$result = $conn->query($sql);
	echo'<h4 class="card-title"><strong>'.strtoupper($who).' Table</strong></h4>';
	echo '<diV class="table-responsive"><table class="table table-hover "><thead class="mdb-color darken-3"><tr class="text-white">';
	for ($i=0; $i < $conn->field_count; $i++) {
		$meta = mysqli_fetch_field_direct($result,$i);
		echo '<th>' . strtoupper($meta->name) .'</th>';
	}
	echo '</tr></thead><tbody>';
	while ($row = mysqli_fetch_row($result)) {

		echo '<tr><th scope="row">'.$row[0];
		for ($i=1; $i < $conn->field_count; $i++) { 
			echo '<td>'.$row[$i].'</td>';
		}
		echo '</tr>';
	}
	echo '</tbody></table></div>';
}

function show_Fill_form(){
	if(isset($_GET['type']))
	{
		$type = $_GET['type'];

		$conn = $GLOBALS['conn'];
		$sql = "select * from Account";
		$result = $conn->query($sql);
		echo '<form action="add_process.php" method="POST"><p class="h4 text-center mb-4">Add an '.$type.' account</p><input name="type" type="hidden" id="who" value="'.$type.'">';
		for ($i=1; $i < $conn->field_count-1; $i++) {
			echo'<label for="'.mysqli_fetch_field_direct($result,$i)->name.'" class="grey-text">'.strtoupper(mysqli_fetch_field_direct($result,$i)->name).'</label>
			<input required="true" type="text" name="'.mysqli_fetch_field_direct($result,$i)->name.'" class="form-control"><br>';
		}
		echo'<div class="text-center mt-4"><button class="btn btn-outline-success" type="submit" name="submit" value="submit"><strong>Add</strong></button></div></form>'
		;
	}else {
		//-header( 'Location: Admin.php');
	}
}
?>