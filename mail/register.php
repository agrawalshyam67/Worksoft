<?php
// Check for empty fields
/*if(empty($_POST['user'])      ||
   empty($_POST['pass']) )

   //!filter_var($_POST['pass'],FILTER_VALIDATE_EMAIL)
   {
   echo "No arguments Provided!";
   return false;
   }
*/
$mno =  $_POST['imkt'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
//$email = $_POST['email'];
$dpt = $_POST['dept'];
$course = $_POST['course'];
$disc = $_POST['disc'];
$user = $_POST['uname'];
$pass = "Test1234";
$status = "Hello how are you ?";

 
//Insert in database
$servername = "localhost";
$database = "u913148827_murit";
$username = "u913148827_murit";
$password = "murit29";


// Create connection

$conn = new mysqli($servername, $username, $password, $database);



// Check connection 

if (!$conn) { 

    die("Connection failed: " . mysqli_connect_error());

}
else {
	echo "Connected Successfully";
}

$sql = "INSERT INTO `Register`(`MatriNum`, `FirstName`, `LastName`, `Department`, `Course`, `Discipline`, `username`, `password`) VALUES ('$mno','$fname','$lname','$dpt','$course','$disc','$user','$pass')";


//$sql="UPDATE Students SET `CurrentStatus`= 'Login again' WHERE  FirstName = '$uname'";


//mysql_select_db("u913148827_murit", $con);



 

if ($conn->query($sql)===TRUE)

  {

  echo "You are registered Successfully";

  }

else {
	echo "errror";
}


mysqli_close($conn);


?>