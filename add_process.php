<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="Intern";
$conn = new mysqli($servername, $username, $password,$dbname);

if(isset($_POST['submit'])) {

	$who =$_POST['type'];

	$sql = "SELECT * from Account";
	$result = $conn->query($sql);
	$values = array();
	$values[4]=$who;
	for ($i=1; $i < $conn->field_count; $i++) {
		$values[$i]=$_POST[mysqli_fetch_field_direct($result,$i)->name];
		echo '$values['.$i.']='.$_POST[mysqli_fetch_field_direct($result,$i)->name].'</br>';
	}

	$sql ="INSERT INTO `intern`.`account` (`username`,`password`,`email`, `type`) VALUES ('".$values[1]."','".$values[2]."','".$values[3]."','".$values[4]."');";

	//$sql ="INSERT INTO `intern`.`account` (`username`, `password`, `email`, `type`) VALUES ('Annou', '142753869', 'Annou@gmail.com', 'Admin');";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	header( 'Location: Admin.php');
}else
{
	echo 'Post not sent';
}
