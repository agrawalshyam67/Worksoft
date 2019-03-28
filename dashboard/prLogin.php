<?php

session_start();

// Check for empty fields
if(empty($_POST['user'])      ||
   empty($_POST['pass']) )

   //!filter_var($_POST['pass'],FILTER_VALIDATE_EMAIL)
   {
   echo "No arguments Provided!";
   return true;
   }
   
$uname = $_POST['user'];
$pass = $_POST['pass'];
//$update = $_POST['dbData'];



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

$sql = "SELECT * FROM Professor WHERE profName = '$uname' and pass = '$pass'";
//$sql1 = "SELECT * FROM Professor WHERE profName = 'demo' and pass = 'demo'";

$result = mysqli_query($conn,$sql);
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['active'];
      
$count = mysqli_num_rows($result);


if($count > 1) {
    //$sql="UPDATE Students SET `CurrentStatus`= 'Just a test' WHERE  FirstName = '$uname' and StudentID = '$pass'";
    
    
    //session_register("username");
    
    $_SESSION['login_user'] = $uname;
    $_SESSION['login_pass'] = $pass;
    $_SESSION['success'] = "You are now logged in";
    
    //Create the link to the main page
    echo "Hello Professor <br>";
    echo "<body>Click here to see status of Students</body><br>";
    echo "<a href='prDashboard.php'> SEE STATUS </a>";
    /*if (session_start()){
       header("Location:index.php") ;
    }*/
    

   
}
else {
    echo "Invalid Credentials";
}
//$sql="UPDATE Students SET `CurrentStatus`= 'Login again' WHERE  FirstName = '$uname'";

//SELECT s.CurrentStatus FROM `Students` s, `Register` r WHERE s.StudentID = r.MatriNum and r.lastName = "Vishnoi"




 

if ($conn->query($sql)===TRUE)

  {

  echo "";

  }

else {
	echo "";
}


mysqli_close($conn);


?>