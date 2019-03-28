<?php
session_start();
include('session.php');

$uname = $_SESSION['login_user'] ;

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
		<style type="text/css">
			#status { font-size: 20px; font-weight: bold; color: navy; }
			#step1, #step2 , #step3 ,#step4, #step5  { font-weight: bold}
		</style>
		
	</head>
	<body>
	    <input type="text" style="display:none" id="hiddenVal" />
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
			
			<ul class="nav menu">
				<li><a href="index.php"><em class="fa fa-user">&nbsp;</em> User Profile</a></li>
				
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
						<li><a class="active" href="subjects.php">
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
					<li class="active">Subject Enrollment</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Subject Enrollment</h1>
				</div>
			</div><!--/.row-->
			

			
			
			
			
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default ">
						<div class="panel-heading">
							Subject Enrollment
							
							<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
						<div class="panel-body">
							<!-- <ol class="breadcrumb step1"   >
							  
							  <li id="step1" >Login to Opal</li>
							</ol>
							
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							

							<ol class="breadcrumb step2" >							  
							  <li id="step2">Select the Subject and click on Register</li>
							</ol>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							<ol class="breadcrumb step3" >							  
							  <li  id="step3">Date Validation</li>
							</ol>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							<div align="center"><span class="glyphicon" style="font-size:40px;">&#xe233;</span></div>		 -->	
							
							<div class="alert" id="step1" role="alert" align="center">Login to OPAL</div>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							<div class="alert" id="step2" role="alert" align="center">Search for the course in OPAL</div>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							<div class="alert" id="step3" role="alert" align="center">Select the group for registration /deregistration</div>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							<div class="alert" id="step4" role="alert" align="center">Click on Register/Deregister</div>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							<div class="alert" id="step5" role="alert" align="center">Check the enrolled/deregistered subject on front page</div>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							<div align="center"><span class="glyphicon" style="font-size:40px;">&#xe233;</span></div>

						</div>
						
					</div>
					
					
				</div><!--/.col-->
				
				
				<div class="col-md-6">
					<div class="panel panel-default ">
						<div class="panel-heading">
							Status
							<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
						<div class="panel-body timeline-container">

							<div align="center" style="font-weight: bold;">
								<p>Your Current Status</p>
							</div><br>
							<div id="status" align="center">
									
							</div><br><br>
							<div align="center">				
								<button class="btn btn-danger" id="startBTN"> Start Process </button>			
								<!-- <button id="getStatus" class="btn" style="background: SpringGreen; font-weight: bold">Get Your Current Status</button> -->
								<button id="nextStep" class="btn btn-primary" style="font-weight: bold">Go to Next Step</button>
							</div>

						</div>
					</div>
				</div><!--/.col-->
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

				var processID;
				var processName;
				var data = JSON.stringify({});
				// var steps =['Login to Opal','Select the subject and click on Register','Date is expired','Check the confirmation on min page'];
				var step1val = document.getElementById("step1").innerHTML;
				
				var step2val = document.getElementById("step2").innerHTML;
				
				var step3val = document.getElementById("step3").innerHTML;
				
				var step4val = document.getElementById("step4").innerHTML;
				
				var step5val = document.getElementById("step5").innerHTML;
				
				//document.getElementById("getStatus").addEventListener('click', getCurrStatus);
				document.getElementById("startBTN").addEventListener('click', startPro);		    	
		    	document.getElementById("nextStep").addEventListener('click', nextStep);
				getCurrStatus();

				function startPro()
		    	{
		    		var xhttp = new XMLHttpRequest();
	                xhttp.onreadystatechange = function()
	                {
	                    if(this.readyState==4 && this.status==200)
	                    {    
	                         document.getElementById("startBTN").disabled = true;
	                         console.log('Process Started');
	                         getCurrStatus();                                             
	                    }  
	                }
	                xhttp.open('POST', 'http://145.14.157.100:8080/engine-rest/process-definition/key/Subjects/start', true);
	                xhttp.setRequestHeader("Content-type", "application/json");
	                xhttp.send();
		    	}

				function getCurrStatus()
				{
					var xhttp = new XMLHttpRequest();
                	xhttp.onreadystatechange = function()
                	{
                    	if(this.readyState==4 && this.status==200)
                    	{                            
                        	//document.getElementById("demo").innerHTML = this.responseText;
	                        var result = JSON.parse(this.responseText);
	                        console.log(result);                        
	                       	
	                        //console.log(processID);
	                        //console.log(result[0].name);
	                        if(result === undefined || result.length == 0)
	                        {	  
	                        	document.getElementById("startBTN").disabled = false;
	                        	console.log('No Process Exists');                      	
	                    	 	document.getElementById("status").innerHTML = "No Process Exists";
	                    	 	processName = "No Process Exists";
	                    	 	raiseStep();
	                        }
	                        else
	                        {	                     
	                        	document.getElementById("startBTN").disabled = true; 
	                        	document.getElementById("status").innerHTML = result[0].name;
	                        	processID = result[0].id;
	                        	processName = result[0].name;
	                        	
	                        	//Fetching the current status in the database and redirecting the page to exam page only
	                        	
	                        	UName = result[0].name;
	                        	
	                        	document.getElementById("hiddenVal").value = UName;
	                        	//storing the current status in a hidden value 
	                        	var update = document.getElementById("hiddenVal").value
		                        //To pass the body to the ExamUpdate.php
		                        var dataInDB = "dbData="+update;
		        
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function()
                                { if(this.readyState == 4 && this.status == 200)
                                    {
         
                      
                                     }
                                }

                                xhttp.open('POST', 'SubjectsUpdate.php', true);
                                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                xhttp.send(dataInDB); 
	                        	raiseStep();
	                        }                        
                      		
                   		 }  
                	}
               
                	xhttp.open('GET', 'http://145.14.157.100:8080/engine-rest/task?processDefinitionKey=Subjects', true);
                	xhttp.send();
				}

				function nextStep()
				{
					//var data = JSON.stringify({"variables" : {"status" : {"value": "invalid"}	}});
	    			var xhttp = new XMLHttpRequest();
	                xhttp.onreadystatechange = function()
	                {
	                    if(this.readyState==4 && this.status==204)
	                    {    
	                        
	                       console.log('Process Completed');
	                        // document.getElementById("Subject").disabled = true;
	                        getCurrStatus();
	                       
	                    }  
	                }
	                //var url = 'http://145.14.157.100:8080/engine-rest/task/'+processID+'/complete';
	                xhttp.open('POST', 'http://145.14.157.100:8080/engine-rest/task/'+processID+'/complete', true);
	                xhttp.setRequestHeader("Content-type", "application/json");
	                xhttp.send(data);
	               
				}

				function raiseStep()
				{	
						document.getElementById("step1").style.backgroundColor = "Cyan";
						document.getElementById("step2").style.backgroundColor = "Cyan";
						document.getElementById("step3").style.backgroundColor = "Cyan";
						document.getElementById("step4").style.backgroundColor = "Cyan";
						document.getElementById("step5").style.backgroundColor = "Cyan";
					
					if(processName == step1val)
					{
						document.getElementById("nextStep").disabled = false;
						document.getElementById("step1").style.backgroundColor = "SpringGreen";
					}
					else if(processName == step2val)
					{
						document.getElementById("step2").style.backgroundColor = "SpringGreen";
					}
					else if (processName == step3val)
					{						
						document.getElementById("step3").style.backgroundColor = "SpringGreen";					
					}
					else if (processName == step4val)
					{						
						document.getElementById("step4").style.backgroundColor = "SpringGreen";					
					}
					else if (processName == step5val)
					{						
						document.getElementById("step5").style.backgroundColor = "SpringGreen";					
					}
					else if (processName == 'No Process Exists') 
					{
						document.getElementById("nextStep").disabled = true;
						document.getElementById("step1").style.backgroundColor = "";
						document.getElementById("step2").style.backgroundColor = "";
						document.getElementById("step3").style.backgroundColor = "";
						document.getElementById("step4").style.backgroundColor = "";
						document.getElementById("step5").style.backgroundColor = "";
					}
					
					

				}


			};
		</script>
			
	</body>
</html>