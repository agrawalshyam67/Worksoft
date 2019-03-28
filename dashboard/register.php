<?php
// Check for empty fields
if(empty($_POST['imkt'])      ||
   empty($_POST['fname'])   ||
   empty($_POST['lname'])   ||
   empty($_POST['dept'])     ||
   empty($_POST['email'])  ||
   empty($_POST['regUser'])  ||
   empty($_POST['regPass']) )

   //!filter_var($_POST['pass'],FILTER_VALIDATE_EMAIL)
   {
   echo "No arguments Provided!";
   return false;
   }

$mno =  $_POST['imkt'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$dpt = $_POST['dept'];
$user = $_POST['regUser'];
$pass = $_POST['regPass'];
$prName = "demo";
$prPass = "demo";
$status = "";
$status2 = "";
$status3 = "";
$status4 = "";

 
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

$sql = "INSERT INTO `Register`(`MatriNum`, `FirstName`, `LastName`, `Department`, `email` , `username`, `password`) VALUES ('$mno','$fname','$lname','$dpt','$email','$user','$pass')";


$sql1 = "INSERT INTO `Students`(`password`, `FirstName`, `ThesisStatus`,`ExamStatus`,`SubjectEnroll`,`Library`) VALUES ('$pass','$user','$status','$status2','$status3','$status4')";


$sql2 = "INSERT INTO `Professor`(`pass`,`profName`,`StudentName`, `ThesisStatus`, `ExamStatus`,`SubjectStatus`,`LibraryStatus`) VALUES ('$prPass','$prName','$user','$status','$status2','$status3','$status4')";
//$sql="UPDATE Students SET `CurrentStatus`= 'Login again' WHERE  FirstName = '$uname'";


//mysql_select_db("u913148827_murit", $con);



 

if ($conn->query($sql)===TRUE)

  {

  echo "You are registered Successfully";

  }

else {
	echo "";
}

if ($conn->query($sql1)===TRUE)

  {

  echo "";

  }

else {
	echo "";
}



if ($conn->query($sql2)===TRUE)

  {

  echo "";

  }

else {
	echo "";
}

mysqli_close($conn);


?>