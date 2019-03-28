<?php
// Check for empty fields
if(empty($_POST['fname'])   ||
   empty($_POST['email'])   ||
   empty($_POST['phone']))

   //!filter_var($_POST['pass'],FILTER_VALIDATE_EMAIL)
   {
   echo "No arguments Provided!";
   return false;
   }


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$team = $_POST['team'];
$email = $_POST['email'];
$phone = $_POST['phone'];

 
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

$sql = "SELECT * FROM Billard WHERE First_Player = '$fname' and Second_player = '$lname' and Team_Name = '$team'";
//$sql1 = "SELECT * FROM Professor WHERE profName = 'demo' and pass = 'demo'";

$result = mysqli_query($conn,$sql);
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['active'];
      
$count = mysqli_num_rows($result);


if($count == 0) {
    $sql = "INSERT INTO `Billard`(`First_player`, `Second_player`, `Team_Name`, `email`, `Phone`) VALUES ('$fname','$lname','$team','$email','$phone')";
  
}
else {
    
    echo "<body>Entry Alreay Exists,  Click here to register with different players name and team name</body><br>";
    echo "<a href='billardReg.html'> REGISTER AGAIN </a>";
}




//mysql_select_db("u913148827_murit", $con);


if ($conn->query($sql)===TRUE)

  {

  echo "You are registered successfully for GOLDEN BREAK";

  }

else {
	echo "";
}


mysqli_close($conn);


?>