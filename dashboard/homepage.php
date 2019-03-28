<?php 
	session_start();
	include('session.php');
	$uname = 'Hellooooo'; 
	$uname = $_SESSION['login_user'] ;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="homepage.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/faviconNew.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-inverse">
	<!-- Search form -->
      <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
      <a id="nav_text" class="navbar-brand" href="#">WorkSoft</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a id="nav_text" href="#">Home</a></li>
        <li><a id="nav_text" href="#">About</a></li>
        <li><a id="nav_text" href="#">Contact</a></li>
        <li class="dropdown">
          <a id="nav_text" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Processes <span class="caret"></span></a>
          <ul class="dropdown-menu navbar-inverse">
            <li><a id="nav_text" href="Thesis.php">Thesis Workflow</a></li>
            <li><a id="nav_text" href="ExamRegister.php">Exam Register</a></li>
            <li><a id="nav_text" href="#">Query Submission</a></li>
            <li><a id="nav_text" href="#">Time Table</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
			<li><input class="searchbox" type="text" placeholder="Search" aria-label="Search"></li>
		</ul>

    </div>
    <!--/.nav-collapse -->
  </div>
  <!--/.container-fluid -->   	
</nav>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<!--<div class="profile-userpic">-->
				<!--	<img src="images/profilepic.jpg" class="img-responsive" alt="">-->
				<!--</div>-->
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profilepic">
					<img src="images/profilepic.png" alt="Avatar" class="avatar">
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name" >
						<?php 
						  echo $uname; 
						 ?>
					</div>
					<div class="profile-usertitle-job">
						<!--Web Developer (Retrive data from database)-->
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">Message</button>	

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h4 class="modal-title">Personal Message</h4>
</div>
<div class="modal-body">

        <form role="form" method="post" id="reused_form" >
        <p>
            Send your message with detailed expalnation so that the person will get back to you quickly according to the prioroty of query. 
        </p>

        <div class="form-group modaltitle">
            <label for="name">
                Name:</label>
            <input type=text" class="form-control"
            id="name" name="name"   required maxlength="50">

        </div>
        <div class="form-group modaltitle">
            <label for="email">
                Email:</label>
            <input type="email" class="form-control"
            id="email" name="email" required maxlength="50">
        </div>
        <div class="form-group modaltitle">
            <label for="name">
                Message:</label>
            <textarea class="form-control" type="textarea" name="message"
            id="message" placeholder="Your Message Here"
            maxlength="1000" rows="7"></textarea>
        </div>





        <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Send Message!</button>

    </form>
    <div id="success_message" style="width:100%; height:100%; display:none; ">
        <h3>Your message was successfully sent!</h3>
    </div>
    <div id="error_message"
    style="width:100%; height:100%; display:none; ">
        <h3>Error</h3>
        Sorry there was an error sending your message please try again!

    </div>
</div>

</div>

 </div>
</div>

				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			  Active proceesses will be displayed here in list view
            </div>
		</div>
	</div>
</div>





     <script src="homepage.js"></script>
</body>
</html>