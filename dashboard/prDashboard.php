<?php
session_start();
include('session.php');

$uname = $_SESSION['login_user'] ;

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

$sql = "SELECT * from Professor where ThesisStatus<>''";
$sql1 = "SELECT * from Professor where ExamStatus<>''";
$sql2 = "SELECT * from Professor where SubjectStatus<>''";
$sql3 = "SELECT * from Professor where LibraryStatus<>''";


$num = "SELECT * from Professor where ThesisStatus<>''";
$num1 = "SELECT * from Professor where ExamStatus<>''";
$num2 = "SELECT * from Professor where SubjectStatus<>''";
$num3 = "SELECT * from Professor where LibraryStatus<>''";

$num4 = "SELECT * from Professor";

$records = mysqli_query($conn,$sql);
$records1 = mysqli_query($conn,$sql1);
$records2 = mysqli_query($conn,$sql2);
$records3 = mysqli_query($conn,$sql3);
//$num = mysqli_query($conn,$count);

//$quer = mysqli_query('SELECT COUNT(StudentName) AS count FROM Professor');
//$countq = mysqli_query_fetch();
//$quer->closeCursor();

$result = mysqli_query($conn,$num);
$result1 = mysqli_query($conn,$num1);
$result2 = mysqli_query($conn,$num2);
$result3 = mysqli_query($conn,$num3);

$result4 = mysqli_query($conn,$num4);
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['active'];
      
$count = mysqli_num_rows($result);
$count1 = mysqli_num_rows($result1);
$count2 = mysqli_num_rows($result2);
$count3 = mysqli_num_rows($result3);

