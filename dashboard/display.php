<?php
session_start();
include('session.php');

$uname = $_SESSION['login_user'] ;
/*session_start();
include('session.php');
echo "Heloooo";
$uname = $_SESSION['login_user'] ;
*/
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
	echo "Connect Successfully";
}

$sql = "SELECT * from Professor";

$records = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>WORKSOFT - Dashboard</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" >
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/datepicker3.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

		
		<!--Theme-->
		<link href="css/theme-default.css" rel="stylesheet">
		
		<!--Custom Font-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
		
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			#status { font-size: 20px; font-weight: bold; color: navy; }
			/*#step1, #step2 , #step3 {  background-color: Cyan; font-weight: bold}*/
		</style>
		
	</head>
	<body>
        <table width="600" border="1" cellpadding="1">
        <tr>
           <th>Name</th>
           <th>Thesis Status</th>
           <th>Exam Status</th>
           <th>Subject Status</th> 
           <th>Library Status</th>
        </tr>
        <?php
        
        while($student = mysqli_fetch_assoc($records)){
            echo "<tr>";
            echo "<td>".$student['StudentName']."</td>";
            echo "<td>".$student['ThesisStatus']."</td>";
            echo "<td>".$student['ExamStatus']."</td>";
            echo "<td>".$student['SubjectStatus']."</td>";
            echo "<td>".$student['LibraryStatus']."</td>";
            echo "</tr>";
        }
            echo "";
        ?>
        </table>
	</body>
</html>