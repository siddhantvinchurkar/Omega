<?php
	// Server Credentials
	$servername = "localhost";
	$username = "omega";
	$password = "uglyhorse3449";
	$dbname = "omega";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// SQL commands
	$checksql = "SELECT * FROM AssignmentTable WHERE subject='".$_GET['subname']."'";
	$result = $conn->query($checksql);
	echo '<script type="text/javascript">var topicArray = [];var descArray = [];</script>';
	$ncount = mysqli_num_rows($result); 
	if($ncount > 0)
	{  $n = 0;
		while($row = mysqli_fetch_assoc($result))
		{ 
			  echo '<script type="text/javascript">topicArray['.$n.'] = '.$row["topic"].';descArray['.$n.'] = '.$row["description"].';</script>';
			  $n += 1;
		} //end of while  
	}

	//get user details from users table using email in url
	$userDet = "SELECT * FROM users WHERE rno='".$_GET['teacher']."'";
	$userRet = mysqli_query($conn, $userDet);
	$userrow = mysqli_fetch_assoc($userRet);
	echo '<script type="text/javascript">var userDetail = ["'.$userrow["photo"].'","'.$userrow["fn"].'","'.$userrow["rno"].'","'.$userrow["eml"].'"]; </script>';
	
	// Close connection to the database
	$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<!--ask for new class code JS-->
		<script type="text/javascript" src="student.js"> </script>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Basic meta tags-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!--Fetch minified materializecss from the CDN asynchronously-->
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"  media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch material icons from the CDN asynchronously-->
		<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"  media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch font (Roboto) from the CDN asynchronously-->
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
		<!--Set the shortcut icon-->
		<link rel="shortcut icon" type="image/ico" href="../images/icons/favicon.ico">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Progressive Web App meta tags-->
		<link rel="manifest" href="../manifest.json">
		<meta name="theme-color" content="#4DB6AC">
		<meta name="Description" content="Omega is a collaborative classroom platform for teachers and students alike.">
		<!--Overriden Styles-->
		<style>
			body {
			display: flex;
			min-height: 100vh;
			flex-direction: column;
			font-family: 'Roboto', sans-serif;
			background-color: #F6F6F6;
			}
			main {
			flex: 1 0 auto;
			}
			.container {
			display: flex;
			justify-content: center;
			}
			.center {
			width: 250px;
			position: absolute;
			margin: auto;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			}
			.center2 {
			opacity:0.1;
			position: absolute;
			margin: auto;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			}
			#question{
				font-weight: bold;
				color:white;
				background-color:#008080;
			}
			#date{
				font-weight:lighter;
				background-color:grey;
				text-align: center;
			}
			#label{
				font-style: italic;
				font-size: 23px;
				line-height: 40px;
				color:white;
				padding-left: 10px;

			}
			main {
			flex: 1 0 auto;
			}
			.btn-floating{ 
  			background-color:#e57373;
			}
			i.icon-white {
			    color: white;
			}
			.card-title{
				background-color:#42a5f5;
				padding:5px;

			}

			.card-content{
				width:auto;
				padding: 24px;
			}
			.card-link{
				width:auto;
				padding: 2px;
			}
			#notes-nav{
				width: 300px;
				top: 65px;
			}
			
		}
		</style>
		<title>Omega</title>
	</head>
	<body>
		<!-- Heading Strip-->
		<header>
			<nav>
				<div class="nav-wrapper">
					<img data-target="menu-nav" class="sidenav-trigger" src="../images/icons/72.png" style="height:95%; cursor: pointer;" />
					<a href="" class="brand-logo">Omega</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li>
							<?php echo '<a href="../teacher/?eml='.$userrow["eml"].'" class="btn-flat tooltipped" data-position="bottom" data-tooltip="Dashboard"><i class="tiny material-icons icon-white">dashboard</i></a>'; ?>
						</li>
						<li>
							<a class="btn-flat tooltipped modal-trigger" href="#notesList" data-position="bottom" data-tooltip="Notes"><i class="tiny material-icons icon-white">library_books</i></a>
						</li>
						<li>
							<a class="btn-flat tooltipped modal-trigger" href="#announceList" data-position="bottom" data-tooltip="Announcements" ><i class="tiny material-icons icon-white">announcements</i></a>
						</li>
					</ul>
				</div>
			</nav>