$count4 = mysqli_num_rows($result4);

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>WORKSOFT - Dashboard</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/datepicker3.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
		<!--Theme-->
		<!-- <link href="css/theme-default.css" rel="stylesheet"> -->
		<!-- <link href="css/theme-iris.css" rel="stylesheet"> -->
		<!-- <link href="css/theme-lime.css" rel="stylesheet"> -->
		<link href="css/theme-midnight.css" rel="stylesheet">
		<!-- <link href="css/theme-rose.css" rel="stylesheet"> -->
		
		<!--Custom Font-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
		
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span></button>
						<div class="profile-userpic">
				    	<img src="WorkSoftblank.png" width="20" alt="User Avatar" class="img-circle" />
				        </div>
					<a class="navbar-brand" href="#"><span>Work</span>Soft</a>
					<ul class="nav navbar-top-links navbar-right">
						<!-- <li class="dropdown" ><a href="logout.php">Logout</a></li> -->
						<!-- <li class="dropdown"><button class="btn btn-md btn-danger"><a href="logout.php" style="color:black;">Logout</a></button></li> -->
						
					</ul> 

				</div>
			</div><!-- /.container-fluid -->
		</nav>
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<div class="profile-sidebar">
				<!-- <div class="profile-userpic">
					<img src="images/profile-pic-1.jpg" width="50" class="img-responsive" alt="">
				</div> -->
				<div class="profile-usertitle">
					
					<div class="profile-usertitle-name"> <em class="fa fa-user-secret">&nbsp;</em> <?php echo $uname; ?></div>
					<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="divider"></div>
			<!-- <form role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
			</form> -->
			<ul class="nav menu">
				<li class="active"><a href="index.php" ><em class="fa fa-user">&nbsp;</em> Dashboard</a></li>
				<!-- <li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
				<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
				<li><a href="buttons.html"><em class="fa fa-hand-pointer-o">&nbsp;</em> Buttons</a></li>
				<li><a href="forms.html"><em class="fa fa-pencil-square-o">&nbsp;</em> Forms</a></li>
				<li><a href="tables.html"><em class="fa fa-table">&nbsp;</em> Tables</a></li>
				<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
				<li><a href="icons.html"><em class="fa fa-star-o">&nbsp;</em> Icons</a></li>
				<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
					<em class="fa fa-file-o">&nbsp;</em> Pages <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><i class="fa fa-plus"></i></span>
					</a>
					<ul class="children collapse" id="sub-item-1">
						<li><a class="" href="gallery.html">
							Gallery
						</a></li>
						<li><a class="" href="search.html">
							Search
						</a></li>
						<li><a class="" href="login.html">
							Login
						</a></li>
						<li><a class="" href="error.html">
							Error 404
						</a></li>
					</ul>
				</li> -->
				<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
					<em class="fa fa-gg">&nbsp;</em> Workflow Control<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><i class="fa fa-plus"></i></span>
					</a>
					<ul class="children collapse" id="sub-item-1">
						<li><a class="" href="controller.php">
							Thesis Control
						</a></li>
						<!-- <li><a class="" href="exam.php">
							Exam Registration
						</a></li>
						<li><a class="" href="subjects.php">
							Subject Enrollment
						</a></li>
						<li><a class="" href="library.php">
							Library
						</a></li> -->
					</ul>
				</li>
				<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			</ul>
		</div><!--/.sidebar-->
			
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Welcome Professor</h1>
				</div>
			</div><!--/.row-->
			
			<div class="panel panel-container">
				<div class="row">
					<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
						<div class="panel panel-teal panel-widget border-right">
							<div class="row no-padding"><em class="fa fa-xl fa-gg color-blue"></em>
								<div class="large">4</div>
								<div class="text-muted">Workflows</div>
							</div>
						</div>
					</div>
					
					<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
						<div class="panel panel-orange panel-widget border-right">
							<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
								<div class="large"><?php echo $count4; ?></div>
								<div class="text-muted">Students</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
						<div class="panel panel-red panel-widget ">
							<div class="row no-padding"><em class="fa fa-xl fa-gamepad color-red"></em>
								<div class="large">1</div>
								<div class="text-muted">Workflow Control</div>
							</div>
						</div>
					</div>
				</div><!--/.row-->
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Student Status
							
							<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-10x fa-toggle-up"></em></span></div>
						<div class="panel-body tabs">
						
						
							<ul class="nav nav-pills">
								<li class="active"><a href="#pilltab1" data-toggle="tab">Thesis</a></li>
								<li><a href="#pilltab2" data-toggle="tab">Exam Registeration</a></li>
								<li><a href="#pilltab3" data-toggle="tab">Subject Enrollment</a></li>
								<li><a href="#pilltab4" data-toggle="tab">Library</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade in active" id="pilltab1">
									<h4>No. of Students : 
									    <?php 
									        echo $count;
									    ?>
									</h4>
									<table class="table table-striped">
									<thead>
										<tr>
											<th>Student Name</th>
											<th>Thesis Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
        
                                            while($student = mysqli_fetch_assoc($records)){
                                            echo "<tr>";
                                            echo "<td>".$student['StudentName']."</td>";
                                            echo "<td>".$student['ThesisStatus']."</td>";
                                            /*echo "<td>".$student['ExamStatus']."</td>";
                                            echo "<td>".$student['SubjectStatus']."</td>";
                                            echo "<td>".$student['LibraryStatus']."</td>";*/
                                            echo "</tr>";
                                            }
                                         echo "";
                                        ?>
									</tbody>
								</table>
								</div>
								<div class="tab-pane fade" id="pilltab2">
									<h4>No. of Students : 
									    <?php 
									        echo $count1;
									    ?></h4>
									<table class="table table-striped">
									<thead>
										<tr>
											<th>Student Name</th>
											<th>Exam Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
        
                                            while($student1 = mysqli_fetch_assoc($records1)){
                                            echo "<tr>";
                                            echo "<td>".$student1['StudentName']."</td>";
                                            echo "<td>".$student1['ExamStatus']."</td>";
                                            /*echo "<td>".$student['ExamStatus']."</td>";
                                            echo "<td>".$student['SubjectStatus']."</td>";
                                            echo "<td>".$student['LibraryStatus']."</td>";*/
                                            echo "</tr>";
                                            }
                                         echo "";
                                        ?>
									</tbody>
								</table>
								</div>
								<div class="tab-pane fade" id="pilltab3">
									<h4>No. of Students : 
									    <?php 
									        echo $count2;
									    ?>
									<table class="table table-striped">
									<thead>
										<tr>
											<th>Student Name</th>
											<th>Subject Status</th>
										</tr>
									</thead>
									<tbody>
										 <?php
        
                                            while($student2 = mysqli_fetch_assoc($records2)){
                                            echo "<tr>";
                                            echo "<td>".$student2['StudentName']."</td>";
                                            echo "<td>".$student2['SubjectStatus']."</td>";
                                            /*echo "<td>".$student['ExamStatus']."</td>";
                                            echo "<td>".$student['SubjectStatus']."</td>";
                                            echo "<td>".$student['LibraryStatus']."</td>";*/
                                            echo "</tr>";
                                            }
                                         echo "";
                                        ?>
									</tbody>
								</table>
								</div>
								<div class="tab-pane fade" id="pilltab4">
									<h4>No. of Students : 
									    <?php 
									        echo $count3;
									    ?>
									<table class="table table-striped">
									<thead>
										<tr>
											<th>Student Name</th>
											<th>Library Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
        
                                            while($student3 = mysqli_fetch_assoc($records3)){
                                            echo "<tr>";
                                            echo "<td>".$student3['StudentName']."</td>";
                                            echo "<td>".$student3['LibraryStatus']."</td>";
                                            /*echo "<td>".$student['ExamStatus']."</td>";
                                            echo "<td>".$student['SubjectStatus']."</td>";
                                            echo "<td>".$student['LibraryStatus']."</td>";*/
                                            echo "</tr>";
                                            }
                                         echo "";
                                        ?>
									</tbody>
								</table>
								</div>
							</div>
						
					

						</div>
					</div>
				</div>
			</div><!--/.row-->
			
			
				
				
				<div class="col-sm-12">
					<p class="back-link">Made with <em class="fa fa-heart">&nbsp;</em> by <a href="https://meetyourit.com/">meetyourIT</a></p>
				</div>
			</div><!--/.row-->
		</div>	<!--/.main-->
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/custom.js"></script>
		<script>
			window.onload = function () {
				var chart1 = document.getElementById("line-chart").getContext("2d");
				window.myLine = new Chart(chart1).Line(lineChartData, {
				responsive: true,
				scaleLineColor: "rgba(0,0,0,.2)",
				scaleGridLineColor: "rgba(0,0,0,.05)",
				scaleFontColor: "#c5c7cc"
				});
			};
		</script>
			
	</body>
</html>