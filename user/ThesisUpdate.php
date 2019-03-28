<?php
session_start();
$uname = $_SESSION['login_user'] ;


echo "test";
echo $uname;

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
	echo "";
}

//$update = "wrdsrwdxrwdw";

$update = $_POST['dbData'];

$sql = "UPDATE Students SET `ThesisStatus`= '$update' WHERE  FirstName = '$uname'";


 

if ($conn->query($sql)===TRUE)

  {

  echo "Query Updated";

  }

else {
	echo "";
}


mysqli_close($conn);


?>