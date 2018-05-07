<?php
session_start();
//connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname="Intern";
//get the value
$user =$_POST['user'];
$pass=$_POST['Password'];
// prevent mysql injection
$user=stripcslashes($user);
$pass=stripcslashes($pass);
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
try{
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    }
    //echo "Connected successfully <br>";
    $sql = "select email,password,username,type from account";
    $result = $conn->query($sql);
    if ($result->num_rows >= 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "email: " . $row["email"]. " - Name: " . $row["password"]. "<br>";
        	if (strtolower($row["email"])==strtolower($user))
            {
                if($row["password"]==$pass) {
                    //echo "Login success Welcome ".$row["email"];
                    $_SESSION["User"] = $row["username"];
                    $_SESSION["type"] = $row["type"];
                    check($row["type"]);
                    break;
                }
                else
                {
                    echo "failed to login verify your informations";
                }
            }
        }
    }
}catch(exception $e)
{
    echo 'Caught exception: ',  $e->getMessage();
}

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
?>