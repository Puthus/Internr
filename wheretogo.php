<?php
if(isset($_GET['type']))
{
	$x = $_GET['type'];
	switch ($x)
    {
        case "Admin":
            header( 'Location: ./Account_add.php?type=Admin');
            break;
        case "Teacher":
            header( 'Location: ./Account_add.php?type=Teacher');
            break;
        case "Student":
            header( 'Location: ./Account_add.php?type=Student');
            break;
    }
}else {
	header( 'Location: Admin.php');
}
?>