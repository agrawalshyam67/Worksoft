<?php
session_start();
include('session.php');
$uname = $_SESSION['login_user'] ;

//echo $uname;
//echo "Hello";


/*
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

$sql = "UPDATE Students SET `CurrentStatus`= 'We are done' WHERE  FirstName = 'iop'";


if ($conn->query($sql)===TRUE)

  {

  echo "";

  }

else {
	echo "";
}


mysqli_close($conn);
*/
   
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exam Register</title>
        <meta name="description" content="camunda">   
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
    body{ font-family: "Times New Roman", Times, serif;
                font-size: 30px;
                color: SlateBlue;
                font-weight: bold;
             }
        .status { font-size: 50px; }
    </style>
    </head>
     
    
    
    
    
    <body>

        <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">Exam Registration</span>
        </nav>
        <h2>  Welcome <?php echo $uname; ?> </h2>

        <div class="container-fluid">

            <div class="row">
                <div class="col-12" align="center">
                    <button class="btn btn-primary" type="button" id="b1"><strong>Current Status !</strong></button>        
                </div>
            </div>

            <div class="row">
                <div class="col-12 status" align="center">
                    <br><div id="demo"></div><br>
                </div>
            </div>
   
               
               
            
    
            
        </div>    
   <script>    
 
            
         window.onload = function()
        {
                var processID;
                document.getElementById("b1").addEventListener('click', UserAction); 
                
                
                
            function UserAction() 
            {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function()
                {
                    if(this.readyState==4 && this.status==200)
                    {    
                         
                        //document.getElementById("demo").innerHTML = this.responseText;
                        var result = JSON.parse(this.responseText);
                        console.log(result);
                        
                       
                       
                       if(result === undefined || result.length == 0)
                        {
                            
                            document.getElementById("demo").innerHTML = "No Process Exists";
                        }
                        else
                        {
                            
                            document.getElementById("demo").innerHTML = result[0].name
                            processID = result[0].id;
                        }
                    }  
                }
                
                xhttp.open("GET", "http://145.14.157.100:8080/engine-rest/task?processDefinitionKey=Exam", true);
                xhttp.send();
                }  
                
                            
            
                
        }
            
                    </script>
        
    </body>
    
</html>