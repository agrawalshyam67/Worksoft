<?php
session_start();
include('session.php');
//$uname = $_SESSION['login_user'] ;

echo $uname;
echo "Hello";


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
        <title>Thesis Workflow</title>
        <meta name="description" content="camunda">   
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
    body {   color: darkblue; font-family: sans-serif;  }  a {   color: black; } a:visited {   color: darkblue; } 
    .content1{max-width: 500px;
  margin: auto;}
    </style>
    </head>
     
    
    
    
    
    <body>

        <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">Thesis Workflow</span>
        </nav>
        <div class="content1">
        <H1 align ="center"><font size="8"> Welcome User</font></H1>
        
           
          
        <form action = "" method = "post">
	    <input type="text" style="display:none" id="hiddenVal" />
            <button class="btn btn-primary" type="button" id="b1"><strong>Current Status !</strong></button>
            <br>    
            <div id="demo"></div><br>
                
            
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            
            <div class="form-group"> 
                <div class="col-xs-4">
                    
                    <textarea  rows="3" cols="35" id="comment"></textarea>
                </div>
            </div>
            <button class="btn btn-success" id="completeProcess">Submit</button>
            
        </form>
            
        </div>  
        
    <script>    
    
        var UName;
            
         window.onload = function()
        {
                var processID;
                document.getElementById("b1").addEventListener('click', UserAction); 
                document.getElementById("completeProcess").addEventListener('click', submitProcess);
            
            function submitProcess()
            {
                var data = JSON.stringify({"variables" : {"date" : {"value": "invalid"} }});
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function()
                {
                    if(this.readyState==4 && this.status==200)
                    {    
                        console.log(this.responseText); 
                        //document.getElementById("demo").innerHTML = this.responseText;
                        //displayProcess(this.responseText);
                       // disableBtn();
                       console.log('Process Completed');
                    }  
                }
                var url = 'http://145.14.157.100:8080/engine-rest/task/' + processID +'/complete';
                xhttp.open('POST', 'url', true);
                xhttp.setRequestHeader("Content-type", "application/json");
                xhttp.send(data);
            }
                
                
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
                        processID = result[0].id;
                       
                        console.log(processID);
                        
                       displayProcess(result);
                        //enableBtn();
                    }  
                }
                //var url = 'http://145.14.157.100:8080/engine-rest/task?processDefinitionKey=ExamRegister';
                xhttp.open("GET", "http://145.14.157.100:8080/engine-rest/task?processDefinitionKey=Exam", true);
                xhttp.send();
                }  
                
                            
            function displayProcess(result)
            {
                var data1="";
                
                var text1 = 'http://145.14.157.100:8080/engine-rest/task?processDefinitionKey=ExamRegister';
                
                //var result1 = JSON.parse(result);
                //console.log(result1);
                //document.getElementById("demo").innerHTML = result1;
                
                //console.log(result1.length);
                
                data1 += "<br>" + "You are On Step 1: "+ result[0].name + "<br>";
                UName = result[0].name;
		
                //console.log(UName);
                
                document.getElementById("demo").innerHTML = data1;
		        document.getElementById("hiddenVal").value = UName;
		        var update = document.getElementById("hiddenVal").value
		        var dataInD B = "dbData="+update;
		        
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function()
                { if(this.readyState == 4 && this.status == 200)
                    {
                        
                        console.log("hiiiiiii");
                       
                        //console.log(this.responseText);
                        
                        //window.location = "Camunda.html";
                      
                    }
                }

                xhttp.open('POST', 'Update.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(dataInDB); 
            }  
            
            
            function disableBtn() 
            {
                document.getElementById("completeProcess").disabled = true;
            }

            function enableBtn() 
            {
                document.getElementById("b1").disabled = false;
            }
                
        }
            
                    </script>
        
    </body>
    
</html>