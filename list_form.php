<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="Intern";
$GLOBALS['conn'] = new mysqli($servername, $username, $password,$dbname);


function show_list($tablename,$who){
	$conn = $GLOBALS['conn'];
	$sql = "select * from ".$tablename." where type = '".$who."'" ;
	$result = $conn->query($sql);
	echo'<h4 class="card-title"><strong>'.strtoupper($who).' Table</strong></h4>';
	echo '<table class="table table-hover"><thead><tr>';
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
	echo '</tbody></table>';
}

function show_Fill_form($who){
	$conn = $GLOBALS['conn'];
	$sql = "select * from Account";
	$result = $conn->query($sql);
	for ($i=0; $i < $conn->field_count; $i++) {
		$meta = mysqli_fetch_field_direct($result,$i);
		echo '<th>' . strtoupper($meta->name) .'</th>';
	}
}
?>