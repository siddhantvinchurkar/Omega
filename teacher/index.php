<!DOCTYPE html>
<html lang="en" >
	<head>
		<title>Omega</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Basic meta tags-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!--Fetch minified normalizecss from the CDN asynchronously-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch minified materializecss from the CDN asynchronously-->
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css" media="none" onload="if(media!='screen,projection')media='screen,projection'">
		<!--Fetch font (Roboto) from the CDN asynchronously-->
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
		<!--Set the shortcut icon-->
		<link rel="shortcut icon" type="image/ico" href="../images/icons/favicon.ico">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Progressive Web App meta tags-->
		<link rel="manifest" href="../manifest.json">
		<meta name="theme-color" content="#EE6E73">
		<meta name="Description" content="Omega is a collaborative classroom platform for teachers and students alike.">
		<style>
			body {
			display: flex;
			min-height: 100vh;
			flex-direction: column;
			font-family: 'Roboto', sans-serif;
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
			.icon-white {
			    color: white;
			}
			.btnptr{
				cursor: pointer;
			}
		</style>
	</head>
	<body>
		<!--Header-->
		<header>
			<nav>
				<div class="nav-wrapper">
					<img data-target="slide-out" class="sidenav-trigger" src="../images/icons/72.png" style="height:95%; cursor: pointer;" />
					<a href="" class="brand-logo">Omega</a>
				</div>
			</nav>
			<!-- Sliding Navigation Bar -->
  			<ul id="slide-out" class="sidenav">
   			 	<li><div class="user-view">
      					<div class="background">
        				<img src="../images/list.jpg">
      					</div>
      					<a href="#user"><img id="snDP" class="circle" src="../images/icons/72.png"></a>
      					<a href="#name"><span id="snName" class="white-text name">Teacher Name</span></a>
      					<a href="#teacherID"><span id="snID" class="white-text email">teacher ID</span></a>
    				</div>
    			</li>
    				<li><a id="detailsEdit" href="#editInfoModal" class="waves-effect modal-trigger"><i class="material-icons">assignment_ind</i>Edit Information</a></li>
    				<li><div class="divider"></div></li>
    				<li><a id="addsubj" href="#subjectModal" class="waves-effect modal-trigger"><i class="material-icons">school</i>Add New Subject</a></li>
    				<li><div class="divider"></div></li>
    				<li><a class="waves-effect" href="https://omegaclassrooms.ga/"><i class="material-icons">power_settings_new</i>Sign Out</a></li>
  			</ul>
		</header>
		<!--Main-->
		<main>
			
			<!--Progrss Bar-->
			<div class="container" id="progressBar">
				<img src="../images/icons/512.png" class="center2" />
				<div class="progress center">
					<div class="indeterminate" style="margin-right: auto; margin-left: auto; width: 250px;"></div>
				</div>
			</div>
<!--Contents-->
<div id="pageContents" style="display:none;">
	<img src="../images/icons/512.png" class="center2" />

				<!-- Modal Structure -->
  				<div id="subjectModal" class="modal">
    				<form action="insertClass.php" method="post">
	    				<div class="modal-content">
	      					<h4>Subject Modal</h4>
	      					<p><b>Enter Subject Name:</b> 	<input type="text" size="20" name="subName"/></p>
	      					<p><b>Enter Subject ID:</b> 	<input type="text" size="10" name="subID"/></p>
	      					<p><b>Your ID is:</b>			<input type="text" name="teacherID" id="tID" value="sth" readonly/></p>
	    				</div>
	    				<div class="modal-footer">
	      					<input type="submit" class="modal-close waves-effect btn-flat btnptr" value="Create Subject"/>
	    				</div>
	    			</form>
  				</div>

  				<!--card container-->
	<div class="container">
		<div class="row">

			<!--Card 1-->
				<div class="col s6">
					<div class="card">
						<div class="card-image"> 
							<img src="../images/list.jpg">
							<a href="#" onclick="subjectOpen()"><span id="subjectName" class="card-title">Computer Graphics</span></a>
						</div>
						<div class="card-content">			
							<div class="collection">
								<a href="#" onclick="subjectOpen()" class="collection-item"><span id="assignNo" class="badge">0</span>Assignments</a>
								<a href="#notesList" class="collection-item modal-trigger"><span id="notesNo" class="badge">0</span>Notes</a>
								<a href="#announceList" class="collection-item modal-trigger"><span id="announceNo" class="badge">0</span>Annoucements</a>
							</div>
						</div>
					</div>
				</div>
			<!--end of card 1-->

		</div>
	</div>
</div>

			<!--Edit Information Modal -->
			<div id="editInfoModal" class="modal">
				<form action="updateInfo.php" method="post">
					<div class="modal-content">
	  					<h4>Edit Information</h4>
	  					<p><b>User Name</b>	<input type="text" id="infoEditFn" name="infoName"/></p>
	  					<p><b>User ID</b>	<input type="text" id="infoEditRno" name="infoID"/>
	  						<input type="hidden" id="infoEditEml" name="infoEmail"/></p>
					</div>
					<div class="modal-footer">
	  					<input type="submit" class="modal-close waves-effect btn-flat btnptr" value="Update Info"/>
					</div>
				</form>
			</div>
		<!--List of Announcement modal -->
  			<div id="announceList" class="modal">
    			<div class="modal-content">
    				<img src="../images/icons/192.png" class="center2"/>
      				<h4>Announcements</h4>
      				<center>
      				<ul type="disc">
	      				<table id="annouceTable" class="responsive-table highlight">
	        				
					          

					     </table>
				      </ul>
  					</center>
    			</div>
    			<div class="modal-footer">
      				<a href="#!" class="modal-close waves-effect btn-flat">Close</a>
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
	        				<thead>
	          					<tr>
	              					<th width="50%">Notes</th>
	              					<th width="40%">File</th>
	              					<th width="10%"> </th>
	          					</tr>
	        				</thead>

	        				<tbody>
					          <tr>
					            <td>Example Notes Title</td>
					            <td>Example File</td>
					            <td><a class="waves-effect btn-flat" href="downloadfilepath"><i class="material-icons">vertical_align_bottom</i></a></td>
					          </tr> 
					        </tbody>

					     </table>
				      </ul>
  					</center>
    			</div>
    			<div class="modal-footer">
      				<a href="#!" class="modal-close waves-effect btn-flat">Close</a>
    			</div>
  			</div>

		</main>
		<!--Footer-->
		<footer class="page-footer" style="padding-top:0px;">
				<div class="container" id="footerText">
					<a href="#" target="_blank" title="OMEGA" style="color:#FFFFFF">&emsp;Omega&emsp;</a>
				</div>
		</footer>
		<!--JavaScript at end of body for optimized asynchronous loading-->

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
		<script>
				 document.addEventListener('DOMContentLoaded', function() {
			    	var elems = document.querySelectorAll('.sidenav');
			    	var instances = M.Sidenav.init(elems, 'edge middle');
  				});
		</script>
		<script type="text/javascript" src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script> <!--Not loading asynchronously as the following script is dependant on this-->
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

		<!--Onload Function-->
		<script type="text/javascript">
			
				// Get rid of the loader after three seconds
				setTimeout(function(){
					document.getElementById("progressBar").style.display="none";
					document.getElementById("pageContents").style.display="block";
					}, 3000);
			
		</script>

		<script>
			function subjectOpen(){
				var subjName = document.getElementById("subjectName").innerHTML;
				var teachID = document.getElementById("snID").innerHTML;
				window.location.href = "../teacherAssign/index.php?teacher=" + teachID + "&subname=" + subjName;
			}

		</script>

		<script>
			function getHttpAsync(link, callback){
				var xmlHttp = new XMLHttpRequest();
				xmlHttp.onreadystatechange = function(){ 
					if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
					callback(xmlHttp.responseText);
				}
				xmlHttp.open("GET", link, true);
				xmlHttp.send(null);
			}
			function results(data){
				document.getElementById("snDP").src = JSON.parse(data).users[3].photo;
				document.getElementById("snName").innerHTML = JSON.parse(data).users[3].fn;
				document.getElementById("snID").innerHTML = JSON.parse(data).users[3].rno;
				document.getElementById("tID").value = JSON.parse(data).users[3].rno;
				document.getElementById("infoEditFn").value = JSON.parse(data).users[3].fn;
				document.getElementById("infoEditRno").value = JSON.parse(data).users[3].rno;
				document.getElementById("infoEditEml").value = JSON.parse(data).users[3].eml;
			}
		window.onload = function(){
				getHttpAsync("../api/users/?key=WNetcNnHuxs2VjwtjfBA78m3whhMZV5dXddKXQrTkMLVvq75HpESRLf9GawVpef4&transform=1", results);
			}
		</script>

		<script>
				 document.addEventListener('DOMContentLoaded', function() {
				    var elems = document.querySelectorAll('.modal');
				    var instances = M.Modal.init(elems, 'noScrolling');
				  });
		</script>
	</body>
</html>