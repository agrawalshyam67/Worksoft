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

$sql = "SELECT * from Register where username = '$uname'";

$records = mysqli_query($conn,$sql);

$student = mysqli_fetch_assoc($records);

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
		<link href="css/theme-default.css" rel="stylesheet">
		
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
					
					<div class="profile-usertitle-name"> <em class="fa fa-user">&nbsp;</em> <?php echo $uname; ?></div>
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
				<li class="active"><a href="index.php" ><em class="fa fa-user">&nbsp;</em> User Profile</a></li>
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
					<em class="fa fa-gg">&nbsp;</em> Workflows <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><i class="fa fa-plus"></i></span>
					</a>
					<ul class="children collapse" id="sub-item-1">
						<li><a class="" href="thesis.php">
							Thesis Workflow
						</a></li>
						<li><a class="" href="exam.php">
							Exam Registration
						</a></li>
						<li><a class="" href="subjects.php">
							Subject Enrollment
						</a></li>
						<li><a class="" href="library.php">
							Library
						</a></li>
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
					<h1 class="page-header">Welcome <?php echo $student['FirstName']." ".$student['LastName'];  ?> </h1>
				</div>
			</div><!--/.row-->
			

			
			
			
			
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default ">
						<div class="panel-heading">
							User Profile
							
							<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
						<div class="panel-body">
								
							<form role="form">
							<fieldset>
								<div class="form-group">
                                            <h3>Name: <b><?php echo $student['FirstName']." ".$student['LastName'];  ?></b></h3>
                                        </div>
                                       
                                        <div class="form-group">
                                            <h3>Username: <b><?php echo $student['username'];  ?></b></h3>
                                        </div>                                       
                                        
                                        <div class="form-group">
                                            <h3>Email: <b><?php echo $student['email'];  ?></b></h3>
                                        </div>
                                        <div class="form-group">
                                            <h3>Immatrikuklation No: <b><?php echo $student['MatriNum'];  ?></b></h3>
                                        </div>
                                        <div class="form-group">
                                            <h3>Department/Course: <b><?php echo $student['Department'];  ?></b></h3>
                                        </div>
                                        
                                        
								
							</fieldset>	
						</form>
							
							

						</div>
						
					</div>
					
					
				</div><!--/.col-->
				
				
				<div class="col-md-6">
					<div class="panel panel-default ">
						<div class="panel-heading">
							Calendar
							<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
						<div class="panel-body timeline-container">

							
							<div id="calendar"></div>

							<!-- <iframe src="https://calendar.google.com/calendar/embed?showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=400&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=anubhav.25gupta%40gmail.com&amp;color=%23ffffff&amp;ctz=Europe%2FBerlin" style="border-width:0" width="400" height="400" frameborder="0" scrolling="no"></iframe> -->
							

						</div>
					</div>

					



				</div><!--/.col-->
				<div class="col-md-12">
					<div class="panel panel-default ">
						<div class="panel-heading">
							Contact Professor
							<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
						<div class="panel-body timeline-container">

							<form class="form-horizontal" action="" method="post" id="myForm">
								<fieldset>
									<div id="emailNoti" align="center" style="color:red;"> </div>
									<!-- Name input-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Your E-mail</label>
										<div class="col-md-9">
											<h5 id="userEmail"><?php echo $student['email'];  ?></h5>
										</div>
									</div>
								
									<!-- Email input-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="email">Professor's E-mail</label>
										<div class="col-md-9">
											<input id="profEmail" name="email" type="email" placeholder="Professor's email" class="form-control" required>
										</div>
									</div>
									
									<!-- Message body -->
									<div class="form-group">
										<label class="col-md-3 control-label" for="message">Your message</label>
										<div class="col-md-9">
											<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5" required></textarea>
										</div>
									</div>
									
									<!-- Form actions -->
									<div class="form-group">
										<div class="col-md-12 widget-right">
											<button type="button" class="btn btn-default btn-md pull-right btn-primary" id="sendEmail">Submit</button>
										</div>
									</div>
								</fieldset>
							</form>
							

						</div>
					</div>
				</div>

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
				// var chart1 = document.getElementById("line-chart").getContext("2d");
				// window.myLine = new Chart(chart1).Line(lineChartData, {
				// responsive: true,
				// scaleLineColor: "rgba(0,0,0,.2)",
				// scaleGridLineColor: "rgba(0,0,0,.05)",
				// scaleFontColor: "#c5c7cc"
				// });

				document.getElementById("sendEmail").addEventListener('click', sendEmail);


				function sendEmail(e)
				{	
					e.preventDefault();
					var userEmail = document.getElementById("userEmail").innerHTML;
					var profEmail = document.getElementById("profEmail").value;
					var msg = document.getElementById("message").value;

					var emailInfo = "userEmail="+userEmail+"&profEmail="+profEmail+"&msg="+msg;
					
					var xhttp = new XMLHttpRequest();
	                xhttp.onreadystatechange = function()
	                { if(this.readyState == 4 && this.status == 200)
	                    {
	                        document.getElementById("emailNoti").innerHTML = this.responseText;
	                        document.getElementById("myForm").reset();
	                       
	                        // console.log(this.responseText);
	                      
	                    }
	                }

	                xhttp.open('POST', 'mail.php', true);
	                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	                xhttp.send(emailInfo);
					}
			};
		</script>
			
	</body>
</html>