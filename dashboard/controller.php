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
		<style> #status { font-size: 20px; font-weight: bold; color: navy; }
		#step1, #step2 , #step3 ,#step4, #step5,#step6, #step7  { font-weight: bold}
		</style>
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
				<li class=""><a href="prDashboard.php" ><em class="fa fa-user">&nbsp;</em> Dashboard</a></li>
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
						<li><a class="active" href="controller.php">
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
					<li class="active">Thesis Control</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Thesis Workflow Control</h1>
				</div>
			</div><!--/.row-->
			

			
			
			
			
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default ">
						<div class="panel-heading">
							Thesis Workflow
							
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
							
							<div class="alert" id="step1" role="alert" align="center">Search the topic for thesis</div>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							<div class="alert" id="step2" role="alert" align="center">Send the topic for approval</div>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							<div class="alert" id="step3" role="alert" align="center">Get the signature and prepare presentation</div>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							<div class="alert" id="step4" role="alert" align="center">Complete all Thesis scenarios</div>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							<div class="alert" id="step5" role="alert" align="center">Send it for verification</div>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							<div class="alert" id="step6" role="alert" align="center">Check the approved state</div>
							<div align="center"><span class="glyphicon" >&#xe094;</span></div>
							
							<div class="alert" id="step7" role="alert" align="center">Defend the thesis</div>
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
					<div class="panel panel-default" id="topicValidation" style="display: none;">
						<div class="panel-heading">
							Is the Topic Approved?
							<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
						</div>
						<div class="panel-body timeline-container" align="center">
							<button id="validTopic" class="btn btn-lg btn-primary" style="font-weight: bold">Yes !</button> 
							<button id="invalidTopic" class="btn btn-lg btn-primary" style="font-weight: bold">No :(</button>
						</div>
					</div>
					<div class="panel panel-default" id="thesisValidation" style="display: none;">
						<div class="panel-heading">
							Is the Thesis Approved?
							<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
						</div>
						<div class="panel-body timeline-container" align="center">
							<button id="thesisApprove" class="btn btn-lg btn-primary" style="font-weight: bold">Yes !</button> 
							<button id="thesisReject" class="btn btn-lg btn-primary" style="font-weight: bold">No :(</button>
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
				
				var step6val = document.getElementById("step6").innerHTML;

				var step7val = document.getElementById("step7").innerHTML;
				
				//document.getElementById("getStatus").addEventListener('click', getCurrStatus);
				document.getElementById("startBTN").addEventListener('click', startPro);		    	
		    	document.getElementById("nextStep").addEventListener('click', nextStep);
		    	document.getElementById("validTopic").addEventListener('click', validTopic);
		    	document.getElementById("invalidTopic").addEventListener('click', invalidTopic);
		    	document.getElementById("thesisApprove").addEventListener('click', thesisApprove);
		    	document.getElementById("thesisReject").addEventListener('click', thesisReject);
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
	                         //document.getElementById("step1").style.backgroundColor = "SpringGreen";
	                         getCurrStatus();                                             
	                    }  
	                }
	                xhttp.open('POST', 'http://145.14.157.100:8080/engine-rest/process-definition/key/Topic/start', true);
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
	                        	console.log(processName);
	                        	
	                        	//Fetching the current status in the database and redirecting the page to exam page only
	                        	
	                        	//UName = result[0].name;
	                        	
	                        	//document.getElementById("hiddenVal").value = UName;
	                        	//storing the current status in a hidden value 
	                        	//var update = document.getElementById("hiddenVal").value
		                        //To pass the body to the ExamUpdate.php
		                        //var dataInDB = "dbData="+update;
		        
                                // var xhttp = new XMLHttpRequest();
                                // xhttp.onreadystatechange = function()
                                // { if(this.readyState == 4 && this.status == 200)
                                //     {
         
                      
                                //      }
                                // }

                                // xhttp.open('POST', 'SubjectsUpdate.php', true);
                                // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                // xhttp.send(dataInDB); 
	                        	raiseStep();
	                        }                        
                      		
                   		 }  
                	}
               
                	xhttp.open('GET', 'http://145.14.157.100:8080/engine-rest/task?processDefinitionKey=Topic', true);
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

				function validTopic()
				{
					data = JSON.stringify({"variables" : {"status" : {"value": "approve"}	}});
					nextStep();
					document.getElementById("topicValidation").style.display = "none";
					document.getElementById("nextStep").disabled = false;
				}

				function invalidTopic()
				{
					data = JSON.stringify({"variables" : {"status" : {"value": "reject"}	}});
					nextStep();
					document.getElementById("topicValidation").style.display = "none";
					document.getElementById("nextStep").disabled = false;
				}

				function thesisApprove()
				{
					data = JSON.stringify({"variables" : {"status" : {"value": "correct"}	}});
					nextStep();
					document.getElementById("thesisValidation").style.display = "none";
					document.getElementById("nextStep").disabled = false;
				}

				function thesisReject()
				{
					data = JSON.stringify({"variables" : {"status" : {"value": "incorrect"}	}});
					nextStep();
					document.getElementById("thesisValidation").style.display = "none";
					document.getElementById("nextStep").disabled = false;
				}

				function raiseStep()
				{	
						document.getElementById("step1").style.backgroundColor = "Cyan";
						document.getElementById("step2").style.backgroundColor = "Cyan";
						document.getElementById("step3").style.backgroundColor = "Cyan";
						document.getElementById("step4").style.backgroundColor = "Cyan";
						document.getElementById("step5").style.backgroundColor = "Cyan";
						document.getElementById("step6").style.backgroundColor = "Cyan";
						document.getElementById("step7").style.backgroundColor = "Cyan";
					
					if(processName == step1val)
					{
						// document.getElementById("nextStep").disabled = false;
						document.getElementById("step1").style.backgroundColor = "SpringGreen";
					}
					else if(processName == step2val)
					{
						document.getElementById("step2").style.backgroundColor = "SpringGreen";
						document.getElementById("nextStep").disabled = true;
						document.getElementById("topicValidation").style.display = "block";

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
					else if (processName == step6val)
					{						
						document.getElementById("step6").style.backgroundColor = "SpringGreen";	
						document.getElementById("nextStep").disabled = true;
						document.getElementById("thesisValidation").style.display = "block";
					}
					else if (processName == step7val)
					{						
						document.getElementById("step7").style.backgroundColor = "SpringGreen";					
					}
					else if (processName == 'No Process Exists') 
					{
						// document.getElementById("nextStep").disabled = true;
						document.getElementById("step1").style.backgroundColor = "";
						document.getElementById("step2").style.backgroundColor = "";
						document.getElementById("step3").style.backgroundColor = "";
						document.getElementById("step4").style.backgroundColor = "";
						document.getElementById("step5").style.backgroundColor = "";
						document.getElementById("step6").style.backgroundColor = "";
						document.getElementById("step7").style.backgroundColor = "";
					}
					
					

				}

			};
		</script>
			
	</body>
</html>