</header>


		<main>
			<!--Progrss Bar-->
			<div class="container" id="progressBar">
				<img src="../images/icons/512.png" class="center2" />
				<div class="progress center">
					<div class="indeterminate" style="margin-right: auto; margin-left: auto; width: 250px;"></div>
				</div>
			</div>

			<!--Contents-->
			<div id="pageContents" style="display:block;">
				<img src="../images/icons/512.png" class="center2" />

			<!-- Sliding Navigation Bars -->
  			<ul id="menu-nav" class="sidenav">
    			<li>
    				<div class="user-view">
      					<div class="background">
        					<img src="../images/list.jpg">
      					</div>
      					<a href="#user"><img id="snDP" class="circle" src="../images/icons/72.png"></a>
      					<a href="#name"><span id="snName" class="white-text name">Teacher Name</span></a>
      					<a href="#email"><span id="snEmail" class="white-text email">teacherSJC@gmail.com</span></a>
    				</div>
    			</li>
    				<li><a id="viewStud" href="studentsView.php" class="waves-effect"><i class="material-icons">group</i>View Students List</a></li>
    				<li><div class="divider"></div></li>
    				<li><a id="addAssign" href="#assignModal" class="waves-effect modal-trigger"><i class="material-icons">assignment</i>Add New Assignment</a></li>
    				<li><a id="addNotes" href="#notesModal" class="waves-effect modal-trigger"><i class="material-icons">note_add</i>Add Notes</a></li>
    				<li><a id="addAnnounce" href="#announceModal" class="waves-effect modal-trigger"><i class="material-icons">announcements</i>Add New Announcement</a></li>
    				<li><div class="divider"></div></li>
    				<li><a class="waves-effect modal-trigger" href="#deleteSubjectModal"><i class="material-icons">remove_circle</i>Delete Subject</a></li>
    				<li><div class="divider"></div></li>
    				<li><a class="waves-effect" href="https://omegaclassrooms.ga/"><i class="material-icons">power_settings_new</i>Sign Out</a></li>
  			</ul>

  
 			<div class="row" id="assignCards">
			<!-- Card 1-->
    			
 			<!-- End of Card  -->
 			</div>

 			<!--New Assignment Modal-->
 			<div id="assignModal" class="modal">
				<?php echo '<form action="insertAssignment.php?sname='.$_GET['subname'].'&techer='.$_GET['teacher'].'" method="post">'; ?>
					<div class="modal-content">
	  					<h4>New Assignment</h4>
	  					<p><b>Enter Assignment Topic</b><input type="text" size="20"  name="topassign" /></p>
	  					<p><b>Enter Assignment Description</b><input type="text" size="50"  name="desassign" /></p>
					</div>
					<div class="modal-footer">
	  					<input type="submit" class="modal-close waves-effect btn-flat" value="Add Assignment"/>
					</div>
				</form>
			</div>

			<!--New Announcement modal -->
			<div id="announceModal" class="modal">
				<?php echo '<form action="insertAnnounce.php?sname='.$_GET['subname'].'&techer='.$_GET['teacher'].'" method="post">'; ?>
					<div class="modal-content">
	  					<h4>New Announcement</h4>
	  					<p><b>Enter Announcement</b><input type="text" size="99"  name="annote" /></p>
					</div>
					<div class="modal-footer">
	  					<input type="submit" class="modal-close waves-effect btn-flat" value="Add Announcement"/>
					</div>
				</form>
			</div>

			<!--Add Notes modal -->
			<div id="notesModal" class="modal">
				<?php echo '<form action="insertNotes.php?sname='.$_GET['subname'].'&techer='.$_GET['teacher'].'" method="post">'; ?>
					<div class="modal-content">
	  					<h4>Upload Notes</h4>
	  					<p><b>Enter Notes Topic</b><input type="text" size="50" name="topnotes"></p>
	  					<p>Upload the notes in your google drive and paste the shared link below.</p>
	  					<p><b>Enter Notes Link</b><input type="text" size="99"  name="annote" /></p>
					</div>
					<div class="modal-footer">
	  					<input type="submit" class="modal-close waves-effect btn-flat" value="Upload Notes"/>
					</div>
				</form>
			</div>

			<!--List of Announcement modal -->
  			<div id="announceList" class="modal">
    			<div class="modal-content">
    				<img src="../images/icons/192.png" class="center2"/>
      				<h4>Announcements</h4>
	      				<table id="annouceTable" class="responsive-table highlight">
	        				
	        				<?php include 'pullAnnounce.php';?>

					     </table>
    			</div>
    			<div class="modal-footer">
      				<a class="modal-close waves-effect btn-flat">Close</a>
    			</div>
  			</div>
  			
  			<!--List of Notes modal -->
			<div id="notesList" class="modal">
    			<div class="modal-content">
    				<img src="../images/icons/192.png" class="center2"/>
      				<h4>Notes List</h4>
      				<center>
      				<ul type="disc">
	      				<table id="notesTable" class="responsive-table highlight">
	        				
	        				<?php include 'pullNotes.php'; ?>

					     </table>
				      </ul>
  					</center>
    			</div>
    			<div class="modal-footer">
      				<a href="#!" class="modal-close waves-effect btn-flat">Close</a>
    			</div>
  			</div>

  			<!--Delete Subject modal -->
  			<div id="deleteSubjectModal" class="modal">
				<div class="modal-content">
  					<center><h5>Are you sure you want to delete this subject?</h5></center>
      			</div>
				<div class="modal-footer">
					<?php echo '<a href ="deleteClass.php?techerID='.$_GET['teacher'].'&sname='.$_GET['subname'].'" class="modal-close waves-effect btn-flat">Delete</a>'; ?>
				</div>
			</div>

		</main>
			<!--Footer-->
			<footer class="page-footer" style="padding-top:0px;">
				<div class="footer-copyright">
					<div class="container" id="footerText">
						<a href="#" target="_blank" title="OMEGA" style="color:#FFFFFF">&emsp;Omega&emsp;</a>
					</div>
				</div>
			</footer>

			<!--JavaScript at end of body for optimized loading-->
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
			
			<!-- Slide Navigation Bar JS-->
			<script>
				 document.addEventListener('DOMContentLoaded', function() {
			    var elems = document.querySelectorAll('.sidenav');
			    var instances = M.Sidenav.init(elems, 'edge');
  				});
			</script>

			<!-- Modal JS-->
			<script>
				 document.addEventListener('DOMContentLoaded', function() {
				    var elems = document.querySelectorAll('.modal');
				    var instances = M.Modal.init(elems, 'noScrolling');
				  });
				</script>

			<script>
				// Get rid of the loader after three seconds
				setTimeout(function(){
					document.getElementById("progressBar").style.display="none";
					document.getElementById("pageContents").style.display="block";
					},0);
			</script>

			<!--Button tooltips JS-->
			<script>
				document.addEventListener('DOMContentLoaded', function() {
				    var elems = document.querySelectorAll('.tooltipped');
				    var instances = M.Tooltip.init(elems);
				  });
			</script>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
				    var elems = document.querySelectorAll('.datepicker');
				    var instances = M.Datepicker.init(elems, options);
				  });
			</script>

			<script>
				//put user details in the side nav and other areas
				document.getElementById("snDP").src = userDetail[0];
				document.getElementById("snName").innerHTML = userDetail[1];
				document.getElementById("snID").innerHTML = userDetail[2];
				
			</script>

			<script>
				window.onload = function(){
					for(var m=0; m<topicArray.length; m++)
				document.getElementById("subCards").innerHTML += '<div class="col s12 m4"><div class="card blue-grey darken-1"><div id="assignTitle" class="card-title white-text">'+topicArray[m]+'</div><div class="card-content blue-grey darken-2 white-text"><p id="assignQues">'+descArray[m]+'</p><a class="waves-effect waves-light btn right" href="assignmentView.php"><i class="material-icons right">list</i>View</a></div></div></div>';
				}
			</script>


			<script type="text/javascript" src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script><!--Not loading asynchronously as the following script is dependant on this-->
			<script type="text/javascript">
				// Initialize Firebase
				var config = {
				  apiKey: "AIzaSyA5deESjwYhl6_zs2seCmwTMNtx3OFLodM",
				  authDomain: "omegaclassrooms.firebaseapp.com",
				  databaseURL: "https://omegaclassrooms.firebaseio.com",
				  projectId: "omegaclassrooms",
				  storageBucket: "omegaclassrooms.appspot.com",
				  messagingSenderId: "230656441501"
				};
				firebase.initializeApp(config);
			</script>
		</main>
	</body>
</html>
